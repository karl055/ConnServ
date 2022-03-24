<?php
    include './hostCon.php';

    if(isset($_POST['createBtn'])){

        $business_name = $_POST['business_name'];
        $business_email = $_POST['business_email'];
        $business_unit_no = $_POST['business_unit_no'];
        $business_building = $_POST['business_building'];
        $business_house_no = $_POST['business_house_no'];
        $business_street = $_POST['business_street'];
        $business_village = $_POST['business_village'];
        $business_barangay = $_POST['business_barangay'];
        $business_unit_no = $_POST['business_zip'];
        $business_city = $_POST['business_city'];
        $business_landline = $_POST['business_landline'];
        $business_mobile = $_POST['business_mobile'];
        $business_details = $_POST['business_details'];

        
        $sql = "INSERT INTO business_tb (business_name, business_email, business_category, business_subcategory, business_description, business_contact) VALUES ('$fname', '$lname', '$email', '$password')";
        mysqli_query($connect, $sql);
        
    }
?>