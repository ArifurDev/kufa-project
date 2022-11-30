<?php
session_start();
require_once('../../../connect.php'); //connection database
$user_id = $_SESSION['dashbord_show_id']; //user id session 
$id=$_POST['update_id'];

$testimonial_image=$_FILES['testimonial_image'];

$testimonial_description=$_POST['testimonial_description'];

$testimonial_name=$_POST['testimonial_name'];

$testimonial_title=$_POST['testimonial_title'];

$testimonial_status=$_POST['testimonial_status'];

$flag=false;


if ($testimonial_description && $testimonial_name && $testimonial_title && $testimonial_status) {
    if ($testimonial_image['name']!='') {
        $image_name = $testimonial_image['name'];
        $explode_img_name = explode('.', $image_name);
        $extension = end($explode_img_name);
            if ($extension==='png' || $extension==='jpg' || $extension==='jpeg') {    
                $new_img_name =$user_id.'_'.time().'.'.$extension;
                $tmp_path = $testimonial_image['tmp_name'];
                $file_path = './upload/testimonial/'.$new_img_name;
                move_uploaded_file($tmp_path, $file_path);

                //testimonial update query
                
                
                $testimonial_update_query="UPDATE `testimonial` SET `testimonial_image`='$new_img_name',`testimonial_description`='$testimonial_description',`testimonial_name`='$testimonial_name',`testimonial_title`='$testimonial_title',`testimonial_status`='$testimonial_status' WHERE ID=$id";
                
                $testimonial_query_db=mysqli_query($db_connection,$testimonial_update_query);

                $flag=true;
                $_SESSION['testimonial_update_success']='Testimonial Update Success';
                
            } else {
                $flag=true;
                $_SESSION['testimonial_update_error']='image extension not valid';               
            }
            


    }
    
} else {
    $flag=true;
    $_SESSION['testimonial_update_error']='fill in the blanks';
}


if ($flag) {
    header('location:./testimonial_update.php');
}


?>