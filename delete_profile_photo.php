<?php 
    session_start();
    $email = $_SESSION['login'];
    $db_update = "UPDATE users SET profile_image='default.jpg' WHERE email='$email' ";
    $db_connect = mysqli_connect("localhost", "root", "", "index1");
    mysqli_query($db_connect, $db_update);
    
    header('location:dashboard.php');
?>