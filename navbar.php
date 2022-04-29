<?php

if(isset($_POST['searchBtn'])){
    $service = $_POST['service_name'];
    header("Location: ./search.php?servicename=$service");
}/* 
if(!isset($_SESSION['username'])){
    session_start();

} */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include './includes/bootstrap_con.php';?>

        <link rel="stylesheet" href="./css/new_nav.css">
        <title>ConnServ</title>
    </head>
    <body>
        <nav class="navbarStyle">
            <form action="./navbar.php" method="post" style="width: 100%;">
                <div class="container-fluid col-12">
                    <div class="logo">
                        <a href="./homepage.php" class="col-1"><img class="logo-img" src="./assets/img/ConnServ_Logo.png" alt="connserv-logo"></a>
                    </div>
                    <div class="search-div col-8">
                        <input class="servicetxt" type="text" name="service_name" placeholder="Search Service Name">

                        <input class="locationtxt" type="text" placeholder="Location" value="Taguig City" readonly>
                        <button type="submit" class="searchbtn" name="searchBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                    <?php
                    
                    if(isset($_SESSION['username'])){
                        echo '<ul class="nav-links col-2">';
                            echo '<il class="link">';
                                echo "<a href='./user_profile.php' style='color: white;' class='col-6'>Profile </a>";
                                echo "<a href='./includes/signout.inc.php' style='color: white; border: none; background-color: transparent;' class='col-6' name='logout'>Logout</a>";
                            echo '</li>';
                        echo '</ul>';
                    }
                    else{
                        echo '<ul class="nav-links col-1">';
                            echo '<il class="link">';
                                echo "<a href='./login.php' style='color: white;' class='col-12'>Account</a>";
                            echo '</li>';
                        echo '</ul>';
                    }
                    
                    ?>
                </div>
                    </form>
        </nav>
    </body>
</html>