<?php

session_start();

if(isset($_GET['logout'])){

    unset($_SESSION['username']);
    unset($_SESSION['businessId']);
    session_destroy();
    header("Location: ../../login.php");
    die();
}