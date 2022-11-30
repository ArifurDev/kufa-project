<?php
session_start();
require_once('../../../connect.php'); //connection database
$id = $_POST['id']; //works id 

$work_title = $_POST['work_title'];
$work_heading = $_POST['work_heading'];
$work_description = $_POST['work_description'];
$work_image = $_FILES['work_image']; //image
$work_status = $_POST['work_status']; //work status active or inactive

$flag = false;
if ($work_title && $work_heading && $work_description && $work_image['name'] && $work_status) {
    $image_name = $work_image['name'];
    $explode_img_name = explode('.', $image_name);
    $extension = end($explode_img_name);
    if ($extension === 'png' || $extension === 'jpg' || $extension === 'jpeg') {
        $new_image_name = $id.'_'.time().'.'.$extension;
        $tem_path = $_FILES['work_image']['tmp_name'];
        $file_path = './upload/works/'.$new_image_name;
        move_uploaded_file($tem_path, $file_path);
        $work_update_query = "UPDATE `works` SET `work_title`='$work_title',`work_heading`='$work_heading',`work_description`='$work_description',`work_image`='$new_image_name',`work_status`='$work_status' WHERE ID=$id";
        mysqli_query($db_connection, $work_update_query);
        header('location:./work_list.php');
        $_SESSION['work_update'] = 'Work update Success';
    } else {
        $flag = true;
        $_SESSION['work_update_error'] = 'Image extension not valid ';
    }
} else {
    $flag = true;
    $_SESSION['work_update_error'] = 'fill in the Work update ';
}

if ($flag) {
    header('location:./work_list.php');
}


die();

// work title checking
if ($work_title) {
    //work heading checking
    if ($work_heading) {
        //work heading checking
        if ($work_description) {
            //work image checking
            if ($work_image['name']) {
                $image_name = $work_image['name'];
                $explode_img_name = explode('.', $image_name);
                $extension = end($explode_img_name);
                if ($extension === 'png' || $extension === 'jpg' || $extension === 'jpeg') {
                    $new_image_name = $id . '_' . time() . '.' . $extension;
                    $tem_path = $_FILES['work_image']['tmp_name'];
                    $file_path = './upload/works/' . $new_image_name;
                    move_uploaded_file($tem_path, $file_path);
                    //work status checking
                    if ($work_status) {
                        $work_update_query = "UPDATE `works` SET `work_title`='$work_title',`work_heading`='$work_heading',`work_description`='$work_description',`work_image`='$new_image_name',`work_status`='$work_status' WHERE ID=$id";
                        mysqli_query($db_connection, $work_update_query);
                        header('location:./work_list.php');
                        $_SESSION['work_update'] = 'Work update Success';
                    } else {
                        $flag = true;
                        $_SESSION['work_update_error'] = 'fill in the work status';
                    }
                }
            }
        } else {
            $flag = true;
            $_SESSION['work_update_error'] = 'fill in the work description';
        }
    } else {
        $flag = true;
        $_SESSION['work_update_error'] = 'fill in the work heading';
    }
} else {
    $flag = true;
    $_SESSION['work_update_error'] = 'fill in the work title';
}



if ($flag) {
    header('location:./work_list.php');
}
?>