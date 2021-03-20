<?php
require_once "includes/header-starlight.php";
require_once "includes/nav-starlight.php";
require_once "includes/db.php";

$db_obj1 = new Database;
$db_query = $db_obj1->selectQuery("skills", "index1");
$email = $_SESSION['login'];
$db_obj2 = new Database;
$db_sel_query = $db_obj2->dashBoardSelectQuery("index1", "users", "$email");

?>




<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">


    <div class="sl-pagebody">
        <div class="row">
            <?php if ($db_sel_query['visibility'] == "admin") : ?>
                <div class="col-6">
                    <div class="card text-dark  mb-3 m-auto">
                        <div class="card-header bg-primary">skills and expertices</div>
                        <div class="card-body">
                            <form action="skills_data.php" method="POST">
                                <div class="mb-3">
                                    <label class="form-label">About</label>
                                    <br>
                                    <textarea name="about" class="form-control" rows="10"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Expertice</label>
                                    <input type="text" class="form-control" name="expertice">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Percentages at expertices</label>
                                    <input type="number" class="form-control" name="percentage_expertices">
                                </div>
                                <?php if (isset($_SESSION['status'])) : ?>
                                    <label class="text-success"><?= $_SESSION['status'] ?></label>
                                <?php endif;
                                unset($_SESSION['status']); ?>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-6">
                <div class="card text-dark  mb-3 m-auto">
                    <div class="card-header bg-primary">skills and expertices</div>
                    <div class="card-body">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">about</th>
                                    <th scope="col">expertice</th>
                                    <th scope="col">percentage at expertice</th>
                                    <?php if ($db_sel_query['visibility'] == "admin") : ?>
                                        <th scope="col">action</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($db_query as $service_info) : ?>
                                    <tr>
                                        <td><?= $service_info['id'] ?></td>
                                        <td><?= $service_info['about'] ?></td>
                                        <td><?= $service_info['expertice'] ?></td>
                                        <td><?= $service_info['expertice_percentage'] ?></td>
                                        <?php if ($db_sel_query['visibility'] == "admin") : ?>
                                            <td>
                                                <a href="update_skill_service.php?id=<?= $service_info['id'] ?>" class="btn btn-outline-warning" name="update_service">Edit</a>
                                                <a href="delete__delete_service.php?id=<?= $service_info['id'] ?>" name="delete_service" class="btn btn-outline-danger">Delete</a>
                                            </td>
                                        <?php endif; ?>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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