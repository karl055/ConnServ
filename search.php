<?php

include './hostCon.php';
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
        <link rel="icon" href="./assets/img/tab_icon.png">
        <link rel="stylesheet" href="./css/filter.css">
        <link rel="stylesheet" href="./css/footer.css">
        <title>ConnServ</title>
    </head>
    <body>
        <?php include_once './includes/bootstrap_con.php';?>
        <?php include_once './navbar.php'; ?>

        <div class="col-12 search_container">

            <div class="col-12 search_top">
                <div class="col-12 search_title">
                    <h3>Services Near Me</h3>
                </div>
            </div>
            <div class="main_content" style="display: flex;">

                <div class="col-2 filter_tab">
                    <form action="./search.php" method="post">
                    <div class="col-12 filter_check">
                        <p style="width: 100%; margin: 0;"><b>Filter By</b></p>
                        <div style="width: 100%;">
                            <a href="./search.php?all"> All Services</a>
                        </div>
                        <div style="width: 100%;">
                            <a href="./search.php?new"> New Services</a>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-7 search_tab" style="padding: 0;">
                    <div class="col-12" style="padding: 0;">

                        <?php
                        
                        /* CATEGORY ALGORITHM */
                        if(isset($_GET['category'])){

                            $search = $_GET['category'];
                            $sql = "SELECT * FROM business_tb WHERE business_category LIKE '%$search%' AND business_approval = 'approved'";
                            $result = mysqli_query($connect, $sql);

                            switch($search){

                                case "Education":
                                    echo "<h3>Education (".mysqli_num_rows($result).")</h3>";
                                    while($row = mysqli_fetch_assoc($result)){
                                        
                                        if($row['unit_no'] != 'N/A' || $row['business_village'] != 'N/A'|| $row['business_landline'] != 'N/A'){
        
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> '.$row['business_building'].', '.$row['house_no'].', '.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }else{
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> <small>'.$row['unit_no'].','.$row['business_building'].','.$row['house_no'].','.$row['business_village'].','.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</small></p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    }
                                break;

                                case "Art And Culture":
                                    echo "<h3>Art And Culture (".mysqli_num_rows($result).")</h3>";
                                    while($row = mysqli_fetch_assoc($result)){
                                        
                                        if($row['unit_no'] != 'N/A' || $row['business_village'] != 'N/A'|| $row['business_landline'] != 'N/A'){
        
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> '.$row['business_building'].', '.$row['house_no'].', '.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }else{
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> <small>'.$row['unit_no'].','.$row['business_building'].','.$row['house_no'].','.$row['business_village'].','.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</small></p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    }
                                break;
                                
                                case "Automotive":
                                    echo "<h3>Automotive (".mysqli_num_rows($result).")</h3>";
                                    while($row = mysqli_fetch_assoc($result)){
                                        
                                        if($row['unit_no'] != 'N/A' || $row['business_village'] != 'N/A'|| $row['business_landline'] != 'N/A'){
        
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> '.$row['business_building'].', '.$row['house_no'].', '.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }else{
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> <small>'.$row['unit_no'].','.$row['business_building'].','.$row['house_no'].','.$row['business_village'].','.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</small></p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    }
                                break;
                                
                                case "Professional Service":
                                    echo "<h3>Professional Service (".mysqli_num_rows($result).")</h3>";
                                    while($row = mysqli_fetch_assoc($result)){
                                        
                                        if($row['unit_no'] != 'N/A' || $row['business_village'] != 'N/A'|| $row['business_landline'] != 'N/A'){
        
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> '.$row['business_building'].', '.$row['house_no'].', '.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }else{
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> <small>'.$row['unit_no'].','.$row['business_building'].','.$row['house_no'].','.$row['business_village'].','.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</small></p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    }
                                break;
                                
                                case "Food And Beverages":
                                    echo "<h3>Food And Beverages (".mysqli_num_rows($result).")</h3>";
                                    while($row = mysqli_fetch_assoc($result)){
                                        
                                        if($row['unit_no'] != 'N/A' || $row['business_village'] != 'N/A'|| $row['business_landline'] != 'N/A'){
        
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> '.$row['business_building'].', '.$row['house_no'].', '.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }else{
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> <small>'.$row['unit_no'].','.$row['business_building'].','.$row['house_no'].','.$row['business_village'].','.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</small></p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    }
                                break;
                                
                                case "Beauty And Wellness":
                                    echo "<h3>Beauty And Wellness (".mysqli_num_rows($result).")</h3>";
                                    while($row = mysqli_fetch_assoc($result)){
                                        
                                        if($row['unit_no'] != 'N/A' || $row['business_village'] != 'N/A'|| $row['business_landline'] != 'N/A'){
        
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> '.$row['business_building'].', '.$row['house_no'].', '.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }else{
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> <small>'.$row['unit_no'].','.$row['business_building'].','.$row['house_no'].','.$row['business_village'].','.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</small></p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    }
                                break;
                                
                                case "Construction":
                                    echo "<h3>Construction (".mysqli_num_rows($result).")</h3>";
                                    while($row = mysqli_fetch_assoc($result)){
                                        
                                        if($row['unit_no'] != 'N/A' || $row['business_village'] != 'N/A'|| $row['business_landline'] != 'N/A'){
        
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> '.$row['business_building'].', '.$row['house_no'].', '.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }else{
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> <small>'.$row['unit_no'].','.$row['business_building'].','.$row['house_no'].','.$row['business_village'].','.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</small></p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    }
                                break;
                                
                                case "Electronics":
                                    echo "<h3>Electronics (".mysqli_num_rows($result).")</h3>";
                                    while($row = mysqli_fetch_assoc($result)){
                                        
                                        if($row['unit_no'] != 'N/A' || $row['business_village'] != 'N/A'|| $row['business_landline'] != 'N/A'){
        
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> '.$row['business_building'].', '.$row['house_no'].', '.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }else{
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> <small>'.$row['unit_no'].','.$row['business_building'].','.$row['house_no'].','.$row['business_village'].','.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</small></p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    }
                                break;
                                
                                case "Medical Care":
                                    echo "<h3>Medical Care (".mysqli_num_rows($result).")</h3>";
                                    while($row = mysqli_fetch_assoc($result)){
                                        
                                        if($row['unit_no'] != 'N/A' || $row['business_village'] != 'N/A'|| $row['business_landline'] != 'N/A'){
        
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> '.$row['business_building'].', '.$row['house_no'].', '.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }else{
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> <small>'.$row['unit_no'].','.$row['business_building'].','.$row['house_no'].','.$row['business_village'].','.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</small></p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    }
                                break;
                                
                                case "Events":
                                    echo "<h3>Events (".mysqli_num_rows($result).")</h3>";
                                    while($row = mysqli_fetch_assoc($result)){
                                        
                                        if($row['unit_no'] != 'N/A' || $row['business_village'] != 'N/A'|| $row['business_landline'] != 'N/A'){
        
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> '.$row['business_building'].', '.$row['house_no'].', '.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }else{
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> <small>'.$row['unit_no'].','.$row['business_building'].','.$row['house_no'].','.$row['business_village'].','.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</small></p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    }
                                break;

                                case "Shopping And Retail":
                                    echo "<h3>Shopping And Retail (".mysqli_num_rows($result).")</h3>";
                                    while($row = mysqli_fetch_assoc($result)){
                                        
                                        if($row['unit_no'] != 'N/A' || $row['business_village'] != 'N/A'|| $row['business_landline'] != 'N/A'){
        
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> '.$row['business_building'].', '.$row['house_no'].', '.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }else{
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> <small>'.$row['unit_no'].','.$row['business_building'].','.$row['house_no'].','.$row['business_village'].','.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</small></p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    }
                                break;
                            }
                        }

                        /* SEARCH ALGORITHM */
                        else if(isset($_GET['servicename'])){

                            $search = $_GET['servicename'];
                            $sql = "SELECT * FROM business_tb WHERE business_name LIKE '%$search%' AND business_approval = 'approved'";
                            if($result = mysqli_query($connect, $sql)){

                                if($row = mysqli_fetch_assoc($result)){
                                    echo "<h3>Search Results of '".$_GET['servicename']."'</h3>";
                                    foreach($result as $row){
                                        if($row['unit_no'] != 'N/A' || $row['business_village'] != 'N/A'|| $row['business_landline'] != 'N/A'){
    
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> '.$row['business_building'].', '.$row['house_no'].', '.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }else{
                                            echo '<div class="col-12 card_drawer">
                                                <div class="card">
                                                    <h5 class="card-header">'.$row['business_name'].'</h5>
                                                    <div class="card-body" style="display: flex;">
                                                        <div class="col-8">
                                                            <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                            <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                            <p class="card-text" style="font-size: 14px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                </svg> <small>'.$row['unit_no'].','.$row['business_building'].','.$row['house_no'].','.$row['business_village'].','.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</small></p>
                                                            <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    }
                                }
                                else{
                                    
                                    echo "<h3>No Result for '".$_GET['servicename']."'</h3>";
                                }

                            }
                        }
                        
                        /* NEW ALGORITHM */
                        else if(isset($_GET['new'])){

                            $search = $_GET['new'];
                            $sql = "SELECT * FROM business_tb WHERE datetime_created < now() AND business_approval = 'approved' ORDER BY datetime_created DESC";
                            if($result = mysqli_query($connect, $sql)){

                                echo "<h3>New Services (". mysqli_num_rows($result).")</h3>";
                                while($row = mysqli_fetch_assoc($result)){
                                    if($row['unit_no'] != 'N/A' || $row['business_village'] != 'N/A'|| $row['business_landline'] != 'N/A'){

                                        echo '<div class="col-12 card_drawer">
                                            <div class="card">
                                                <h5 class="card-header">'.$row['business_name'].'</h5>
                                                <div class="card-body" style="display: flex;">
                                                    <div class="col-8">
                                                        <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                        <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                        <p class="card-text" style="font-size: 14px;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                            </svg> '.$row['business_building'].', '.$row['house_no'].', '.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</p>
                                                        <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                    }else{
                                        echo '<div class="col-12 card_drawer">
                                            <div class="card">
                                                <h5 class="card-header">'.$row['business_name'].'</h5>
                                                <div class="card-body" style="display: flex;">
                                                    <div class="col-8">
                                                        <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                        <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                        <p class="card-text" style="font-size: 14px;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                            </svg> <small>'.$row['unit_no'].','.$row['business_building'].','.$row['house_no'].','.$row['business_village'].','.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</small></p>
                                                        <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                    }
                                }

                            }
                        }
                        
                        /* ALL ALGORITHM */
                        else if(isset($_GET['all'])){

                            $search = $_GET['all'];
                            $sql = "SELECT * FROM business_tb WHERE business_approval = 'approved'";
                            if($result = mysqli_query($connect, $sql)){
                                ?>
                                <table>
                                    <thead>
                                        <tr>
                                            <th><h3>All Services (<?php echo mysqli_num_rows($result);?>)</h3></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        while($row = mysqli_fetch_assoc($result)){
                                            if($row['unit_no'] != 'N/A' || $row['business_village'] != 'N/A'|| $row['business_landline'] != 'N/A'){
                                                echo '<tr>';
                                                    echo '<td>';
                                                        echo '<div class="col-12 card_drawer">
                                                            <div class="card">
                                                                <h5 class="card-header">'.$row['business_name'].'</h5>
                                                                <div class="card-body" style="display: flex;">
                                                                    <div class="col-8">
                                                                        <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                                        <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                                        <p class="card-text" style="font-size: 14px;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                            </svg> '.$row['business_building'].', '.$row['house_no'].', '.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</p>
                                                                        <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                    echo '</td>';
                                                echo '</tr>';
                                            }
                                            else{
                                                echo '<div class="col-12 card_drawer">
                                                    <div class="card">
                                                        <h5 class="card-header">'.$row['business_name'].'</h5>
                                                        <div class="card-body" style="display: flex;">
                                                            <div class="col-8">
                                                                <h5 class="card-title text-muted">'.$row['business_category'].'</h5>
                                                                <h5 class="card-title text-muted"><small>'.$row['business_subcategory'].'</small></h5>
                                                                <p class="card-text" style="font-size: 14px;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                    </svg> <small>'.$row['unit_no'].','.$row['business_building'].','.$row['house_no'].','.$row['business_village'].','.$row['business_street'].', '.$row['business_barangay'].', '.$row['business_city'].', '.$row['business_zip'].'</small></p>
                                                                <a href="./service_profile.php?business='.$row['business_icon'].'" class="btn stretched-link">Go Visit!</a>
                                                            </div>
                                                            <div class="col-4">
                                                                <img src="./assets/img/featured_services/business_icon/'.$row['business_icon'].'" class="card-img-top" alt="...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>';
                                            }
                                        }
                                    echo '</tbody>';
                                echo '</table>';
                            
                            }
                        }
                        ?>
                        
                    </div>
                </div>
                <div class="col-3 nearme_tab">
                    <div class="card">
                        <div class="card-body">
                            <a href="#" class="card-text">Find Services Near me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>