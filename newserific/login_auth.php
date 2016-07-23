<?php
    include "connect.php";
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    echo $uname;
    echo $pwd;
    $query = "SELECT USERNAME FROM USER WHERE USERNAME='$uname' AND PASS='$pwd'";
    $count = mysql_query($query);
    $in = mysql_num_rows($count);
    $temp = mysql_fetch_array($count);
    if ($in==1) {
        session_start();
        $_SESSION['logged_user']=$uname;
        $_SESSION['user']=$name;
        header ("location: index.php");
    }
    else {
        header ("location: login.php?Login=gagal");
    }
?>