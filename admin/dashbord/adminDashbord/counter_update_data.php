<?php
session_start();
require_once('../../../connect.php'); //connection database
$id=$_POST['id'];
$counter_icon=$_POST['counter_icon'];
$counter_number=$_POST['counter_number'];
$counter_text=$_POST['counter_text'];


    $counter_update_query="UPDATE `counter` SET `counter_icon`='$counter_icon',`counter_number`='$counter_number',`counter_text`='$counter_text' WHERE ID='$id'";
    $counter_update_query_db=mysqli_query($db_connection,$counter_update_query);
    $_SESSION['counter_update']='Counter Update Success';
    header('location:./counter_list.php');
?>