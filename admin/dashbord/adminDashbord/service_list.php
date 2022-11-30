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
                                    <th scope="col">Service Title</th>
                                    <th scope="col">Service icon</th>
                                    <th scope="col">Service Description</th>
                                    <th scope="col">Service Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //database user query show
                                $service_query = "SELECT * FROM service";
                                $service_query_db = mysqli_query($db_connection, $service_query);
                                
                                      
                                        
                                
                                 //database total user counter
                                //  $total_service_count_query = "SELECT COUNT(*)AS 'total' FROM service";
                                //  $total_service_count_query_db = mysqli_query($db_connection, $total_service_count_query);
                                //  $total_service_count_query_db_result = mysqli_fetch_assoc($total_service_count_query_db);
                                 
                                
                                    
                                
                                //   if (isset($total_service_count_query_db_result['total']==0)){
                                //     $_SESSION['database_empty']='DATABASE EMPTY';
                                // }

                                 $serial=1;
                                foreach ($service_query_db as $service) : ?>
                                
                                    <tr>
                                        
                                    
                                        <th><?=$serial++?></th>
                                        <td><?= $service['service_titel']?></td> 
                                        <!-- <td><i class=" fs-4"></i></td> -->
                                        <td><span class="card-text mt-1 " ><i class="<?= $service['service_icon'] ?> " aria-hidden="true" id="<?= $font ?>"></i></span></td>
                                        <td class="overflow-auto w-20 h-75"><?= $service['service_description']?></td>
                                        <td><span class="badge<?=($service['service_status']=='active')? 'badge-success' : 'badge-danger'?>"><?= $service['service_status']?></span></td>
                                        <td><a href="./service_update.php?id=<?=$service['ID']?>" class="btn btn-warning">Edit</a>
                                            <a href="./service_delete.php?id=<?=$service['ID']?>" class="btn btn-danger">Delete</a>
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