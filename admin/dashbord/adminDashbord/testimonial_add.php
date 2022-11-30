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
                            if (isset($_SESSION['testimonial_success'])) { ?>
                                <p class="text-success text-center fs-4"><?= $_SESSION['testimonial_success'] ?></p>
                            <?php
                            }
                            unset($_SESSION['testimonial_success']);
                            ?>

                            <?php
                            if (isset($_SESSION['testimonial_error'])) { ?>
                                <p class="text-danger text-center"><?= $_SESSION['testimonial_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['testimonial_error']);
                            ?>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-3">Testimonial Add</h4>
                            <div class="example-container">
                                <form action="./testimonial_add_data.php" method="post" enctype="multipart/form-data">
                                    <div class="example-content">
                                        <label for="image">Testimonial Image</label>
                                        <input type="file" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="image"  name="testimonial_image">
                                      
                                        <label for="description">Testimonial Description</label>
                                        <textarea name="testimonial_description" id="description" cols="" rows="" id="description" class="form-control form-control-solid-bordered" aria-describedby="solidBoderedInputExample" placeholder="Testimonial Description"></textarea>
                                       
                                        <label for="heading">Testimonial Name</label>
                                        <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="heading" placeholder="Testimonial Name" name="testimonial_name">
                                       
                                       
                                        <label for="title">Testimonial Title</label>
                                        <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="title" placeholder="Testimonial Title" name="testimonial_title">
                                       


                                        <div class="example-content">
                                            <label for="status">Testimonial Status</label>
                                            <select name="testimonial_status" id="status" class="form-control form-control-rounded m-b-sm">
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="example-content">
                                            <button type="submit" class="btn btn-primary">Add Testimonial</button>
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
