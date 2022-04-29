<?php

include_once './hostCon.php';
session_start();
$userId = $_SESSION['username'];
$businessImg = $_GET['businessid'];

$businessSql = "SELECT * FROM business_tb WHERE business_icon = '$businessImg'";

$businessResult = mysqli_query($connect, $businessSql);
$businessRow = mysqli_fetch_assoc($businessResult);

$userInfo = "SELECT * FROM user_tb WHERE user_identity = '$userId'";
$userInfoResult = mysqli_query($connect, $userInfo);
$userInfoRow = mysqli_fetch_assoc($userInfoResult);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./assets/img/tab_icon.png">
        <title>Document</title>

        <?php include './includes/bootstrap_con.php';?>

        <link href="./css/create_appointment.css" rel="stylesheet"/>
    </head>
    <body>
        <?php include './navbar.php';?>
        <div class="main_body">
            <form action="./includes/createAppointment.inc.php?business=<?php echo $businessImg;?>" method="post" autocomplete="off">
                <div class="col-12">
                    <div class="col-12">

                    <h5>Appointment</h5> 
                    </div>
                </div>
                <div class="col-12 row">
                    <div class="col-5">
                        <div class="col-12">
                                <div class="date_title">
                                    <label>Select Preferred Date</label>
                                </div>
                            <div style="display: flex;">
                                <div class="col-6">
                                    <input type="date" name="min_date" class="first_date" min="<?= date('Y-m-d'); ?>" max="2022-10-20" value="<?= date('Y-m-d'); ?>" required>
                                </div>
                                <div class="col-6">
                                    <input type="date" name="max_date" class="first_date" min="<?= date('Y-m-d'); ?>" max="2050-10-20" value="<?= date('Y-m-d'); ?>" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="time_title">
                                <label>Select Preferred Time</label>
                            </div>
                            <div class="time_content">
                                <select name="hour" id="timeHour" class="selectTime"></select>
                                <span>:</span>
                                <select name="mins" id="timeMins" class="selectTime"></select>
                                <input type="radio" name="time" id="am" value="AM">
                                <label for="am" class="timeLabel">AM</label>
                                <input type="radio" name="time" id="pm" value="PM" checked>
                                <label for="pm" class="timeLabel">PM</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="note_title">
                                <label>Appointment Title: </label>
                            </div>
                            <div class="note_content">
                                <input type="text" class="form-control" name="service_title" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="note_title">
                                <label>Service Needed & Description: </label>
                            </div>
                            <div class="note_content">
                                <textarea class="form-control" name="service_description" id="exampleFormControlTextarea1" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="col-12" style="padding-top: 5px;">
                            
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="col-12">
                            <div class="container-fluid">
                                <div class="personal_container">
                                    <label>Service Information</label>
                                </div>
                                <div class="personal_content"  style="display: flex;">
                                    <div class="col-5">
                                        <input type="text" class="full_name" value="<?php echo $businessRow['business_name'] ;?>" readonly="readonly" name="business_name" id="business_name" autocomplete="off" title="<?php echo $businessRow['business_email'] ;?>" required>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="full_name" value="<?php echo $businessRow['business_email'] ;?>" readonly="readonly" name="business_email" id="business_name" autocomplete="off" title="<?php echo $businessRow['business_email'] ;?>" required>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" class="full_name" value=" <?php echo $businessRow['price'] ;?>" readonly="readonly" name="business_price" id="business_price" autocomplete="off" title="<?php echo $businessRow['price'] ;?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="padding-top: 1rem;">
                            <div class="container-fluid">
                                <div class="col-12" style="display: flex;">

                                    <div class="personal_container col-9">
                                        <label>Client Information</label>
                                    </div>
                                    <div class="col-3">
                                        <button type="button" class="btnEdit" id="editFields" onclick="edit()">Clear Fields</button>
                                    </div>
                                </div>
                                <div class="personal_content"  style="display: flex; padding-top: 1rem;">
                                    <div class="col-6">
                                        <input type="text" class="full_name" name="lastname" id="lname" value="<?php echo $userInfoRow['user_lastname'];?>" placeholder="Last Name.." autocomplete="off" required>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="full_name" name="firstname" id="fname" value="<?php echo $userInfoRow['user_firstname'];?>" placeholder="First Name.." autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="container-fluid"  style="margin-top: 5px;">
                                <div class="personal_content" style="display: flex;">
                                    <div class="col-6">
                                        <input type="text" class="contact_number" maxlength="11" name="mobile" id="mobile" value="<?php echo $userInfoRow['user_contactnum'];?>" placeholder="Mobile Number.." autocomplete="off" required>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="contact_number" maxlength="8" name="landline" id="landline" value="N/A" placeholder="Landline.." autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="address_title col-12">
                                <label>Input Detailed Address</label>
                            </div>
                            <div class="address_content col-12" style="display: flex;">
                                <div class="col-6">
                                    <input type="text" class="txtAddress" id="address" name="houseNum" value="<?php echo $userInfoRow['user_housenum'];?>" placeholder="House Number" autocomplete="off" required>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="txtAddress" id="street" name="street" value="<?php echo $userInfoRow['user_street'];?>" placeholder="Street" required>
                                </div>
                            </div>
                            
                            <div class="address_content col-12"  style="display: flex;">
                                <div class="col-6">
                                    <?php 
                                    
                                    $user_barangay = $userInfoRow['user_barangay'];
                                    $options = array('Bagumbayan', 'Bambang', 'Calzada', 'Central Bicutan', 'Central Signal Village'
                                                    , 'Fort Bonifacio', 'Hagonoy', 'Ibayo Tipas', 'Katuparan', 'Ligid Tipas', 'Lower Bicutan'
                                                    , 'Maharlika Village', 'Napindan', 'New Lower Bicutan', 'North Daang Hari', 'North Signal Village'
                                                    , 'Palingon Tipas', 'Pinagsama', 'San Miguel', 'Santa Ana', 'South Daang Hari', 'South Signal Village', 'Tanyag'
                                                    , 'Tuktukan', 'Ususan', 'Upper Bicutan', 'Wawa', 'Western Bicutan');
                                    echo '<select class="txtAddress"  name="brgy" id="brgy" required>';

                                    foreach($options as $option){
                                        if($user_barangay == $option){
                                            echo "<option selected='selected' value='$option'>$option</option>";
                                        }
                                        else{
                                            echo "<option value='$option'>$option</option>";
                                        }
                                    }
                                    echo '</select>';
                                    ?>
                                    
                                </div>
                                <div class="col-6">
                                    <input type="text" class="txtAddress" id="city" name="city" placeholder="City" value="Taguig City" readonly required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="col-12 btnAddAppointment" style="margin: 5px 0 0;">
                                    <div class="col-12">
                                        <button type="submit" name="addAppointment" id="addBtn" class="addAppointment col-12">Add My Appointment</button>
                                    </div>
                                    <div class="col-12">
                                        
                                        <a href="./terms_condition.php">Terms & Condition</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        
        <!-- SCRIPT LINK -->
        <script src="./js/subservices/dynamic.js"></script>
        <script type="text/javascript">
            function edit(){

                document.getElementById("lname").value = "";
                document.getElementById("fname").value = "";

                document.getElementById("mobile").value = "";
                document.getElementById("landline").value = "";

                document.getElementById("address").value = "";
                document.getElementById("street").value = "";
                
                document.getElementById("brgy").value = "Bagumbayan";
                /* $("select").prop("disabled", false);
                $("input").prop("disabled", false);
                $("#addBtn").prop("disabled", false); */
            }

            function selectedBrgy(){

            }
            
            for(let min = 0; min <= 59; min++){

                var x = document.getElementById("timeMins");
                var option = new Option(min, min);
                console.log(option.value);
                x.appendChild(option);
            }
            for(let hour = 1; hour <= 12; hour++){

                var y = document.getElementById("timeHour");
                var option = new Option(hour, hour);
                console.log(option.value);
                y.appendChild(option);
            }

        </script>
    </body>
</html>