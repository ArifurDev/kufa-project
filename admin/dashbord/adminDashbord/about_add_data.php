
<?php
session_start();
require_once('../../../connect.php'); //connection database
$id = $_SESSION['dashbord_show_id'];

$about_description = htmlspecialchars($_POST['about_description']);

$flag = false;


if ($about_description) {
    $about_update_query = "UPDATE `admins` SET `about_description`='$about_description' WHERE ID='$id'";
    $about_update_query_db = mysqli_query($db_connection, $about_update_query);
    $flag = true;
    $_SESSION['About_update'] = 'About Update Success';
} else {
    $flag = true;
    $_SESSION['about_update_error'] = 'fill in the blanks';
}


if ($flag) {
    header('location:./about_add.php');
}


?>

