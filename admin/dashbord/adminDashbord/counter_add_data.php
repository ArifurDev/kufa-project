<?php
session_start();
require_once('../../../connect.php'); //connection database

$counter_icon = $_POST['counter_icon'];
$counter_number = $_POST['counter_number'];
$counter_text = $_POST['counter_text'];
$flag=false;

if ($counter_icon) {
    if ($counter_number) {
        if ($counter_text) {
            $counter_query = "INSERT INTO `counter`(`counter_icon`, `counter_number`, `counter_text`) VALUES ('$counter_icon','$counter_number','$counter_text') ";
            mysqli_query($db_connection, $counter_query);
            $flag=true;
            $_SESSION['counter_success']='Counter Add Success';

        } else {
            $flag=true;
            $_SESSION['counter_error']='fill in the blanks';
        }
    } else {
        $flag=true;
        $_SESSION['counter_error']='fill in the blanks';
    }
    
} else {
    $flag=true;
    $_SESSION['counter_error']='fill in the blanks';
}




if ($flag) {
    header('location:./counter_add.php');
}


?>