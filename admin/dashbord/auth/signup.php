<?php require_once('./include/header.php');
session_start(); ?>
<div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
    <div class="app-auth-background">

    </div>
    <div class="app-auth-container">
        <div class="logo">
            <a href="index.html">Neptune</a>
        </div>
        <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="./sing.php">Sign In</a></p>


        <div class="auth-credentials m-b-xxl">
            <form action="./signup_data.php" method="post">
                <label for="signUpUsername" class="form-label">Name</label>
                <input type="text" class="form-control m-b-md <?= isset($_SESSION['name_error']) ? 'is-invalid' : '' ?>" value="<?= isset($_SESSION['old_name']) ? $_SESSION['old_name'] : '';unset($_SESSION['old_name']) ?>" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter Name" name="user_name">

                <?php
                if (isset($_SESSION['name_error'])) { ?>
                    <p class="text-danger"><?= $_SESSION['name_error'] ?></p>
                <?php
                }
                unset($_SESSION['name_error']);
                ?>
                <label for="signUpEmail" class="form-label">Email address</label>
                <input type="email" class="form-control m-b-md   <?= isset($_SESSION['email_error']) ? 'is-invalid' : '' ?>" value="<?= isset($_SESSION['old_email']) ? $_SESSION['old_email'] : '';unset($_SESSION['old_email']) ?>" id="signUpEmail" placeholder="example@neptune.com" name="user_email">

                <?php
                if (isset($_SESSION['email_error'])) { ?>
                    <p class="text-danger"><?= $_SESSION['email_error'] ?></p>
                <?php
                }
                unset($_SESSION['email_error']);
                ?>
                <?php
                if (isset($_SESSION['email_check'])) { ?>
                    <p class="text-warning"><?= $_SESSION['email_check'] ?></p>
                <?php
                }
                unset($_SESSION['email_check']);
                ?>

                <label for="signUpPassword" class="form-label">Password</label>
                <input type="password" class="form-control <?= isset($_SESSION['pass_error']) ? 'is-invalid' : '' ?>" id="signUpPassword" aria-describedby="signUpPassword" placeholder="Enter Password" name="user_password">
                <div id="emailHelp" class="form-text m-b-md ">Password must be minimum 8 characters length*</div>
                <input type="checkbox" onclick="myFunction()" id="show"><label for="show">Show Password</label></br></br>
                <script>
                    function myFunction() {
                        var x = document.getElementById("signUpPassword");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
                <?php
                if (isset($_SESSION['pass_error'])) { ?>
                    <p class="text-danger"><?= $_SESSION['pass_error'] ?></p>
                <?php
                }
                unset($_SESSION['pass_error']);
                ?>


                <label for="signUpPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control <?= isset($_SESSION['con_error']) ? 'is-invalid' : '' ?>" id="signUpPassword" aria-describedby="signUpPassword" placeholder="Enter confirm password" name="user_confirm_password">
                <?php
                if (isset($_SESSION['con_error'])) { ?>
                    <p class="text-danger"><?= $_SESSION['con_error'] ?></p>
                <?php
                }
                unset($_SESSION['con_error']);
                ?>
                <div class="auth-submit mt-2">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
            </form>
        </div>



        <div class="divider"></div>
    </div>
</div>
<?php require_once('./include/footer.php') ?>