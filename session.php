<?php
    session_start();
    $session_usr_id = $_SESSION['session_user_id'];
    $session_user_name = $_SESSION['session_user_name'];
    $session_user_password = $_SESSION['session_user_password'];
    
    //CEK ID USER LOGIN
    if(!isset($session_usr_id)){
        header("location: login.php");
        exit();
    }

    // $session_usr_id = '670f4bd790ec9';
    // $session_usr_id = '1';
    // $session_usr_id = '670f8dee8f272';