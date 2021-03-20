<?php
session_start();
$joinning_date=$_POST['joining_date'];
$leaving_date=$_POST['leaving_date'];
$company_name=$_POST['company_name'];
$post_name=$_POST['post_name'];
$about_post=$_POST['about_post'];
$db_insert= "INSERT INTO works(joining_date, leaving_date, company_name, post_name, about_post) VALUES ('$joinning_date', '$leaving_date', '$company_name', '$post_name', '$about_post')";
$db_connect=mysqli_connect("localhost","root","","index1");
mysqli_query($db_connect,$db_insert);
$_SESSION['work_status']="Your data inserted successfully";
header('location:work.php');
?>