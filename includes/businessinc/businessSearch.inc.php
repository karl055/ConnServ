<?php
include "../../hostCon.php";


    if($_GET['cancel']){

        echo "cancel";
        $selectedCancel = $_GET['cancel'];
        $searchSql = "UPDATE appointment_tb SET approval = 'Cancelled' WHERE appointment_custom = '$selectedCancel'";

    
        if($searchResult = mysqli_query($connect, $searchSql)){
    
            header("Location: ../../business.php?");
                
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
    
            header("Location: ../../business.php?");
                
        }
        else{
            mysqli_error($connect);
        }

    }
    /* $selectSql = "SELECT * FROM appointment_tb WHERE appointment_custom = '$selectRow'";
    $selectResult = mysqli_query($connect, $selectSql);
    if($selectRows = mysqli_fetch_assoc($selectResult)){

        $selectedRow = $_POST['clientCheck'];
    }

    
    $searchSql = "UPDATE appointment_tb SET approval = 'Approved' WHERE appointment_custom = '$selectedRow'";

    $searchResult = mysqli_query($connect, $searchSql);

    if($searchRows){

        echo $searchRows['client_firstname']."<br>";
            
    }else{
        mysqli_error($connect);
    } */
/* 
    header("Location: ../../business.php?"); */

