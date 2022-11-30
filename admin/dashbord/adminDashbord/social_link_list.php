<?php require_once('./includes/header.php');
session_start();
require_once('../../../connect.php'); //connection database 
?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Service List</h1>
                    </div>
                </div>
            </div>

            <!-- update section -->
            <div class="col-12">
                <div class="card">
                    <div class="example-content">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Facebook</th>
                                    <th scope="col">Twitter</th>
                                    <th scope="col">Linkedin</th>                        
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //database user query show
                                $social_link_query = "SELECT * FROM admins";
                                $social_link_query_db = mysqli_query($db_connection, $social_link_query);
                                
                                
                                        
                                
                                 //database total user counter
                                //  $total_service_count_query = "SELECT COUNT(*)AS 'total' FROM service";
                                //  $total_service_count_query_db = mysqli_query($db_connection, $total_service_count_query);
                                //  $total_service_count_query_db_result = mysqli_fetch_assoc($total_service_count_query_db);
                                 
                                
                                    
                                
                                //   if (isset($total_service_count_query_db_result['total']==0)){
                                //     $_SESSION['database_empty']='DATABASE EMPTY';
                                // }

                                 $serial=1;
                                foreach ($social_link_query_db as $link) : ?>
                                
                                    <tr>
                                        
                                    
                                        <th><?=$serial++?></th>
                                        <td><?= $link['fb_link']?></td> 
                                        <!-- <td><i class=" fs-4"></i></td> -->
                                        <td ><?= $link['twitter_link']?></td>
                                        <td><?= $link['linkedin_link']?></td>
                                        <td><a href="" class="btn btn-warning">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>

                                <?php
                                endforeach;
                                ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


<?php require_once('./includes/footer.php') ?>