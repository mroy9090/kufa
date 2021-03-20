<?php
require_once "includes/header-starlight.php";
require_once "includes/nav-starlight.php";
$db_setting_select = "SELECT * FROM settings";
$db_connect = mysqli_connect("localhost", "root", "", "index1");
$db_query = mysqli_query($db_connect, $db_setting_select);
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
    </nav>

    <div class="sl-pagebody">
        <div class="card text-dark  mb-3 m-auto" style="max-width: 40rem;">
            <div class="card-header bg-primary">Text Settings</div>
            <div class="card-body">
                <form action="settings_data.php" method="POST">
                    <?php foreach ($db_query as $data) : ?>
                        <div class="mb-3">
                            <label class="form-label"><?= $data['setting_name'] ?></label>
                            <input type="text" class="form-control" value="<?= $data['setting_value']  ?>" name="<?= $data['setting_name'] ?>">
                        </div>
                    <?php endforeach; ?>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>


    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->



<?php
require_once "includes/footer-starlight.php";
?>