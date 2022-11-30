<?php
session_start();
require_once('../../../connect.php'); //connection database
$user_id = $_SESSION['dashbord_show_id']; //user id session 
$name = $_POST['update_name'];
$flag = false;


//name validation
if (isset($_POST['update'])) {
    if ($name) {
        $remove_sps = str_replace(" ", "", $name);
        if (ctype_alpha($remove_sps)) {
            
        } else {
            $flag = true;
            $_SESSION['name_update_error'] = 'Name Number ache';          
        }
    } else {
        $flag = true;
        $_SESSION['name_error'] = 'Enter your name';   
    }
}
if ($flag) {
    header('./Profile.php');
} elseif (isset($_POST['update'])) {
    $user_name_update_query = "UPDATE admins SET adminName='$name' WHERE ID='$user_id'";
    $user_name_update_query_db = mysqli_query($db_connection, $user_name_update_query);
    $_SESSION['dashbord_show_name'] = $name;
    $flag = true;
    $_SESSION['name_change_suc'] = 'Name update successfully';
}
?>