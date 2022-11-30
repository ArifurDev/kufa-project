<?php
session_start();
require_once('../../../connect.php'); //connection database
$skills_category = $_POST['skills_category'];
$progress_number = $_POST['progress_number'];
$id=$_POST['id']; 



    $skills_update_query="UPDATE `skills` SET `skill_category`='$skills_category',`skill_number`='$progress_number' WHERE Id=$id";
    $skills_update_query_db = mysqli_query($db_connection,$skills_update_query);
    $_SESSION['skills_update']='Skills Update Success';
    header('location:./skills_list.php');
?>