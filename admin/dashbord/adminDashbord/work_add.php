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
                            if (isset($_SESSION['work_insert'])) { ?>
                                <p class="text-success text-center fs-4"><?= $_SESSION['work_insert'] ?></p>
                            <?php
                            }
                            unset($_SESSION['work_insert']);
                            ?>

                            <?php
                            if (isset($_SESSION['work_error'])) { ?>
                                <p class="text-danger text-center"><?= $_SESSION['work_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['work_error']);
                            ?>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-3">Work Add</h4>
                            <div class="example-container">
                                <form action="./work_add_data.php" method="post" enctype="multipart/form-data">
                                    <div class="example-content">
                                        <label for="title">Work Title</label>
                                        <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="title" placeholder="Work Title" name="work_title">
                                       
                                        <label for="heading">Work Heading</label>
                                        <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="heading" placeholder="Work Heading" name="work_heading">
                                       
                                        <label for="image">Work Image</label>
                                        <input type="file" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="image"  name="work_image">
                                       

                                        <label for="description">Work Description</label>
                                        <textarea name="work_description" id="description" cols="" rows="" id="description" class="form-control form-control-solid-bordered" aria-describedby="solidBoderedInputExample" placeholder="Work Description"></textarea>

                                        <div class="example-content">
                                            <label for="status">Work Status</label>
                                            <select name="work_status" id="status" class="form-control form-control-rounded m-b-sm">
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="example-content">
                                            <button type="submit" class="btn btn-primary">Add Work</button>
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
