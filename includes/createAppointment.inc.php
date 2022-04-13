<?php

include_once '../hostCon.php';
session_start();

if(isset($_POST['addAppointment'])){
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
    
    
    $appointmentSql = "INSERT INTO appointment_tb ";

    header("Location: ../appointment_confirmation.php?simg=$businessImg&sname=$businessName&semail=$businessEmail&cfname=$clientFName&clname=$clientLname&cmobile=$clientMobile&clandline=$clientLandline&chouse=$clientHouse&cstreet=$clientStreet&cbrgy=$clientBarangay&ccity=$clientCity&mindate=$preferredMinDate&maxdate=$preferredMaxDate&hour=$preferredHourTime&mins=$preferredMinsTime&time=$preferredTime&description=$description");
    /* 
    echo $findingRow['business_name']."<br>";

    echo $preferredMinDate." - ".$preferredMaxDate."<br>";

    if(strlen($preferredMinsTime)<2){
        
        echo $preferredHourTime.": 0".$preferredMinsTime." ".$preferredTime."<br>";
    }
    else{
        echo $preferredHourTime.": ".$preferredMinsTime." ".$preferredTime."<br>";
    }
    echo $description; */
}
