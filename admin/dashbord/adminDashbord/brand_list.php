<?php require_once('./includes/header.php');
require_once('../../../connect.php'); //connection database 
?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Brands List</h1>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_SESSION['brands_delete'])) { ?>
                <p class="text-info text-center fs-4"><?= $_SESSION['brands_delete'] ?></p>
            <?php
            }
            unset($_SESSION['brands_delete']);
            ?>
            <!-- update section -->
            <div class="col-12">
                <div class="card">
                    <div class="example-content">
                        <table class="table">
                            <thead class="table-dark">
                                <tr class="fs-4">
                                    <th scope="col">No.</th>
                                    <th scope="col">Brands image</th>                               
                                    <th scope="col">Brands Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //database user query show
                                $brands_show_query = "SELECT * FROM brands";
                                $brands_show_query_db = mysqli_query($db_connection, $brands_show_query);


                                $serial = 1;
                                foreach ($brands_show_query_db as $brands) : ?>
                                    <?php
                                    ?>
                                    <tr>
                                        <th><?= $serial++ ?></th>
                                        <td><img src="./upload/brand/<?= $brands['brand_image'] ?>" alt="" srcset="" width="80" height="80"></td>          
                                        <td><span class="badge<?= ($brands['brand_status'] == 'active') ? 'badge-success' : 'badge-danger' ?> <?= ($brands['brand_status'] == 'active') ? 'badge-success' : 'badge-danger' ?>"><?= $brands['brand_status'] ?></span></td>
                                        <td><a href="./brand_update.php?id=<?= $brands['ID'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="./brand_delete.php?id=<?= $brands['ID'] ?>" class="btn btn-danger">Delete</a>
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