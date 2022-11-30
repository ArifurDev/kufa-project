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
                            if (isset($_SESSION['service_insert'])) { ?>
                                <p class="text-info text-center"><?= $_SESSION['service_insert'] ?></p>
                            <?php
                            }
                            unset($_SESSION['service_insert']);
                            ?>

                            <?php
                            if (isset($_SESSION['service_error'])) { ?>
                                <p class="text-danger text-center"><?= $_SESSION['service_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['service_error']);
                            ?>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-3">Service Add</h4>
                            <div class="example-container">
                                <form action="adminDashbord/../service_add_data.php" method="post">
                                    <div class="example-content">
                                        <label for="titel">Service Titel</label>
                                        <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="titel" placeholder="Service Titel" name="service_titel">


                                        <label for="icon">Service icon</label>
                                        <input readonly type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="icon_value" placeholder="Service icon" name="service_icon">

                                        <div class="card text-white bg-dark">

                                            <div class="card-body" style="overflow: scroll; height:300px;">
                                                <?php

                                                require_once('../auth/include/icons.php');
                                                foreach ($fonts as  $font) : ?>
                                                    <span class="card-text mt-1 " style="cursor:pointer;"><i class="<?= $font ?> fs-3 m-2 icons_click" aria-hidden="true" id="<?= $font ?>"></i></span>
                                                <?php
                                                endforeach;

                                                ?>

                                            </div>
                                        </div>
                                        <label for="description">Service Description</label>
                                        <textarea name="service_description" id="description" cols="" rows="" id="description" class="form-control form-control-solid-bordered" aria-describedby="solidBoderedInputExample"></textarea>

                                        <div class="example-content">
                                            <label for="status">Service Titel</label>
                                            <select name="service_status" id="status" class="form-control form-control-rounded m-b-sm">
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="example-content">
                                            <button type="submit" class="btn btn-primary">Add Service</button>
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
<script>
    
    $(document).ready(function() {
        $(".icons_click").click(function() {
            $('#icon_value').val($(this).attr('id'));
            
        });
    });
</script>
