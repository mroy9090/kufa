<?php
session_start();
$name=$_POST['owner_name'];
$expertise=$_POST['owner_expertise'];
$description=$_POST['owner_description'];
$user_email=$_SESSION['login'];
$db_insert= "UPDATE abouts SET owner_name='$name',owner_expertise='$expertise',owner_description='$description'";
$db_connect = mysqli_connect("localhost", "root", "", "index1");
mysqli_query($db_connect, $db_insert);
header('location:about.php');


?>