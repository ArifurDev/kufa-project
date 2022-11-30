<?php
session_start();
require_once('../../../connect.php'); //connection database

if (!isset($_SESSION['dashbord_show_id'])) {
  header('location:./opps.php ');
}
$page_path = explode('/', $_SERVER['PHP_SELF']);
$page_name = end($page_path);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Responsive Admin Dashboard Template">
  <meta name="keywords" content="admin,dashboard">
  <meta name="author" content="stacks">
  <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title> Admin Dashboard </title>

  <!-- Styles -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
  <link href="../assets/plugins/pace/pace.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Theme Styles -->
  <link href="../assets/css/main.min.css" rel="stylesheet">
  <link href="../assets/css/custom.css" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/neptune.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/neptune.png" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


  <div class="app align-content-stretch d-flex flex-wrap">
    <div class="app-sidebar">
      <div class="logo">
        <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
        <div class="sidebar-user-switcher user-activity-online">
          <a href="#">
            <?php
            $user_id = $_SESSION['dashbord_show_id']; //user id session 
            $profile_pic_query = "SELECT profile_pic FROM admins WHERE ID='$user_id'";
            $profile_pic_query_db = mysqli_query($db_connection, $profile_pic_query);
            $demo_pic_name = mysqli_fetch_assoc($profile_pic_query_db)['profile_pic'];

            ?>
            <img src="./upload/profile/<?= $demo_pic_name ?>">
            <span class="activity-indicator"></span>
            <span class="user-info-text" title="user name"><?= $_SESSION['dashbord_show_name'] ?><br><span class="user-state-info">On a call</span></span>
          </a>
        </div>

      </div>
      <!-- show user email -->
      <p class="bg bg-primary text-light m-4 p-2" title="user email"><?= $_SESSION['dashbord_show_email'] ?></p>

      <div class="app-menu" style="height:400px; overflow:scroll;">
        <ul class="accordion-menu">
          <li class="sidebar-title">
            Apps
          </li>
          <li class="<?= ($page_name == 'home.php') ? 'active-page' : '' ?>">
            <a href="./home.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
          </li>
          <li class="<?= ($page_name == 'Profile.php')  ? 'active-page' : '' ?>">
            <a href="./Profile.php"><i class="material-icons-two-tone">face</i>Profile</a>
          </li>
          <li class="<?= ($page_name == 'service_add.php') || ($page_name == 'service_list.php') ? 'active-page' : '' ?> ">
            <a href=""><i class="material-icons-two-tone">manage_accounts</i>Service<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu" style="display: none;">
              <li>
                <a class="<?= ($page_name == 'service_add.php') ? 'active' : '' ?>" href="./service_add.php">Service Add</a>
              </li>
              <li>
                <a class="<?= ($page_name == 'service_list.php') ? 'active' : '' ?>" href="./service_list.php">Service List</a>
              </li>
            </ul>
          </li>



          <li class="<?= ($page_name == 'counter_add.php') || ($page_name == 'counter_list.php') ? 'active-page' : '' ?> ">
            <a href=""><i class="material-icons-two-tone">calculate</i>Counter<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu" style="display: none;">
              <li>
                <a class="<?= ($page_name == 'counter_add.php') ? 'active' : '' ?>" href="./counter_add.php">Counter Add</a>
              </li>
              <li>
                <a class="<?= ($page_name == 'counter_list.php') ? 'active' : '' ?>" href="./counter_list.php">Counter List</a>
              </li>
            </ul>
          </li>


          <li class="<?= ($page_name == 'social_link_add.php') ? 'active-page' : '' ?> ">
            <a href=""><i class="material-icons-two-tone">link</i>Social Media Link<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu" style="display: none;">
              <li>
                <a class="<?= ($page_name == 'social_link_add.php') ? 'active' : '' ?>" href="./social_link_add.php">social media link Add</a>
              </li>
              
            </ul>
          </li>



          <li class="<?= ($page_name == 'about_add.php') || ($page_name == 'skills_add.php') || ($page_name == 'skills_list.php') ? 'active-page' : '' ?> ">
            <a href=""><i class="material-icons-two-tone">person_add</i>About<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu" style="display: none;">
              <li>
                <a class="<?= ($page_name == 'about_add.php') ? 'active' : '' ?>" href="./about_add.php">About Add</a>
              </li>
              <li>
                <a class="<?= ($page_name == 'skills_add.php') ? 'active' : '' ?>" href="./skills_add.php">Skills Add</a>
              </li>
              <li>
                <a class="<?= ($page_name == 'skills_list.php') ? 'active' : '' ?>" href="./skills_list.php">Skills list</a>
              </li>
            </ul>
          </li>



          <li class="<?= ($page_name == 'work_add.php')|| ($page_name == 'work_list.php') ? 'active-page' : '' ?> ">
            <a href=""><i class="material-icons-two-tone">engineering</i>PORTFOLIO SHOWCASE<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu" style="display: none;">
              <li>
                <a class="<?= ($page_name == 'work_add.php') ? 'active' : '' ?>" href="./work_add.php">Work Add</a>
              </li>
              <li>
                <a class="<?= ($page_name == 'work_list.php') ? 'active' : '' ?>" href="./work_list.php">Work list</a>
              </li>
              
            </ul>
          </li>


          <li class="<?= ($page_name == 'testimonial_add.php') || ($page_name == 'testimonial_list.php') ? 'active-page' : '' ?>">
            <a href=""><i class="material-icons-two-tone">contacts</i>TESTIMONIAL<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu" style="display: none;">
              <li>
                <a class="<?= ($page_name == 'testimonial_add.php') ? 'active' : '' ?>" href="./testimonial_add.php">Testimonial Add</a>
              </li>
              <li>
                <a class="<?= ($page_name == 'testimonial_list.php') ? 'active' : '' ?>" href="./testimonial_list.php">Testimonial list</a>
              </li>
              
            </ul>
          </li>

          <li class="<?= ($page_name == 'brand_add.php') || ($page_name == 'brand_list.php') ? 'active-page' : '' ?>">
            <a href=""><i class="material-icons-two-tone">branding_watermark</i>Brand<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu" style="display: none;">
              <li>
                <a class="<?= ($page_name == 'brand_add.php') ? 'active' : '' ?>" href="./brand_add.php">Brand Add</a>
              </li>
              <li>
                <a class="<?= ($page_name == 'brand_list.php') ? 'active' : '' ?>" href="./brand_list.php">Brand list</a>
              </li>
              
            </ul>
          </li>


          <li class="<?= ($page_name == 'message_list.php') ? 'active-page' : '' ?>">
            <a href=""><i class="material-icons-two-tone">mark_email_unread</i>Message<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu" style="display: none;">
              <li>
                <a class="<?= ($page_name == 'message_list.php') ? 'active' : '' ?>" href="./message_list.php">Message List</a>
              </li>                   
            </ul>
          </li>

        </ul>
      </div>
    </div>
    <div class="app-container">
      <div class="search">
        <form>
          <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
        </form>
        <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
      </div>
      <div class="app-header">
        <nav class="navbar navbar-light navbar-expand-lg">
          <div class="container-fluid">
            <div class="navbar-nav" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                </li>
                <li class="nav-item dropdown hidden-on-mobile">
                  <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons">add</i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                    <li><a class="dropdown-item" href="#">New Workspace</a></li>
                    <li><a class="dropdown-item" href="#">New Board</a></li>
                    <li><a class="dropdown-item" href="#">Create Project</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown hidden-on-mobile">
                  <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons-outlined">explore</i>
                  </a>
                  <ul class="dropdown-menu dropdown-lg large-items-menu" aria-labelledby="exploreDropdownLink">
                    <li>
                      <h6 class="dropdown-header">Repositories</h6>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <h5 class="dropdown-item-title">
                          Neptune iOS
                          <span class="badge badge-warning">1.0.2</span>
                          <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                        </h5>
                        <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <h5 class="dropdown-item-title">
                          Neptune Android
                          <span class="badge badge-info">dev</span>
                          <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                        </h5>
                        <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                      </a>
                    </li>
                    <li class="dropdown-btn-item d-grid">
                      <button class="btn btn-primary">Create new repository</button>
                    </li>
                  </ul>
                </li>
              </ul>

            </div>
            <div class="d-flex">
              <ul class="navbar-nav">
              <a href="./../fontend/index.php" class="btn btn-secondary p-3 m-2"><i class="material-icons-two-tone">visibility</i>visite</a>
                <!-- logout button -->
                <a href="../auth/logout.php" class="btn btn-danger p-3 m-2"><i class="material-icons-two-tone">logout</i>logout</a>
              </ul>
            </div>
          </div>
        </nav>
      </div>