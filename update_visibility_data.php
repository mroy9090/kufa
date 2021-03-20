<?php
include_once "includes/db.php";
$change_visibility=$_POST['update_visibility'];
$id=$_POST['id'];
$update_visibility=new Database;
$update_visibility_query= $update_visibility->updateVisibilityQuery("index1","users", "$change_visibility","$id");
header('location:userlist.php');

?>