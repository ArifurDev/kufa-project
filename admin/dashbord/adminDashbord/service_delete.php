<?php
session_start();
require_once('../../../connect.php');
$id =$_GET['id'];


$service_delete_query = "DELETE FROM service WHERE ID=$id";
$service_delete_query_db = mysqli_query($db_connection, $service_delete_query);
 header('location:./service_list.php');

?>