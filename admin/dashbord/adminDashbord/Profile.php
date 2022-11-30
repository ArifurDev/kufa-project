<?php require_once('./includes/header.php') ?>

        <div class="app-content">
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="page-description">
                                <h1>Profile</h1>
                            </div>
                        </div>
                    </div>

                    <!-- update section -->
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="example-content">
                                    <form action="./profile_name_data.php" method="post" method="post">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="update_name" value="<?= $_SESSION['dashbord_show_name'] ?>">
                                        </div>
                                        <?php
                                        if (isset($_SESSION['name_change_suc'])) { ?>
                                            <p class="text-success fs-5"><?= $_SESSION['name_change_suc'] ?></p>
                                        <?php
                                        }
                                        unset($_SESSION['name_change_suc']);
                                        ?>
                                        <button type="submit" class="btn btn-info" name="update">update</button>
                                        </br></br>
                                    </form>
                                    <form action="./profile_data.php" method="post" enctype="multipart/form-data">

                                        <label for="Current" class="form-label">Current Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="Current" name="Current_pass">
                                        </div>
                                        <label for="New" class="form-label">New Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="New" name="new_pass">
                                        </div>
                                        <label for="Confirm" class="form-label">Confirm Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="Confirm" name="confirm_pass">
                                        </div>
                                        <?php
                                        if (isset($_SESSION['same_error'])) { ?>
                                            <p class="text-danger"><?= $_SESSION['same_error'] ?></p>
                                        <?php
                                        }
                                        unset($_SESSION['same_error']);
                                        ?>

                                        <?php
                                        if (isset($_SESSION['password_success'])) { ?>
                                            <p class="text-success fs-4"><?= $_SESSION['password_success'] ?></p>
                                        <?php
                                        }
                                        unset($_SESSION['password_success']);
                                        ?>

                                        <?php
                                        if (isset($_SESSION['new_current_error'])) { ?>
                                            <p class="text-danger"><?= $_SESSION['new_current_error'] ?></p>
                                        <?php
                                        }
                                        unset($_SESSION['new_current_error']);
                                        ?>


                                        <?php
                                        if (isset($_SESSION['confirm_error'])) { ?>
                                            <p class="text-danger"><?= $_SESSION['confirm_error'] ?></p>
                                        <?php
                                        }
                                        unset($_SESSION['confirm_error']);
                                        ?>



                                        <?php
                                        if (isset($_SESSION['password_invalid_error'])) { ?>
                                            <p class="text-danger"><?= $_SESSION['password_invalid_error'] ?></p>
                                        <?php
                                        }
                                        unset($_SESSION['password_invalid_error']);
                                        ?>



                                        <?php
                                        if (isset($_SESSION['new_pass_error'])) { ?>
                                            <p class="text-danger"><?= $_SESSION['new_pass_error'] ?></p>
                                        <?php
                                        }
                                        unset($_SESSION['new_pass_error']);
                                        ?>



                                        <?php
                                        if (isset($_SESSION['curr_pass_error'])) { ?>
                                            <p class="text-danger"><?= $_SESSION['curr_pass_error'] ?></p>
                                        <?php
                                        }
                                        unset($_SESSION['curr_pass_error']);
                                        ?>


                                        <?php
                                        if (isset($_SESSION['current_pass_error'])) { ?>
                                            <p class="text-danger"><?= $_SESSION['current_pass_error'] ?></p>
                                        <?php
                                        }
                                        unset($_SESSION['current_pass_error']);
                                        ?>

                                        </br>
                                        <button type="submit" class="btn btn-info" name="update_pass">update Password</button>
                                        </br>

                                        <label for="tel" class="form-label mt-5">Add your Phone Number</label>
                                        <div class="input-group mb-3">
                                            <input type="tel" class="form-control" id="tel" name="user_number">
                                        </div>
                                        <?php
                                        if (isset($_SESSION['number_update'])) { ?>
                                            <p class="text-success fs-5"><?= $_SESSION['number_update'] ?></p>
                                        <?php
                                        }
                                        unset($_SESSION['number_update']);
                                        ?>
                                        <button type="submit" class="btn btn-info" name="update_number">Add your phone Number </button>




                                        <div class="example-content">
                                            <div class="mb-3 mt-5">
                                                <label for="formFile" class="form-label">Profile Upload</label>
                                                <input class="form-control mb-4" type="file" id="formFile" name="profile_pic">
                                                <?php
                                                if (isset($_SESSION['profile_update'])) { ?>
                                                    <p class="text-success fs-5"><?= $_SESSION['profile_update'] ?></p>
                                                <?php
                                                }
                                                unset($_SESSION['profile_update']);
                                                ?>
                                            </div>
                                            <button type="submit" class="btn btn-info mt-3 mb-3" name="upload_profile_Pic">Update Profile pic</button>
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
</div>

<?php require_once('./includes/footer.php') ?>