<?php
require_once "includes/header.php";
require_once "nav.php";
session_start(); 
?>

<!--- form starts --->

<?php
$id = $_GET['id'];
$db_connect = mysqli_connect("localhost", "root", "", "index1");
$db_sel = "SELECT id, full_name, email, gender FROM users WHERE id = $id";

$db_query = mysqli_query($db_connect, $db_sel);
$temp = mysqli_query($db_connect, $db_sel);
$temp1 = mysqli_fetch_assoc($temp);

?>


<div class="card text-white bg-primary m-auto" style="max-width: 40rem;">
    <div class="card-header bg-dark">Header</div>
    <div class="card-body">
        <form action="edit_user.php" method="POST">
            <input type="hidden" class="form-control" value="<?php echo $temp1['id'] ?>" name="id">
            <input type="hidden" class="form-control" value="<?php echo $temp1['full_name'] ?>" name="old_name">

            <div class="form-group">
                <label>Your Name</label>
                <input type="text" class="form-control" value="<?php echo $temp1['full_name'] ?>" name="name">
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="text" class="form-control" value="<?php echo $temp1['email'] ?>" name="email">
            </div>

            <label>Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" <?php
                    if ($temp1['gender'] == "male") {
                        echo "checked";
                    }

                ?>>
                <label class="form-check-label" for="exampleRadios1">Male</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female" <?php
                                                                                                                if ($temp1['gender'] == "female") {
                                                                                                                    echo "checked";
                                                                                                                }
                                                                                                                ?>>
                <label class="form-check-label" for="exampleRadios2">Female</label>
            </div>
            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-primary bg-light text-dark">Submit</button>
            </div>
        </form>


    </div>
</div>




<?php
require_once "includes/footer.php";
?>