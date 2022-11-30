<?php
session_start();
require_once('../../../connect.php');
$id =$_GET['id'];


$message_delete_query = "DELETE FROM message WHERE ID=$id";
$message_delete_query_db = mysqli_query($db_connection, $$message_delete_query);
 header('location:./service_list.php');
 $_SESSION['message_delete']="$id Number Message delete";

?>