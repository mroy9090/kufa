<?php
require_once "includes/header-starlight.php";
require_once "includes/nav-starlight.php";
require_once "includes/db.php";
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
    </nav>

    <div class="sl-pagebody">
        <?php
        if (isset($_SESSION['login'])) {
            $email = $_SESSION['login'];
            $select_query = new Database;
            $db_sel_query=$select_query->dashBoardSelectQuery("index1","users","$email");
        }
        ?>
        <div class="row">
            <div class="col-6">
                <h2>Student's Name: <?= $db_sel_query['full_name'] ?> </h2>
                <h2>Student's Email: <?= $db_sel_query['email'] ?> </h2>
            </div>
            <div class="col-2">
                <form action="profile.php" method="POST" enctype="multipart/form-data">
                    <div class="text-center">
                        <img src="profile_images/<?= $db_sel_query['profile_image'] ?>" alt="not found" width="100">
                    </div>
                    <br>
                    <?php if ($db_sel_query['profile_image'] != "default.jpg") : ?>
                        <div class="text-center">
                            <a href="delete_profile_photo.php"><button type="button" class="btn btn-warning">Delete your photo</button></a>
                        </div>
                    <?php endif; ?>
                    <div class="mb-3">
                        <label class="form-label">Upload profile picture</label>
                        <input type="file" class="form-control" name="image">
                        <?php if (isset($_SESSION['image_error'])) : ?>
                            <label class="text-danger"><?= $_SESSION['image_error'] ?></label>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-success">upload</button>
                </form>
            </div>
        </div>


    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php
require_once "includes/footer-starlight.php";
//unset($_SESSION['login']);
?>