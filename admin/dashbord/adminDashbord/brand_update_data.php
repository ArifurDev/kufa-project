<?php
session_start();
require_once('../../../connect.php'); //connection database
$user_id = $_SESSION['dashbord_show_id']; //user id session 

$brand_image=$_FILES['brand_image'];
$brand_status=$_POST['brand_status'];
$id=$_POST['update_id'];


$flag=false;


    if ($brand_image['name']!='' && $brand_status) {
        $image_name = $brand_image['name'];
        $explode_img_name = explode('.', $image_name);
        $extension = end($explode_img_name);
            if ($extension==='png' || $extension==='jpg' || $extension==='jpeg') {    
                $new_img_name =$user_id.'_'.time().'.'.$extension;
                $tmp_path = $brand_image['tmp_name'];
                $file_path = './upload/brand/'.$new_img_name;
                move_uploaded_file($tmp_path, $file_path);

                //brands update query
                $brands_update_query="UPDATE `brands` SET `brand_image`='$new_img_name',`brand_status`='$brand_status' WHERE ID=$id";
                
                $brands_query_db=mysqli_query($db_connection,$brands_update_query);
                $flag=true;
                $_SESSION['brand_update_success']='Brand UPDATE Success';
                
            } else {
                $flag=true;
                $_SESSION['brand_update_error']='image extension not valid';               
            }
            
            

    }else{
        $flag=true;
        $_SESSION['brand_update_error']='fill in the blanks';    
    }
    
 

if ($flag) {
    header('location:./brand_update.php');
}


?>