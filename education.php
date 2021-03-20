<?php
require_once "includes/header-starlight.php";
require_once "includes/nav-starlight.php";
require_once "includes/db.php";
$email = $_SESSION['login'];
$select_query = new Database;
$db_sel_query = $select_query->dashBoardSelectQuery("index1", "users", "$email");
$db_obj=new Database;
$db_query=$db_obj->selectQuery("educations","index1");

?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">


    <div class="sl-pagebody">
        <div class="row">

            <div class="col-4">
                <div class="card text-dark  mb-3 m-auto" style="max-width: 40rem;">
                    <div class="card-header bg-primary">work &map; experience</div>
                    <div class="card-body">
                        <form action="education_data.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">joining date at institution</label>
                                <input type="date" class="form-control" name="joining_date">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">leaving date at institution</label>
                                <input type="date" class="form-control" name="leaving_date">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">institution name</label>
                                <input type="text" class="form-control" name="institution_name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">degree name</label>
                                <input type="text" class="form-control" name="degree_name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">About degree</label>
                                <br>
                                <textarea name="about_degree" class="form-control" rows="10"></textarea>
                            </div>
                            <?php if (isset($_SESSION['work_status'])) : ?>
                                <label class="text-success"><?= $_SESSION['work_status'] ?></label>
                            <?php endif;
                            unset($_SESSION['work_status']); ?>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card text-dark  mb-3 m-auto">
                    <div class="card-header bg-primary">skills and expertices</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">joining date</th>
                                    <th scope="col">leaving date</th>
                                    <th scope="col">company name</th>
                                    <th scope="col">post name</th>
                                    <th scope="col">about post</th>
                                    <?php if ($db_sel_query['visibility'] == "admin") : ?>
                                        <th scope="col">action</th>
                                    <?php endif; ?>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($db_query as $education_info) : ?>
                                    <tr>
                                        <td><?= $education_info['id'] ?></td>
                                        <td><?= $education_info['joining_date'] ?></td>
                                        <td><?= $education_info['leaving_date'] ?></td>
                                        <td><?= $education_info['institution_name'] ?></td>
                                        <td><?= $education_info['degree_name'] ?></td>
                                        <td><?= $education_info['about_degree'] ?></td>
                                        <?php //if ($db_sel_query['visibility'] == "admin") : ?>
                                            <td>
                                                <a href="update_skill_service.php?id=<?= $work_info['id'] ?>" class="btn btn-outline-warning" name="update_service">Edit</a>
                                                <a href="delete__work_service.php?id=<?= $work_info['id'] ?>" name="delete_work" class="btn btn-outline-danger">Delete</a>
                                            </td>
                                        <?php //endif; ?>

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