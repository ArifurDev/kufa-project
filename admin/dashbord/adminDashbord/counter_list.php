<?php require_once('./includes/header.php');

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
            <?php
            if (isset($_SESSION['delete_success'])) { ?>
                <p class="text-info fs-2"><?= $_SESSION['delete_success'] ?></p>
            <?php
            }
            unset($_SESSION['delete_success']);
            ?>
            <?php
            if (isset($_SESSION['counter_update'])) { ?>
                <p class="text-success fs-2"><?= $_SESSION['counter_update'] ?></p>
            <?php
            }
            unset($_SESSION['counter_update']);
            ?>
            <!-- update section -->
            <div class="col-12">
                <div class="card">
                    <div class="example-content">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No.</th>

                                    <th scope="col">Counter icon</th>
                                    <th scope="col">Counter Numbre</th>
                                    <th scope="col">Counter Text</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //database user query show
                                $counter_query = "SELECT * FROM counter";
                                $counter_query_db = mysqli_query($db_connection, $counter_query);

                                //database total user counter
                                //  $total_service_count_query = "SELECT COUNT(*)AS 'total' FROM service";
                                //  $total_service_count_query_db = mysqli_query($db_connection, $total_service_count_query);
                                //  $total_service_count_query_db_result = mysqli_fetch_assoc($total_service_count_query_db);




                                //   if (isset($total_service_count_query_db_result['total']==0)){
                                //     $_SESSION['database_empty']='DATABASE EMPTY';
                                // }

                                $serial = 1;
                                foreach ($counter_query_db as $counter) : ?>

                                    <tr>

                                        <th><?= $serial++ ?></th>
                                        <td><i class="<?= $counter['counter_icon'] ?> fs-4"></i></td>
                                        <td class=""><?= $counter['counter_number'] ?></td>
                                        <td class=""><?= $counter['counter_text'] ?></td>
                                        <td><a href="./counter_update.php?id=<?= $counter['ID'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="./counter_delete.php?id=<?= $counter['ID'] ?>" class="btn btn-danger">Delete</a>
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