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
                            if (isset($_SESSION['About_update'])) { ?>
                                <p class="text-success text-center"><?= $_SESSION['About_update'] ?></p>
                            <?php
                            }
                            unset($_SESSION['About_update']);
                            ?>
                         
                         <?php
                            if (isset($_SESSION['about_update_error'])) { ?>
                                <p class="text-danger text-center"><?= $_SESSION['about_update_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['about_update_error']);
                            ?>    


                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-3">About</h4>
                            <div class="example-container">
                                <form action="./about_add_data.php" method="post">
                                    <div class="example-content">
                                       <label for="description">About Description</label>
                                        <textarea name="about_description" id="description" cols="" rows="" id="description" class="form-control form-control-solid-bordered" aria-describedby="solidBoderedInputExample"></textarea>
                                        
                                        
                                       
                                        <div class="example-content">
                                            <button type="submit" class="btn btn-primary">About Add</button>
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