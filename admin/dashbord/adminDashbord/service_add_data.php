<?php
session_start();
require_once('../../../connect.php'); //connection database
$service_titel = $_POST['service_titel'];
$service_icon = $_POST['service_icon'];
$service_description = $_POST['service_description'];
$service_status = $_POST['service_status'];

$flag = false;


if ($service_titel) {
    if ($service_icon) {
        if ($service_description) {
            if ($service_status) {
                $service_query = "INSERT INTO `service`(`service_titel`, `service_icon`, `service_description`, `service_status`) VALUES 
                ('$service_titel','$service_icon','$service_description','$service_status')";
                mysqli_query($db_connection, $service_query);
                $flag=true;
                $_SESSION['service_insert']='Service Insert Success';
            } else {
                $flag=true;
                $_SESSION['service_error']='fill in the blanks';
            }
        } else {
            $flag=true;
            $_SESSION['service_error']='fill in the blanks';
        }
    } else {
        $flag=true;
        $_SESSION['service_error']='fill in the blanks';
    }
} else {
    $flag=true;
    $_SESSION['service_error']='fill in the blanks';
}



if ($flag) {
    header('location:./service_add.php');
}
