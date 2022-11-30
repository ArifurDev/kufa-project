<?php require_once('./includes/header.php');
require_once('../../../connect.php'); //connection database 
?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Work List</h1>
                    </div>
                </div>
            </div>

            <!-- update section -->
            <div class="col-12">
                <div class="card">
                    <div class="example-content">
                        <table class="table">
                            <thead class="table-dark">
                                <?php
                                if (isset($_SESSION['work_delete'])) { ?>
                                    <p class="text-danger text-center fs-3"><?= $_SESSION['work_delete'] ?></p>
                                <?php
                                }
                                unset($_SESSION['work_delete']);
                                ?>
                                <?php
                                if (isset($_SESSION['work_update'])) { ?>
                                    <p class="text-success text-center fs-4"><?= $_SESSION['work_update'] ?></p>
                                <?php
                                }
                                unset($_SESSION['work_update']);
                                ?>

                                <?php
                                if (isset($_SESSION['work_update_error'])) { ?>
                                    <p class="text-danger text-center"><?= $_SESSION['work_update_error'] ?></p>
                                <?php
                                }
                                unset($_SESSION['work_update_error']);
                                ?>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Work Title</th>
                                    <th scope="col">Work Heading</th>
                                    <th scope="col">Work Description</th>
                                    <th scope="col">Work Image</th>
                                    <th scope="col">Work status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //database user query show
                                $work_query = "SELECT * FROM works";
                                $work_query_db = mysqli_query($db_connection, $work_query);
                                $work_image_name = mysqli_fetch_assoc($work_query_db)['work_image'];
                                $_SESSION['work_image_name'] = $work_image_name;
                                $serial = 1;
                                foreach ($work_query_db as $works) : ?>
                                    <tr>


                                        <th><?= $serial++ ?></th>
                                        <td><?= $works['work_title'] ?></td>

                                        <td><?= $works['work_heading'] ?></td>
                                        <td><?= $works['work_description'] ?></td>
                                        <td><img src="./upload/works/<?= $work_image_name ?>" alt="image_not_work" class="" style="width: 100px; height:100px;"></td>
                                        <td><?= $works['work_status'] ?></td>
                                        <td><a href="./work_update.php?id=<?= $works['ID'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="./work_delete.php?id=<?= $works['ID'] ?>" class="btn btn-danger">Delete</a>
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