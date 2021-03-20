<?php
session_start();
$id = $_GET['id'];
$del_db = "DELETE FROM users";
$db_connect = mysqli_connect("localhost", "root", "", "index1");
$db_query = mysqli_query($db_connect, $del_db);
if ($db_query) {
    $_SESSION['alert'] = "Deleted all users successfully";
    header('location:re_data.php');
}
