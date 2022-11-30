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
                        <h1>Message List</h1>
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
                                if (isset($_SESSION['message_delete'])) { ?>
                                    <p class="text-danger text-center fs-4"><?= $_SESSION['message_delete'] ?></p>
                                <?php
                                }
                                unset($_SESSION['message_delete']);
                                ?>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Message Name</th>
                                    <th scope="col">Message Email</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //database user query show
                                $message_query = "SELECT * FROM message";
                                $message_query_db = mysqli_query($db_connection, $message_query);



                                $serial = 1;
                                foreach ($message_query_db as $message) : ?>

                                    <tr>


                                        <th><?= $serial++ ?></th>
                                        <td><?= $message['name'] ?></td>
                                        <td><?= $message['email'] ?></td>
                                        <td><?= $message['message'] ?></td>
                                        <td>
                                            <a href="./message_delete.php?id=<?= $message['ID'] ?>" class="btn btn-danger">Delete</a>
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