<?php
    session_start();
    $id= $_SESSION['service_skill_edit_id'];
    $about=$_POST['update_skill_about'];
    $expertice=$_POST['update_expertice'];
    $percentage=$_POST['update_percentage_expertice'];
    $db_connect = mysqli_connect("localhost", "root", "", "index1");
    $db_update="UPDATE skills SET about='$about',expertice='$expertice',expertice_percentage='$percentage' WHERE id='$id'";
    mysqli_query($db_connect,$db_update);
    header('location:skills.php');
    ?>
