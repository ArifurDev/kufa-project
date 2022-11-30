<?php require_once('./includes/header.php');
require_once('../../../connect.php'); //connection database 
?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Testimonial List</h1>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_SESSION['testimonial_delete'])) { ?>
                <p class="text-info text-center fs-4"><?= $_SESSION['testimonial_delete'] ?></p>
            <?php
            }
            unset($_SESSION['testimonial_delete']);
            ?>
            <!-- update section -->
            <div class="col-12">
                <div class="card">
                    <div class="example-content">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Testimonial image</th>
                                    <th scope="col">Testimonial Description</th>
                                    <th scope="col">Testimonial Name</th>
                                    <th scope="col">Testimonial Title</th>
                                    <th scope="col">Testimonial Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //database user query show
                                $testimonial_query = "SELECT * FROM testimonial";
                                $testimonial_query_db = mysqli_query($db_connection, $testimonial_query);


                                $serial = 1;
                                foreach ($testimonial_query_db as $testimonial) : ?>
                                    <?php
                                    ?>
                                    <tr>


                                        <th><?= $serial++ ?></th>
                                        <td><img src="./upload/testimonial/<?= $testimonial['testimonial_image'] ?>" alt="" srcset="" width="80" height="80"></td>
                                        <td><?= $testimonial['testimonial_description'] ?></td>
                                        <td><?= $testimonial['testimonial_name'] ?></td>
                                        <td><?= $testimonial['testimonial_title'] ?></td>
                                        <td><span class="badge<?= ($testimonial['testimonial_status'] == 'active') ? 'badge-success' : 'badge-danger' ?> <?= ($testimonial['testimonial_status'] == 'active') ? 'badge-success' : 'badge-danger' ?>"><?= $testimonial['testimonial_status'] ?></span></td>
                                        <td><a href="./testimonial_update.php?id=<?= $testimonial['ID'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="./testimonial_delete.php?id=<?= $testimonial['ID'] ?>" class="btn btn-danger">Delete</a>
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