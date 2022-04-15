<?php

include_once '../hostCon.php';
session_start();

if(isset($_POST['addAppointment'])){

    $clientId = $_SESSION['username'];
    $businessImg = $_GET['business'];

    /* Date, Time, and Description */
    $preferredMinDate = $_POST['min_date'];
    $preferredMaxDate = $_POST['max_date'];
    $preferredHourTime = $_POST['hour'];
    $preferredMinsTime = $_POST['mins'];
    $preferredTime = $_POST['time'];
    $description = $_POST['service_description'];
    
    /* Service and Client Information */
    $businessName = $_POST['business_name'];
    $businessEmail = $_POST['business_email'];
    $clientFName = $_POST['firstname'];
    $clientLname = $_POST['lastname'];
    $clientMobile = $_POST['mobile'];
    $clientLandline = $_POST['landline'];
    
    /* Address */
    $clientHouse = $_POST['houseNum'];
    $clientStreet = $_POST['street'];
    $clientBarangay = $_POST['brgy'];
    $clientCity = $_POST['city'];
    

    /* DEFAULT PAYMENT METHOD */
    $cashOnService = "Cash on Service (Default)";



    $char = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $char = str_shuffle($char);
    for($i = 0, $rand = '', $l = strlen($char) - 1; $i < 3; $i ++) {
        $rand .= $char{mt_rand(0, $l)};
    }

    $shufNum = rand(1111, 9999);

    $first = "CON";
    $third = "VI";
    $date = date('ymd');
    $time = time();

    $combination = $first."-".$date.$shufNum."-".$third."-".$time."-".$rand;

    $businessSql = "SELECT * FROM business_tb WHERE business_icon = '$businessImg'";
    $businessResult = mysqli_query($connect, $businessSql);
    $businessRow = mysqli_fetch_assoc($businessResult);

    $selectCategory = $businessRow['business_subcategory'];
    $selectContact = $businessRow['business_mobile'];
    
    $appointmentSql = "INSERT INTO appointment_tb SET appointment_custom = '$combination',business_id = (SELECT business_id FROM business_tb WHERE business_icon = '$businessImg'), client_id = (SELECT user_identity FROM user_tb WHERE user_identity = '$clientId'), client_firstname = '$clientFName', client_lastname = '$clientLname',
    min_date = '$preferredMinDate', max_date = '$preferredMaxDate', hour_time = '$preferredHourTime', mins_time = '$preferredMinsTime', hour_clock = '$preferredTime', service_note = '$description',
    business_name = '$businessName', business_email = '$businessEmail', mobile = '$clientMobile', landline = '$clientLandline',
    houseNum = '$clientHouse', street = '$clientStreet', barangay = '$clientBarangay', city = '$clientCity', business_category = '$selectCategory', business_contact = '$selectContact', payment_method = '$cashOnService'";
    
    if($appointmentResult = mysqli_query($connect, $appointmentSql)){
        $showSql = "SELECT * FROM appointment_tb WHERE appointment_custom = '$combination'";
        $showResult = mysqli_query($connect, $showSql);
        $showRows = mysqli_fetch_assoc($showResult);
        $show = $showRows['appointment_id'];


        header("Location: ../appointment_confirmation.php?comb=$show&bimg=$businessImg&cid=$clientId&bname=$businessName&bemail=$businessEmail&cfname=$clientFName&clname=$clientLname&cmobile=$clientMobile&clandline=$clientLandline&prefmindate=$preferredMinDate&prefmaxdate=$preferredMaxDate&prefhourtime=$preferredHourTime&prefminstime=$preferredMinsTime&preftime=$preferredTime&desc=$description&chouse=$clientHouse&cstreet=$clientStreet&cbrgy=$clientBarangay&ccity=$clientCity");
    }
    else{
        echo mysqli_error($connect);
    }
}
