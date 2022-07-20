<?php
    require 'dbcon.php';

    if($_GET['action'] == 'logout'){
        session_start();
        session_unset();
        session_destroy();
        header('location:./../login.php');
    };

    if($_GET['action'] == 'user_delete'){
        $userID = $_GET['id'];
        $userDelete = mysqli_query($dbCon, "DELETE FROM `users` WHERE id=$userID");
        header('location:./../users.php');
    }
    

?>