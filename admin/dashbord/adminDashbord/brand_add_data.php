<?php
session_start();
require_once('../../../connect.php'); //connection database
$id = $_SESSION['dashbord_show_id']; //user id session 

$brand_image=$_FILES['brand_image'];
$brand_status=$_POST['brand_status'];



$flag=false;


    if ($brand_image['name']!='' && $brand_status) {
        $image_name = $brand_image['name'];
        $explode_img_name = explode('.', $image_name);
        $extension = end($explode_img_name);
            if ($extension==='png' || $extension==='jpg' || $extension==='jpeg') {    
                $new_img_name =$id.'_'.time().'.'.$extension;
                $tmp_path = $brand_image['tmp_name'];
                $file_path = './upload/brand/'.$new_img_name;
                move_uploaded_file($tmp_path, $file_path);

                //testimonial insert query
                $brand_query ="INSERT INTO `brands`( `brand_image`, `brand_status`) VALUES ('$new_img_name','$brand_status')";
                $brand_query_db=mysqli_query($db_connection,$brand_query);
                $flag=true;
                $_SESSION['brand_success']='Brand INSERT Success';
                
            } else {
                $flag=true;
                $_SESSION['brand_error']='image extension not valid';               
            }
            
            

    }else{
        $flag=true;
        $_SESSION['brand_error']='fill in the blanks';    
    }
    
 

if ($flag) {
    header('location:./brand_add.php');
}


?>