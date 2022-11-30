<?php
session_start();
require_once('../../../connect.php');

 $id =$_GET['id']; 
 $counter_delete_query = "DELETE FROM counter WHERE ID=$id";
 $counter_delete_query_db = mysqli_query($db_connection, $counter_delete_query);
 header('location:./counter_list.php');
 $_SESSION['delete_success']='Counter Delete Success';

?>