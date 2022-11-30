<?php
session_start();
require_once('../../../connect.php'); //connection database
$id = $_SESSION['dashbord_show_id']; //user id session 

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
                $new_img_name =$id.'_'.time().'.'.$extension;
                $tmp_path = $testimonial_image['tmp_name'];
                $file_path = './upload/testimonial/'.$new_img_name;
                move_uploaded_file($tmp_path, $file_path);

                //testimonial insert query
                $testimonial_query ="INSERT INTO `testimonial`( `testimonial_image`, `testimonial_description`, `testimonial_name`, `testimonial_title`, `testimonial_status`) VALUES ('$new_img_name','$testimonial_description','$testimonial_name','$testimonial_title','$testimonial_status')";
                $testimonial_query_db=mysqli_query($db_connection,$testimonial_query);
                $flag=true;
                $_SESSION['testimonial_success']='Testimonial INSERT Success';
                
            } else {
                $flag=true;
                $_SESSION['testimonial_error']='image extension not valid';               
            }
            


    }
    
} else {
    $flag=true;
    $_SESSION['testimonial_error']='fill in the blanks';
}


if ($flag) {
    header('location:./testimonial_add.php');
}


?>