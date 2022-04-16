<?php
include '../../hostCon.php';
include '../../includes/bootstrap_con.php';

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="col-12" style="display: flex;">
            <div class="col-2">
                <form action="./index.php" method="post">
                    <a href="./index.php?date">Date</a>
                    <a href="./index.php?alphabetic">Alphabetical</a>
                    <button type="submit" name="submit">Submit</button>
                </form>
                
            </div>
            <div class="col-10">
                <?php
                /* if(!isset($_POST['dates']) && !isset($_POST['alphabetical'])){
                    $selection = "SELECT * FROM `appointment_tb` WHERE client_id = 1020";
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
                    echo '</div>';
                } */
                    if(isset($_GET['date'])){
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
                        echo '</div>';
                    }
                        
                    else if(isset($_GET['alphabetic'])){
                        $selection = "SELECT * FROM `appointment_tb` WHERE client_id = 1020 ORDER BY business_name ASC";
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
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </body>
</html>