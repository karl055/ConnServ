<?php
session_start();


include '../hostCon.php';
$userId = $_SESSION['username'];
if(isset($_SESSION['business'])){

    $deleteBusinessSql = "UPDATE business_tb SET business_status = 'deactivated' WHERE ownerId = '$userId'";
    if(mysqli_query($connect, $deleteBusinessSql)){

        $deleteAppointmentsSql = "UPDATE appointment_tb SET appointment_status = 'deactivated' WHERE business_id = (SELECT business_id FROM business_tb WHERE ownerId = '$userId')";
        if($results = mysqli_query($connect, $deleteAppointmentsSql)){
            
            $deleteAccAppSql = "UPDATE appointment_tb SET appointment_status = 'deactivated' WHERE client_id = '$userId'";
            if(mysqli_query($connect, $deleteAccAppSql)){
                
                $deleteAccSql = "UPDATE user_tb SET acc_status = 'deactivated' WHERE user_identity = '$userId'";
                if(mysqli_query($connect, $deleteAccSql)){
                

                    unset($_SESSION['username']);
                    unset($_SESSION['businessId']);
                    session_destroy();
                    header("Location: ../login.php");
                    die();
                }
            }
        }
    }
}


