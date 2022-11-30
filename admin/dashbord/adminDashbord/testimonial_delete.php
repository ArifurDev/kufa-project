<?php
session_start();
require_once('../../../connect.php');
$id=$_GET['id'];
$testimonial_delete_query = "DELETE FROM testimonial WHERE ID=$id";
$testimonial_delete_query_db = mysqli_query($db_connection, $testimonial_delete_query);
 header('location:./testimonial_list.php');
 $_SESSION['testimonial_delete']="$id Number Testimonial delete";

?>