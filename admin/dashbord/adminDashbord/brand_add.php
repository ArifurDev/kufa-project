<?php require_once('./includes/header.php')?>
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">

            <!-- service add -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <?php
                            if (isset($_SESSION['brand_success'])) { ?>
                                <p class="text-success text-center fs-4"><?= $_SESSION['brand_success'] ?></p>
                            <?php
                            }
                            unset($_SESSION['brand_success']);
                            ?>

                            <?php
                            if (isset($_SESSION['brand_error'])) { ?>
                                <p class="text-danger text-center"><?= $_SESSION['brand_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['brand_error']);
                            ?>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-3">Brand Add</h4>
                            <div class="example-container">
                                <form action="./brand_add_data.php" method="post" enctype="multipart/form-data">
                                    <div class="example-content">
                                        <label for="image">Brand Image</label>
                                        <input type="file" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="image"  name="brand_image">
                                      
                                    

                                        <div class="example-content">
                                            <label for="status">Brand Status</label>
                                            <select name="brand_status" id="status" class="form-control form-control-rounded m-b-sm">
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="example-content">
                                            <button type="submit" class="btn btn-primary">Add Brand</button>
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
