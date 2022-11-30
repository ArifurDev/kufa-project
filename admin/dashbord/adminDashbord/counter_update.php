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
                            $id = $_GET['id'];
                            $counter_query = "SELECT * FROM `counter` WHERE ID='$id'";
                            $counter_query_db = mysqli_query($db_connection, $counter_query);
                            $counter = mysqli_fetch_assoc($counter_query_db);
                            ?>

                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-3">counter</h4>
                            <div class="example-container">

                                <form action="./counter_update_data.php?id=<?= $counter['ID'] ?>" method="post">
                                    <div class="example-content">

                                        <input hidden type="number" name="id" value="<?= $id ?>">

                                        <label for="icon">counter icon</label><i class="<?= $counter['counter_icon'] ?>"></i>
                                        <input readonly type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="icon" placeholder="counter icon" name="counter_icon" value="<?= $counter['counter_icon'] ?>">
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
                                        <label for="icon">counter number</label>
                                        <input type="number" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="icon" placeholder="Counter Number" name="counter_number" value="<?= $counter['counter_number'] ?>">

                                        <label for="icon">counter text</label>
                                        <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="icon" placeholder="Counter Text" name="counter_text" value="<?= $counter['counter_text'] ?>">

                                        <div class="example-content">
                                            <button type="submit" class="btn btn-primary">Update Counter</button>
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