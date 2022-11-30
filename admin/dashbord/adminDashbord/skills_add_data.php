
<?php
session_start();
require_once('../../../connect.php'); //connection database
$id = $_SESSION['dashbord_show_id'];

$skills_category = $_POST['skills_category'];
$progress_number = $_POST['progress_number'];

$flag = false;


if ($skills_category) {
    if ($progress_number) {
        $skills_add_query="INSERT INTO `skills`( `skill_category`, `skill_number`) VALUES ('$skills_category','$progress_number')";
        $skills_add_query_db=mysqli_query($db_connection,$skills_add_query);
        $flag = true;
        $_SESSION['Skills_update'] = 'Skills Update Success';
    } else {
        $flag = true;
        $_SESSION['Skills_update_error'] = 'fill in the blanks';
    }
} else {
    $flag = true;
    $_SESSION['Skills_update_error'] = 'fill in the blanks';
}


if ($flag) {
    header('location:./skills_add.php');
}


?>

