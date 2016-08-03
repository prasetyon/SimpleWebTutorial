<?php
    session_start();
    session_destroy();
    $_SESSION['logged_user']="";

    header("location: login.php");
?>