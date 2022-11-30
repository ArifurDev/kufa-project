<?php 
 require_once('./includes/header.php');
//  if (isset($_SESSION['dashbord_show_id'])) {
//     header('location:./adminDashbord/home.php');
//  }


?>

 <div class="app app-error align-content-stretch d-flex flex-wrap">
        <div class="app-error-info">
            <h5>Oops!</h5>
            <span>It seems that the page you are looking for no longer exists.<br>
                We will try our best to fix this soon.</span>
            <a href="../auth/sing.php" class="btn btn-dark">Go to Login page</a>
        </div>
        <div class="app-error-background"></div>
    </div>

<?php 
 require_once('./includes/footer.php');
?>