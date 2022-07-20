<?php
    session_start();
    require 'dbcon.php';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    if(empty($name) && empty($email) && empty($password) && empty($role)){
        header('location:./login.php');
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('location:./login.php');
    }else{
        $insertUser = "INSERT INTO `users`(`name`, `email`, `password`, `role`) VALUES ('$name','$email','$password','$role')";
        mysqli_query($dbCon, $insertUser);
        $_SESSION["email"] = $email;
        header('location:./../users.php');
    }


    // phpgen
    
?>