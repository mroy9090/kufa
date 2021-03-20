<?php
   session_start();

    if(isset($_POST['ful_name'])){
        if(isset($_POST['email_add'])){
            if(isset($_POST['pass'])){
                if(isset($_POST['conf_pass'])){
                    if($_POST['pass'] == $_POST['conf_pass']){
                    $name = $_POST['ful_name'];
                    $email = $_POST['email_add'];
                    $password = $_POST['pass'];
                    $address = $_POST['conf_pass'];
                    $gender = $_POST['gender'];
                    $after_encrypt = md5($password);
                    $_SESSION['log_name'] = $name;

                    if (!$_POST['ful_name']) {
                        $_SESSION['check_name'] = "enter your name";
                        header('location:registration.php');
                    }
                    if (!$_POST['email_add']) {
                        $_SESSION['check_email'] = "enter your email";
                        header('location:registration.php');
                    }
                    if (!$_POST['pass']) {
                        $_SESSION['check_pass'] = "enter your password";
                        header('location:registration.php');
                    }
                    if (!$_POST['conf_pass']) {
                        $_SESSION['check_con_pass'] = "confirm your password";
                        header('location:registration.php');
                    }

                    //email validation 
                    $db_count = "SELECT COUNT(*) AS total_count FROM users WHERE email='$email'";
                    $db_connect = mysqli_connect("localhost", "root", "", "index1");
                    $db_count = mysqli_query($db_connect, $db_count);
                    $email_count = $after_assoc = mysqli_fetch_assoc($db_count);
                    

                    if ($email_count['total_count'] == 0) {


                        

                        if($_POST['ful_name']){
                            if($_POST['email_add']){
                                if($_POST['pass']){
                                    if($_POST['conf_pass']){
                                        //database creation
                                        $encrypt_pass = md5($password);
                                        $db_connect = mysqli_connect("localhost", "root", "", "index1");

                                        $db_insert = "INSERT INTO users(`full_name`, `email_add`, `pass`, `gender`) VALUES ('$name','$email','$encrypt_pass', '$gen')";
                                        mysqli_query($db_connect, $db_insert);
                                        header('location:login.php');
                                    }
                                }
                            }
                        }
                    } else {
                        $_SESSION['email_error'] = "please enter a valid email";
                        header('location:registration.php');
                    }
                    
                }
            }
        }
    }
}
