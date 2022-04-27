<?php

include_once '../hostCon.php';
session_start();

if(isset($_POST['addAppointment'])){

    $clientId = $_SESSION['username'];
    $businessImg = $_GET['business'];

    /* Date, Time, and Description */
    $servicePrice =  mysqli_real_escape_string($connect, $_POST['business_price']);
    $preferredMinDate =  mysqli_real_escape_string($connect, $_POST['min_date']);
    $preferredMaxDate =  mysqli_real_escape_string($connect, $_POST['max_date']);
    $preferredHourTime =  mysqli_real_escape_string($connect, $_POST['hour']);
    $preferredMinsTime =  mysqli_real_escape_string($connect, $_POST['mins']);
    $preferredTime =  mysqli_real_escape_string($connect, $_POST['time']);
    $appointmentTitle =  mysqli_real_escape_string($connect, $_POST['service_title']);
    $description =  mysqli_real_escape_string($connect, $_POST['service_description']);
    
    /* Service and Client Information */
    $businessName =  mysqli_real_escape_string($connect, $_POST['business_name']);
    $businessEmail =  mysqli_real_escape_string($connect, $_POST['business_email']);
    $clientFName =  mysqli_real_escape_string($connect, $_POST['firstname']);
    $clientLname =  mysqli_real_escape_string($connect, $_POST['lastname']);
    $clientMobile =  mysqli_real_escape_string($connect, $_POST['mobile']);
    $clientLandline =  mysqli_real_escape_string($connect, $_POST['landline']);
    
    /* Address */
    $clientHouse =  mysqli_real_escape_string($connect, $_POST['houseNum']);
    $clientStreet =  mysqli_real_escape_string($connect, $_POST['street']);
    $clientBarangay =  mysqli_real_escape_string($connect, $_POST['brgy']);
    $clientCity =  mysqli_real_escape_string($connect, $_POST['city']);
    

    /* DEFAULT PAYMENT METHOD */
    $cashOnService = "Cash on Service (Default)";



    $char = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $char = str_shuffle($char);
    for($i = 0, $rand = '', $l = strlen($char) - 1; $i < 3; $i ++) {
        $rand .= $char [mt_rand(0, $l)];
    }

    $shufNum = rand(1111, 9999);

    date_default_timezone_set('Asia/Manila');
    $first = "CON";
    $third = "VI";
    $date = date('ymd');
    $time = time();

    $minsFixlength = strlen($preferredMinsTime);
    if($minsFixlength < 2){
        $minsFix = '0'.$minsFixlength;
    }
    $combination = $first."-".$date.$shufNum."-".$third."-".$time."-".$rand;

    $businessSql = "SELECT * FROM business_tb WHERE business_icon = '$businessImg'";
    $businessResult = mysqli_query($connect, $businessSql);
    $businessRow = mysqli_fetch_assoc($businessResult);

    $selectCategory = $businessRow['business_subcategory'];
    $selectContact = $businessRow['business_mobile'];
    $appointmentStatus = "active";
    $waitingApproval = "waiting";
    
    $appointmentSql = "INSERT INTO appointment_tb SET appointment_status = '$appointmentStatus', service_price = '$servicePrice', approval = '$waitingApproval', appointment_title = '$appointmentTitle', appointment_custom = '$combination', business_id = (SELECT business_id FROM business_tb WHERE business_icon = '$businessImg'), client_id = (SELECT user_identity FROM user_tb WHERE user_identity = '$clientId'), client_firstname = '$clientFName', client_lastname = '$clientLname',
    min_date = '$preferredMinDate', max_date = '$preferredMaxDate', hour_time = '$preferredHourTime', mins_time = '$minsFix', hour_clock = '$preferredTime', service_note = '$description',
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
