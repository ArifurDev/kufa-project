<?php
session_start();
require_once('../../../connect.php'); //connection database
$id=$_SESSION['dashbord_show_id'];
$fb_link=htmlspecialchars($_POST['fb_link']);
$twitter_link=htmlspecialchars($_POST['twitter_link']);
$linkedin_link=htmlspecialchars($_POST['linkedin_link']);

$flag=false;

 if ($fb_link) {
    if (filter_var($fb_link, FILTER_VALIDATE_URL)) {
        if ($twitter_link) {
            if (filter_var($twitter_link, FILTER_VALIDATE_URL)) {
                if ($linkedin_link) {
                    if (filter_var($linkedin_link, FILTER_VALIDATE_URL)) {
                                            
                        $social_link_update_query="UPDATE `admins` SET `fb_link`='$fb_link',`twitter_link`='$twitter_link',`linkedin_link`='$linkedin_link' WHERE ID='$id'";
                        $social_link_update_query_db=mysqli_query($db_connection,$social_link_update_query);
                        $_SESSION['Social_link_update']='Social Medea link Update Success';
                        $flag=true;
                    } else {
                        $_SESSION['validatios_error']="$twitter_link,is not a valid URL";
                        $flag=true;
                    }
                    
                } else {
                    $_SESSION['Social_link_update_error']='fill in the blanks';
                    $flag=true;
                }
                
            } else {
                $_SESSION['validatios_error']="$twitter_link,is not a valid URL";
                $flag=true;
            }
            
        } else {
            $_SESSION['Social_link_update_error']='fill in the blanks';
           $flag=true;
        }
        
    } else {
        $_SESSION['validatios_error']="$fb_link,is not a valid URL";
        $flag=true;
    }
    
 } else {
    $_SESSION['Social_link_update_error']='fill in the blanks';
    $flag=true;
 }
 



    if ($flag) {
        header('location:./social_link_add.php');
    }
?>