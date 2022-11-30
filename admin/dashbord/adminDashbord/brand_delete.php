<?php
session_start();
require_once('../../../connect.php');
$id=$_GET['id'];
$brands_delete_query = "DELETE FROM brands WHERE ID=$id";
$brands_delete_query_db = mysqli_query($db_connection, $brands_delete_query);
 header('location:./brand_list.php');
 $_SESSION['brands_delete']="$id Number Brand delete";

?>