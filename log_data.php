<?php
require_once "includes/db.php";
session_start();
if (isset($_POST['log_email'])) {
    if (isset($_POST['log_pass'])) {
        $name = $_POST['log_email'];
        $password1 = md5($_POST['log_pass']);
        $log_data=new Database;
        $after_assoc= $log_data->selectLogCountQuery("index1", "users", "$name", "$password1");
        print_r($after_assoc['count']);
        if ($after_assoc['count'] != 0) {
            $_SESSION['check'] = "yes";
            $_SESSION['login'] = $name;
            header('location:dashboard.php');
            //die();

        } else {
            $_SESSION['status'] = "enter valid email or password";
            header('location:login.php');
        }
    }
}
?>
