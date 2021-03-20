<?php
session_start();
$about=$_POST['about'];
$expertice=$_POST['expertice'];
$percentage=$_POST['percentage_expertices'];
$db_insert = "INSERT INTO skills(about, expertice, expertice_percentage) VALUES('$about','$expertice','$percentage')";
$db_connect = mysqli_connect("localhost", "root", "", "index1");
mysqli_query($db_connect, $db_insert);
$_SESSION['status']="submitted successfully";
header('location:skills.php');

?>