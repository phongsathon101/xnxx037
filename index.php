<?php
if (isset($_SESSION['fb_access_token'])) {
    require('home.php');
} elseif (@$_GET['page'] == 'home') {
    require 'home.php';
} elseif (@$_GET['page'] == 'login') {
    require 'login.php';
} elseif (@$_GET['page'] == 'logout') {
    session_start();
    session_destroy();
    echo "<script>location='login';</script>";
} else {
    if (@$_GET['page'] == "register") {
        require('login.php');
    } else {
        require('login.php');
    }
}
