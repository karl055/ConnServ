<?php
include "../../hostCon.php";


    if($_GET['cancel']){

        echo "cancel";
        $selectedCancel = $_GET['cancel'];
        $searchSql = "UPDATE appointment_tb SET approval = 'Cancelled' WHERE appointment_custom = '$selectedCancel'";

    
        if($searchResult = mysqli_query($connect, $searchSql)){
    
            header("Location: ../../user_profile.php?#pills-business");
                
        }
        else{
            mysqli_error($connect);
        }

    }
    else if($_GET['approve']){
        echo "approved";
        $selectedApproved = $_GET['approve'];
        $searchSql = "UPDATE appointment_tb SET approval = 'Approved' WHERE appointment_custom = '$selectedApproved'";

    
        if($searchResult = mysqli_query($connect, $searchSql)){
    
            header("Location: ../../user_profile.php?#pills-business");
                
        }
        else{
            mysqli_error($connect);
        }

    }