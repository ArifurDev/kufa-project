<?php
session_start();
require_once('../../../connect.php'); //connection database
$id = $_SESSION['dashbord_show_id']; //user id session 

$work_title = $_POST['work_title'];
$work_heading = $_POST['work_heading'];
$work_description = $_POST['work_description'];
$work_image = $_FILES['work_image'];//image
$work_status = $_POST['work_status'];//work status active or inactive

$flag=false;






// work title checking
if ($work_title) {
    //work heading checking
    if ($work_heading) {
        //work heading checking
        if ($work_description) {
            //work image checking
                if ($work_image['name']) {
                    $image_name=$work_image['name'];
                    $explode_img_name = explode('.', $image_name);
                    $extension = end($explode_img_name);
                    if ($extension==='png' || $extension==='jpg' || $extension==='jpeg') {
                        $new_image_name=$id.'_'.time().'.'.$extension;
                        $tem_path = $_FILES['work_image']['tmp_name'];                        
                        $file_path = './upload/works/'.$new_image_name;
                        move_uploaded_file($tem_path,$file_path);
                        //work status checking
                        if ($work_status) {
                            $work_insert_query="INSERT INTO `works`(`work_title`, `work_heading`, `work_description`, `work_image`, `work_status`) VALUES ('$work_title','$work_heading','$work_description','$new_image_name','$work_status')";
                            mysqli_query($db_connection,$work_insert_query);
                            
                            
                            $flag=true;
                            $_SESSION['work_insert']='Work Insert Success';
                            
                        } else {
                            $flag=true;
                            $_SESSION['work_error']='fill in the work status';
                        }
                        
                    }
            }
            
        } else {
            $flag=true;
            $_SESSION['work_error']='fill in the work description';
        }
        
    } else {
        $flag=true;
        $_SESSION['work_error']='fill in the work heading';
    }
} else {
    $flag=true;
    $_SESSION['work_error']='fill in the work title';
}



if ($flag) {
    header('location:./work_add.php');
}

?>