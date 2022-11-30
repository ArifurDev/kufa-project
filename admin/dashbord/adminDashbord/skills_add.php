<?php require_once('./includes/header.php') ?>
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">

            <!-- service add -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <?php
                            if (isset($_SESSION['Skills_update'])) { ?>
                                <p class="text-success text-center"><?= $_SESSION['Skills_update'] ?></p>
                            <?php
                            }
                            unset($_SESSION['Skills_update']);
                            ?>

                            <?php
                            if (isset($_SESSION['Skills_update_error'])) { ?>
                                <p class="text-danger text-center"><?= $_SESSION['Skills_update_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['Skills_update_error']);
                            ?>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-3">Skills Add</h4>
                            <div class="example-container">
                                <form action="./skills_add_data.php" method="post">
                                    <div class="example-content">
                                        <label for="category">skill Category</label>
                                        <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="category" placeholder="Skills Category" name="skills_category">


                                        <label for="progress">progress Number</label>
                                        <input  type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="progress" placeholder="progress number" name="progress_number">

                                     
                                        
                                        <div class="example-content">
                                            <button type="submit" class="btn btn-primary">Add Skills</button>
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

