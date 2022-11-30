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
                            if (isset($_SESSION['brand_update_success'])) { ?>
                                <p class="text-success text-center fs-4"><?= $_SESSION['brand_update_success'] ?></p>
                            <?php
                            }
                            unset($_SESSION['brand_update_success']);
                            ?>

                            <?php
                            if (isset($_SESSION['brand_update_error'])) { ?>
                                <p class="text-danger text-center"><?= $_SESSION['brand_update_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['brand_update_error']);
                            ?>
                            <?php
                            //database value show
                            $brands_show_query = "SELECT * FROM brands";
                            $brands_query_db = mysqli_query($db_connection, $brands_show_query);
                            $brands_show = mysqli_fetch_assoc($brands_query_db);
                            ?>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-3">Brand Update</h4>
                            <div class="example-container">
                                <form action="./brand_update_data.php" method="post" enctype="multipart/form-data">
                                    <div class="example-content">
                                        <input hidden type="number" name="update_id" value="<?= $brands_show['ID'] ?>">
                                        <img src="./upload/brand/<?= $brands_show['brand_image'] ?>" alt="" srcset="" width="150" height="80" class="m-3"><br>
                                        <label for="image">Brand Image</label>
                                        <input type="file" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="image" name="brand_image">



                                        <div class="example-content">
                                            <label for="status">Brand Status</label>
                                            <select name="brand_status" id="status" class="form-control form-control-rounded m-b-sm">
                                                <option value="active" <?=($brands_show['brand_status']==='active')? 'selected' : ''?>>Active</option>
                                                <option value="inactive" <?=($brands_show['brand_status']==='inactive')? 'selected' : ''?>>Inactive</option>
                                            </select>
                                        </div>
                                        <div class="example-content">
                                            <button type="submit" class="btn btn-primary">Brand Update</button>
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