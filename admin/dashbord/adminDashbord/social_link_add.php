<?php require_once('./includes/header.php');
require_once('../../../connect.php'); //connection database 
?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">

            <!-- service add -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            
                            <?php
                            if (isset($_SESSION['Social_link_update'])) { ?>
                                <p class="text-success text-center"><?= $_SESSION['Social_link_update'] ?></p>
                            <?php
                            }
                            unset($_SESSION['Social_link_update']);
                            ?>

                            <?php
                            if (isset($_SESSION['validatios_error'])) { ?>
                                <p class="text-danger text-center"><?= $_SESSION['validatios_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['validatios_error']);
                            ?>

                            <?php
                            if (isset($_SESSION['Social_link_update_error'])) { ?>
                                <p class="text-danger text-center"><?= $_SESSION['Social_link_update_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['Social_link_update_error']);
                            ?>
                            


                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-3">Social Media Link </h4>
                            <div class="example-container">
                                <form action="./social_link_add_data.php" method="post">
                                    
                                    <div class="example-content">
                                    <label for="facebook"><i class="fa fa-facebook mx-3 fs-3" aria-hidden="true"></i>Facebook Link</label>
                                        <input  type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="facebook" placeholder="facebook link" name="fb_link">
                                        
                                    <label for="twitter"><i class="fa fa-twitter mx-3 fs-3" aria-hidden="true"></i>twitter Link</label>
                                        <input  type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="twitter" placeholder="twitter link" name="twitter_link">
                                        
                                     <label for="linkedin"><i class="fa fa-linkedin mx-3 fs-3" aria-hidden="true"></i> linkedin Link</label>
                                        <input  type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="linkedin" placeholder="linkedin link" name="linkedin_link">
                                        
                                       
                                        <div class="example-content">
                                            <button type="submit" class="btn btn-primary">Add Link</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<?php require_once('./includes/footer.php') ?>
