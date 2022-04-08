<?php

if(isset($_POST['searchBtn'])){
    $service = $_POST['service_name'];
    header("Location: ./search.php?$service");
}
if(!isset($_SESSION['username'])){
    session_start();

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include './includes/bootstrap_con.php';?>

        <link rel="stylesheet" href="./css/navbar.css">
        <title>ConnServ</title>
    </head>
    <body><form action="./navbar.php" method="post">
    <nav>
                
        <div class="container-fluid">
            <div class="logo">
                <a href="./homepage.php"><img class="logo-img" src="./assets/img/ConnServ_Logo.png" alt="connserv-logo"></a>
            </div>
            <div class="search-div">
                <input class="servicetxt" type="text" name="service_name" placeholder="Service, Business">

                <input class="locationtxt" type="text" placeholder="Location" value="Taguig City">
                <button type="submit" class="searchbtn" name="searchBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </div>
            <ul class="nav-links">

                
                <li class="link">
                <?php
                if(isset($_SESSION['username'])){
                    echo "<a href='./user_profile.php' style='color: white;'>Account</a>";
                }
                else{
                    echo "<a href='./login.php' style='color: white;'>Account</a>";
                }
                ?>
                <!-- <a href="./login.php">Account</a> --></li>
            </ul>
        </div>
        
        </nav>
        </form>
    </body>
</html>