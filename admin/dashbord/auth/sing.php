<?php require_once('./include/header.php');
session_start() ?>
<div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
    <div class="app-auth-background">

    </div>
    <div class="app-auth-container">
        <div class="logo">
            <a href="index.html">Neptune</a>
        </div>
        <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="./signup.php">Sign Up</a></p>

        <?php
        if (isset($_SESSION['usre_status'])) { ?>
            <div class="alert alert-primary" role="alert">
                <h4 class="alert-heading"><?= $_SESSION['usre_status'] ?></h4>
                <p class="text-white">Enter your valid mail and password</p>
            </div>
        <?php
        }
        ?>
        <?php
        if (isset($_SESSION['input_fild'])) { ?>
            <div class="alert alert-danger" role="alert">
                <p class="alert-heading"><?= $_SESSION['input_fild'] ?></p>
            </div>
        <?php
        }
    
        ?>

        <?php
        if (isset($_SESSION['email_pass_error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <p class="alert-heading"><?= $_SESSION['email_pass_error']?></p>
            </div>
        <?php
        }
    
        ?>


        <form action="./sing_data.php" method="post">
            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">Email address</label>
                <input type="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" placeholder="example@neptune.com" name="email">

                <label for="signInPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="signInPassword" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password">
            </div>

            <div class="auth-submit">
                <button class="btn btn-primary">Sign In</button>
            </div>
        </form>
        <div class="divider"></div>
    </div>
</div>

<?php require_once('./include/footer.php'); session_unset()?>