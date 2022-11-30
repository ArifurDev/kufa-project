<?php
session_start();
require_once('../../../connect.php');
$id=$_GET['id'];

$work_delete_query = "DELETE FROM works WHERE ID=$id";
$work_delete_query_db = mysqli_query($db_connection, $work_delete_query);
$_SESSION['work_delete']='Delete success';
header('location:./work_list.php')
?>