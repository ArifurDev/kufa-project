<?php
session_start();
require_once('../../../connect.php');
$name = htmlspecialchars(trim($_POST['user_name']));
$email = htmlspecialchars($_POST['user_email']);
$pass = htmlspecialchars($_POST['user_password']);
$confi_pass = htmlspecialchars($_POST['user_confirm_password']);

//email check in database 
$email_check_query = "SELECT COUNT(*) AS 'result' FROM `admins` WHERE adminEmail='$email'";
$email_check_db = mysqli_query($db_connection, $email_check_query);
$email_check_result = mysqli_fetch_assoc($email_check_db);

$flag = false;

//name validation
if ($name) {
    $remove_sps = str_replace(" ", "", $name);
    if (ctype_alpha($remove_sps)) {
        $_SESSION['old_name'] = $name;
    } else {
        $flag = true;
        $_SESSION['name_error'] = 'try again';
    }
} else {
    $flag = true;
    $_SESSION['name_error'] = 'Enter your name';
}

//email validation

if ($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($email_check_result['result'] == 1) {
            header('location: ./signup.php');
            $_SESSION['email_check'] = 'alrady use this email';
        }
        $_SESSION['old_email'] = $email;
    }
} else {
    $flag = true;
    $_SESSION['email_error'] = 'Enter valid Email';
}


//pass validation

if ($pass) {
    if (!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $pass)) {
        $flag = true;
        $_SESSION['pass_error'] = 'password not valid';
    }
} else {
    $flag = true;
    $_SESSION['pass_error'] = 'Enter  password';
}

//pass and con_pass chack
if ($pass == $confi_pass) {
} else {
    $flag = true;
    $_SESSION['con_error'] = 'pass and con_pass not same';
}


if ($flag) {
    header('location:./signup.php');
} else {
    //mysqil
    $password_encode = sha1($pass);
    $admin_querry = "INSERT INTO `admins`(`adminName`, `adminEmail`, `adminPass`) VALUES 
    ('$name','$email','$password_encode')";
    mysqli_query($db_connection, $admin_querry);
    header('location:./sing.php');
    $_SESSION['usre_status']="$name";
}
