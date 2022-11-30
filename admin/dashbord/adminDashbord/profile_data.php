<?php
session_start();
require_once('../../../connect.php'); //connection database
$user_id = $_SESSION['dashbord_show_id']; //user id session 
$user_phone_number = $_POST['user_number'];
$flag = false;

//password
if (isset($_POST['update_pass'])) {
$Current_pass = $_POST['Current_pass'];
$new_pass = $_POST['new_pass'];
$confirm_pass = $_POST['confirm_pass'];


    if ($Current_pass) { //current password
        $Current_pass_query = "SELECT adminPass FROM admins WHERE ID='$user_id'";
        $Current_pass_db = mysqli_query($db_connection, $Current_pass_query);
        $Current_pass_query_db_result = mysqli_fetch_assoc($Current_pass_db);

        if (sha1($Current_pass) === $Current_pass_query_db_result['adminPass']) {
            if ($new_pass) {
                if (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $new_pass)) {
                    if ($Current_pass === $new_pass) {
                        $flag = true;
                        $_SESSION['same_error'] = 'your current password and new password same';
                    } else {
                        if ($confirm_pass) {
                            if ($new_pass === $confirm_pass) {
                                $final_pass = sha1($new_pass);
                                $update_password_query = "UPDATE admins SET adminPass='$final_pass' WHERE ID='$user_id'";
                                $update_password_query_db = mysqli_query($db_connection, $update_password_query);
                                $flag = true;
                                $_SESSION['password_success'] = 'password update successfully';
                            } else {
                                $flag = true;
                                $_SESSION['new_current_error'] = 'new password and confirm password not same';
                            }
                        } else {
                            $flag = true;
                            $_SESSION['confirm_error'] = 'enter confirm password';
                        }
                    }
                } else {
                    $flag = true;
                    $_SESSION['password_invalid_error'] = 'Enter valid password';
                }
            } else {
                $flag = true;
                $_SESSION['new_pass_error'] = ' Enter new password ';
            }
        } else {
            $flag = true;
            $_SESSION['curr_pass_error'] = 'Agin Enter your current password ';
        }
    } else {
        $flag = true;
        $_SESSION['current_pass_error'] = 'Enter your current password';
    }
}

//profile pic uploaded
if (isset($_POST['upload_profile_Pic'])) {
    if ($_FILES['profile_pic']['name'] != '') {
        $image_name = $_FILES['profile_pic']['name'];
        $explode_img_name = explode('.', $image_name);
        $extension = end($explode_img_name);
        $new_img_name = $user_id . '.' . $extension;
        $tem_path = $_FILES['profile_pic']['tmp_name'];
        $file_path = './upload/profile/' . $new_img_name;
        move_uploaded_file($tem_path, $file_path);
        //profile pic uploaded query
        $profile_update_query = "UPDATE admins SET profile_pic='$new_img_name' WHERE ID='$user_id'";
        $profile_update_query_db = mysqli_query($db_connection, $profile_update_query);
        $_SESSION['profile_update'] = 'Profile Add successfully';
        $flag=true;
    }else{

        $flag=true;
    }
}else {
    $flag=true;
}


 //user phone number uploaded
if (isset($_POST['update_number'])) {
    if ($user_phone_number) { 
                            //phone number uploaded
        $number_update_query = "UPDATE admins SET userPhone='$user_phone_number' WHERE ID='$user_id'";
        $number_update_query_db = mysqli_query($db_connection, $number_update_query);
        $_SESSION['number_update'] = 'Number update successfully';
        $_SESSION['add_old_number']=$user_phone_number;
        $flag=true;
    }else{

        $flag=true;
    }
}else {
    $flag=true;
}



if ($flag) {
    header('location:./Profile.php');
}
