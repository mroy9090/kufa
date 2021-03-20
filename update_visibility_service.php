<?php
require_once "includes/header-starlight.php";
require_once "includes/nav-starlight.php";
require_once "includes/db.php";

$db_select_query = new Database;
$db_select_query = $select_query->selectQuery("users", "index1");
$id = $_GET['id'];
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
            <div class="card-header bg-primary">CHANGE VISIBILITY</div>
            <div class="card-body">
                <form action="update_visibility_data.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">change visibility</label>
                        <input type="text" class="form-control" name="update_visibility">
                        <input type="hidden" class="form-control" name="id" value="<?= $id ?>">
                    </div>

                    <div class="text-center"><button type="submit" class="btn btn-success">UPDATE</button></div>
                </form>

            </div>
        </div>


    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
<?php
require_once "includes/footer-starlight.php";
?>