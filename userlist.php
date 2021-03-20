<?php
require_once "includes/header-starlight.php";
require_once "includes/nav-starlight.php";
require_once "includes/db.php";

$db_select_query = new Database;
$db_select_query = $select_query->selectQuery("users", "index1");

?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row">
            <div class="col-8">
                <div class="card text-dark  mb-3 m-auto">
                    <div class="card-header bg-primary">WHO CAN SEE YOUR DASHBOARD</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">name</th>
                                    <th scope="col">mail</th>
                                    <th scope="col">visibility</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($db_select_query as $visiblity) : ?>
                                    <tr>
                                        <td><?= $visiblity['id'] ?></td>
                                        <td><?= $visiblity['full_name'] ?></td>
                                        <td><?= $visiblity['email'] ?></td>
                                        <td><?= $visiblity['visibility'] ?>
                                            <a href="update_visibility_service.php?id=<?= $visiblity['id'] ?>" class="btn btn-outline-warning" name="update_visility">Edit</a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>

                    </div>
                </div>
            </div>


        </div>
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php
require_once "includes/footer-starlight.php";

?>