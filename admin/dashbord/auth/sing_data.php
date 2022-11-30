<?php
session_start();
require_once('../../../connect.php');//connection database

$email =$_POST['email'];
$password =sha1($_POST['password']);

$email_pass_check_query="SELECT COUNT(*) AS 'result' FROM `admins` WHERE adminEmail = '$email' AND adminPass = '$password'";
$email_pass_check_db=mysqli_query($db_connection,$email_pass_check_query);
$email_pass_result=mysqli_fetch_assoc($email_pass_check_db);

//login email ---id,name admin dashbord e show korbo
$id_name_query="SELECT ID,adminName FROM admins WHERE adminEmail='$email'";
$id_name_connect_db=mysqli_query($db_connection,$id_name_query);
$id_name_result=mysqli_fetch_assoc($id_name_connect_db);

$user_id=$id_name_result['ID'];
$user_name=$id_name_result['adminName'];
//
$flag = false;

//email and password check

if ($email and $password) {
    if ($email_pass_result['result']) {
        $_SESSION['dashbord_show_email']=$email;
        $_SESSION['dashbord_show_id']=$user_id;
        $_SESSION['dashbord_show_name']=$user_name;
        header('location:../adminDashbord/home.php');
    }else{
        $flag=true;
        $_SESSION['email_pass_error']='Enter currect Email and password';
    } 
}else{
    $flag=true;
    $_SESSION['input_fild']='Enter your valid Email and passwprd';
}



if ($flag) {
    header('location:./sing.php');
}




?>

