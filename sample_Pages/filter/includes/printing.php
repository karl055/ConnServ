<?php


$sortDate = $_POST['dateSort'];

if(isset($_POST['apply'])){

    if(isset($sortDate)){


        dateSorting();
    }
}
function dateSorting(){
    
    include '../../../hostCon.php';

    include '../../../includes/bootstrap_con.php';
    $selection = "SELECT * FROM `appointment_tb` WHERE client_id = 1020 ORDER BY min_date ASC";
    $appointmenResult = mysqli_query($connect, $selection);

    echo '<div class="accordion row" id="accordionExample">';
    foreach($appointmenResult as $appointmentRows){
                                                
            echo '<div class="col-4" style="margin-top: 2rem;">';
            echo '<div class="card">';
                echo '<div class="card card-header">';
                echo '<h2 class="mb-0">';
                    echo '<h6 style="width: 200px; white-space: nowrap;overflow: hidden; text-overflow: ellipsis; padding: 10px;"  data-toggle="tooltip" data-placement="top" title="'.$appointmentRows['appointment_title'].'"> '.$appointmentRows['appointment_title'].' </h6>';
                echo '</h2>';
                echo '</div>';
                echo '<div class="card-body">';
                    echo '<h5 class="card-title text-center"  style="white-space: nowrap;overflow: hidden; text-overflow: ellipsis; padding: 10px;"  data-toggle="tooltip" data-placement="top" title="'.$appointmentRows['business_name'].'" value="'.$appointmentRows['business_name'].'">'.$appointmentRows['business_name'].'</h5>';
                    echo '<p class="card-text text-center"><strong>'.$appointmentRows['business_category'].'</strong></p>';
                    echo '<p class="card-text text-center">'.$appointmentRows['business_contact'].'<hr></p>';
                    echo '<p class="card-text">Appointment Id</p>';
                    echo '<p class="card-text"><small>'.$appointmentRows['appointment_custom'].'</small></p><hr>';
                    echo '<p class="card-text">Date: <small>'.$appointmentRows['min_date'].' <strong>/</strong> '.$appointmentRows['max_date'].'</small></p><hr>';
                    echo '<p class="card-text">Time: <small>'.$appointmentRows['hour_time'].' <strong>:</strong> '.$appointmentRows['mins_time'].' '.$appointmentRows['hour_clock'].'</small></p><hr>';
                    echo '<p class="card-text">Payment Method: <small>'.$appointmentRows['payment_method'].'</small></p>';
                echo '</div>';
                echo '<div class="card-footer text-muted  text-center">';
                    echo '<a href="#" class="btn btn-primary">Show Receipt</a>';
                echo '</div>';
            echo '</div>';
            echo '</div>';
    }
}