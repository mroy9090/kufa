<?php
$user_id=$_GET['id'];
$db_delete="DELETE FROM works WHERE id='$user_id'";
$db_connect = mysqli_connect("localhost", "root", "", "index1");
mysqli_query($db_connect, $db_delete);
header('location:work.php');
print_r($_GET);

?>