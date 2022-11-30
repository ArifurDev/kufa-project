<?php
session_start();
require_once('../../../connect.php');
$id=$_GET['id'];
$skills_delete_query = "DELETE FROM skills WHERE ID=$id";
$skills_delete_query_db = mysqli_query($db_connection, $skills_delete_query);
 header('location:./skills_list.php');

?>