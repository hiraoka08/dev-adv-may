<?php
    session_start();

    include_once "../classes/user.php";

    $user_id = $_SESSION['user_id'];

    $user = new User;
    $
?>