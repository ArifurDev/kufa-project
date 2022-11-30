<?php
session_start();
require_once('../../../connect.php'); //connection database

$service_titel = $_POST['service_titel'];
$service_icon = $_POST['service_icon'];
$service_description = $_POST['service_description'];
$service_status = $_POST['service_status'];
$id=$_POST['id']; 


    $service_update_query="UPDATE `service` SET `service_titel`='$service_titel',`service_icon`='$service_icon',`service_description`='$service_description',`service_status`='$service_status' WHERE ID=$id";
    $service_update_query_db = mysqli_query($db_connection,$service_update_query);
    $_SESSION['service_update']='Service Update Success';
    header('location:./service_list.php');
?>