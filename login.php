<?php
require_once "includes/header-starlight.php";
session_start();
?>
<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">INDEX <span class="tx-info tx-normal">admin</span></div>
        <div class="tx-center mg-b-60">Please provide your valid information here </div>

        <form action="log_data.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your username" name="log_email">
            </div><!-- form-group -->
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter your password" name="log_pass">
                <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
            </div><!-- form-group -->
            <?php if (isset($_SESSION['status'])) : ?>
                <label class="text-danger"><?= $_SESSION['status'] ?></label>
            <?php endif; ?>
            <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </form>

        <div class="mg-t-60 tx-center">Not yet a member? <a href="page-signup.html" class="tx-info">Sign Up</a></div>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<?php
require_once "includes/footer-starlight.php";
unset($_SESSION['status']);
?>