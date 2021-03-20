<?php
require_once "includes/header-starlight.php";
require_once "includes/nav-starlight.php";
$id = $_GET['id'];
$_SESSION['service_skill_edit_id'] = $id;
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="card text-dark  mb-3 m-auto" style="max-width: 40rem;">
            <div class="card-header bg-primary">Text Settings</div>
            <div class="card-body">
                <form action="update_skill_service_data.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">about</label>
                        <textarea name="update_skill_about" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">expertice</label>
                        <input type="text" class="form-control" name="update_expertice">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">percentage at expertice</label>
                        <input type="text" class="form-control" name="update_percentage_expertice">
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