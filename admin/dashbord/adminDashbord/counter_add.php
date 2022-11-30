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
                            if (isset($_SESSION['counter_error'])) { ?>
                                <p class="text-danger text-center"><?= $_SESSION['counter_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['counter_error']);
                            ?>
                            <?php
                            if (isset($_SESSION['counter_success'])) { ?>
                                <p class="text-success text-center"><?= $_SESSION['counter_success'] ?></p>
                            <?php
                            }
                            unset($_SESSION['counter_success']);
                            ?>


                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-3">counter</h4>
                            <div class="example-container">
                                <form action="./counter_add_data.php" method="post">
                                    <div class="example-content">
                                        <label for="icon">counter icon</label>
                                        <input readonly type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="icon" placeholder="counter icon" name="counter_icon">
                                        <div class="card text-white bg-dark">

                                            <div class="card-body" style="overflow: scroll; height:200px;">
                                                <?php

                                                require_once('../auth/include/icons.php');
                                                foreach ($fonts as  $font) : ?>
                                                    <span class="card-text mt-1 " style="cursor:pointer;"><i class="<?= $font ?> fs-3 m-2 icons_click" aria-hidden="true" id="<?= $font ?>"></i></span>
                                                <?php
                                                endforeach;

                                                ?>

                                            </div>
                                        </div>
                                        <label for="icon">counter number</label>
                                        <input type="number" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="icon" placeholder="Counter Number" name="counter_number">

                                        <label for="icon">counter text</label>
                                        <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="icon" placeholder="Counter Text" name="counter_text">

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
            $('#icon').val($(this).attr('id'));
            
        });
    });
</script>