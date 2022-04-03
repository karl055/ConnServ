<?php
    include '../hostCon.php';
    session_start();

    if(isset($_SESSION['username'])){
        if(isset($_POST['createBtn'])){
            $userId = $_SESSION['username'];
            $business_name = $_POST['business_name'];
            $business_email = $_POST['business_email'];
            $business_category = $_POST['inputservice'];
            $business_subcategory = $_POST['inputSubService'];
            $business_unit_no = $_POST['business_unit_no'];
            $business_building = $_POST['business_building'];
            $business_house_no = $_POST['business_house_no'];
            $business_street = $_POST['business_street'];
            $business_village = $_POST['business_village'];
            $business_barangay = $_POST['business_barangay'];
            $business_zip = $_POST['business_zip'];
            $business_city = $_POST['business_city'];
            $business_landline = $_POST['business_landline'];
            $business_mobile = $_POST['business_mobile'];
            $business_details = $_POST['business_details'];
    
            
            $sql = "INSERT INTO business_tb 
            SET business_name = '$business_name', business_email = '$business_email', business_category = '$business_category', business_subcategory = '$business_subcategory', unit_no = '$business_unit_no',
                business_building ='$business_building', house_no = '$business_house_no', business_street = '$business_street', business_village = '$business_village', business_barangay = '$business_barangay', business_zip = '$business_zip',
                business_city ='$business_city', business_landline = '$business_landline', business_mobile = '$business_mobile', business_description = '$business_details',
                ownerId = (
                SELECT user_identity
                  FROM user_tb
                 WHERE user_identity = '$userId')";
            mysqli_query($connect, $sql) or die(mysqli_error($connect));
            
            /* , '$business_email', '$business_category', '$business_subcategory', '$business_unit_no', '$business_building', '$business_house_no', '$business_street', '$business_village', '$business_barangay', '$business_zip', '$business_city', '$business_landline', '$business_mobile', '$business_details' */
            /* , business_email, business_category, business_subcategory, unit_no, business_building, house_no, business_street, business_village, business_barangay, business_zip, business_city, business_landline, business_mobile, business_details */
            header("Location: ../user_profile.php");
        }
    }
    