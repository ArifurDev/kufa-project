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
                            


                            $id=$_GET['id']; 
                                                      
                            $skills_query = "SELECT * FROM `skills` WHERE ID='$id'";
                            $skills_query_db = mysqli_query($db_connection,$skills_query);
                            $skills=mysqli_fetch_assoc($skills_query_db);   
                          
                            ?>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-3">Skills Update</h4>
                            <div class="example-container">
                                <form action="./skills_update_data.php" method="post">
                                    <div class="example-content">
                                    <input hidden  type="number" name="id" value="<?=$skills['ID']?>">

                                        <label for="category">skill Category</label>
                                        <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="category" placeholder="Skills Category" name="skills_category" value="<?=$skills['skill_category']?>">


                                        <label for="progress">progress Number</label>
                                        <input  type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="progress" placeholder="progress number" name="progress_number" value="<?=$skills['skill_number']?>">

                                     
                                        
                                        <div class="example-content">
                                            <button type="submit" class="btn btn-primary">Update Skills</button>
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

