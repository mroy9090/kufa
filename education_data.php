<?php
require_once "includes/db.php";
session_start();
$joinning_date=$_POST['joining_date'];
$leaving_date=$_POST['leaving_date'];
$institution_name=$_POST['institution_name'];
$degree_name=$_POST['degree_name'];
$about_degree=$_POST['about_degree'];
$db_insert=new Database;
$db_insert_query=$db_insert->insertEducationDetails("index1", "educations", $joinning_date, $leaving_date, $institution_name, $degree_name, $about_degree);
$_SESSION['work_status']="Your data inserted successfully";
header('location:education.php');
?>