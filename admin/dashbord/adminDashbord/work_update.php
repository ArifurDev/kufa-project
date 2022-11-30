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
                            $works_query = "SELECT * FROM `works` WHERE ID='$id'";
                            $works_query_db = mysqli_query($db_connection, $works_query);
                            $works = mysqli_fetch_assoc($works_query_db);
                            $work_img_name=$_SESSION['work_image_name'];
                            
                            ?>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-3">Work Update</h4>
                            <div class="example-container">
                                <form action="./work_update_data.php" method="post" enctype="multipart/form-data">
                                    <div class="example-content">

                                        <input hidden type="number" name="id" value="<?=$works['ID']?>">

                                        <label for="title">Work Title</label>
                                        <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="title" placeholder="Work Title" name="work_title" value="<?=$works['work_title']?>">

                                        <label for="heading">Work Heading</label>
                                        <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="heading" placeholder="Work Heading" name="work_heading" value="<?=$works['work_heading']?>">

                                        <label for="image">Work Image</label><br>

                                        <img src="./upload/works/<?=$work_img_name?>" style="width:100px;heigh:100px;">
                                        <input type="file" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="image" name="work_image">


                                        <label for="description">Work Description</label>
                                        <textarea name="work_description" id="description" cols="" rows="" id="description" class="form-control form-control-solid-bordered" aria-describedby="solidBoderedInputExample" placeholder="Work Description"><?=$works['work_description']?></textarea>

                                        <div class="example-content">
                                            <label for="status">Work Status</label>
                                            <select name="work_status" id="status" class="form-control form-control-rounded m-b-sm">
                                                <option value="active" <?=($works['work_status']==='active')? 'selected' : ''?> >Active</option>
                                                <option value="inactive" <?=($works['work_status']==='inactive')? 'selected' : ''?>>Inactive</option>
                                            </select>
                                        </div>
                                        <div class="example-content">
                                            <button type="submit" class="btn btn-primary">Work Update</button>
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