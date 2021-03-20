<?php
require_once "includes/header-starlight.php";
require_once "includes/nav-starlight.php";
require_once "includes/db.php";
$about = new Database;
$about_name = $about->selectAboutDataQuery("index1", "abouts", "owner_name");
$aboutexpertise = new Database;
$about_expertise = $aboutexpertise->selectAboutDataQuery("index1", "abouts", "owner_expertise");
$aboutdescription = new Database;
$about_description = $aboutdescription->selectAboutDataQuery("index1", "abouts", "owner_description");
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
            <div class="card-header bg-primary">Change About</div>
            <div class="card-body">
                <form action="about_data.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Owner name</label>
                        <input type="text" class="form-control" name="owner_name" value="<?= $about_name['owner_name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Owner expertise</label>
                        <input type="text" class="form-control" name="owner_expertise" value="<?= $about_expertise['owner_expertise'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Owner description</label>
                        <input type="text" class="form-control" name="owner_description" value="<?= $about_description['owner_description'] ?>">
                    </div>
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