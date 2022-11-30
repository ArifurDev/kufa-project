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
            if (isset($_SESSION['skills_update'])) { ?>
                <p class="text-info text-center fs-2"><?= $_SESSION['skills_update'] ?></p>
            <?php
            }
            unset($_SESSION['skills_update']);
            ?>
            <!-- update section -->
            <div class="col-12">
                <div class="card">
                    <div class="example-content">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Skills Category</th>
                                    <th scope="col">progress Number</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //database user query show
                                $skills_query = "SELECT * FROM skills";
                                $skills_query_db = mysqli_query($db_connection, $skills_query);

                                $serial = 1;
                                foreach ($skills_query_db as $skill) : ?>
                                    <tr>
                                        <th><?= $serial++ ?></th>
                                        <td><span><?= $skill['skill_category'] ?></span></td>
                                        <td><span><?= $skill['skill_number'] ?></span></td>

                                        <td><a href="./skills_update.php?id=<?= $skill['ID'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="./skills_delete.php?id=<?= $skill['ID'] ?>" class="btn btn-danger">Delete</a>
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