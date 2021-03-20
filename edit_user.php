

<?php
session_start();
$id=$_POST['id'];
$name=$_POST['name'];
$upddte_name=$_POST['old_name'];
$email=$_POST['email'];


$db_connect = mysqli_connect("localhost", "root", "", "index1");
$db_edit = "UPDATE users SET full_name='$name',email='$email' WHERE id=$id";
$db_update=mysqli_query($db_connect, $db_edit);
if ($db_update) {
    $_SESSION['update'] = $db_update;
    $_SESSION['name'] = $upddte_name;
    $_SESSION['id'] = $id;
    header('location:userlist.php');
}

?>