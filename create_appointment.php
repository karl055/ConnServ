<?php

include_once './hostCon.php';
session_start();
$businessImg = $_GET['businessid'];

$businessSql = "SELECT * FROM business_tb WHERE business_icon = '$businessImg'";

$businessResult = mysqli_query($connect, $businessSql);
$businessRow = mysqli_fetch_assoc($businessResult);

/* if(isset($_POST['addAppointment'])){

    header("Location: ./includes/createAppointment.inc.php?business=$business");
} */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./assets/img/tab_icon.png">
        <title>Document</title>

        <?php include './includes/bootstrap_con.php';?>

        <link href="./css/newAppointment.css" rel="stylesheet"/>
    </head>
    <body>
        <?php include './navbar.php';?>
        <div class="main_body">
        <a href="./service_profile.php"  class="buttonBack"><button class="buttonBack">Back</button></a>
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
                                    <div class="col-6">
                                        <input type="text" class="full_name" value="<?php echo $businessRow['business_name'] ;?>" readonly="readonly" name="business_name" id="business_name" autocomplete="off" required>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="full_name" value="<?php echo $businessRow['business_email'] ;?>" readonly="readonly" name="business_email" id="business_name" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="container-fluid">
                                <div class="personal_container">
                                    <label>Personal Information</label>
                                </div>
                                <div class="personal_content"  style="display: flex;">
                                    <div class="col-6">
                                        <input type="text" class="full_name" name="lastname" id="lname" placeholder="Last Name.." autocomplete="off" required>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="full_name" name="firstname" id="fname" placeholder="First Name.." autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="container-fluid"  style="margin-top: 5px;">
                                <div class="personal_content" style="display: flex;">
                                    <div class="col-6">
                                        <input type="text" class="contact_number" name="mobile" id="mobile" placeholder="Mobile Number.." autocomplete="off" required>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="contact_number" name="landline" id="landline" placeholder="Landline.." autocomplete="off" required>
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
                                    <input type="text" class="txtAddress" name="houseNum" placeholder="House Number" autocomplete="off" required>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="txtAddress" name="street" placeholder="Street" required>
                                </div>
                            </div>
                            
                            <div class="address_content col-12"  style="display: flex;">
                                <div class="col-6">
                                    <select id="brgy" class="txtAddress"  name="brgy" required>
                                        <option value="Bagumbayan" selected>Bagumbayan</option>
                                        <option value="Bambang">Bambang</option>
                                        <option value="Calzada">Calzada</option>
                                        <option value="Central Bicutan">Central Bicutan</option>
                                        <option value="Central Signal Village">Central Signal Village</option>
                                        <option value="Fort Bonifacio">Fort Bonifacio</option>
                                        <option value="Hagonoy">Hagonoy</option>
                                        <option value="Ibayo Tipas">Ibayo Tipas</option>
                                        <option value="Katuparan">Katuparan</option>
                                        <option value="Ligid Tipas">Ligid Tipas</option>
                                        <option value="Lower Bicutan">Lower Bicutan</option>
                                        <option value="Maharlika Village">Maharlika Village</option>
                                        <option value="Napindan">Napindan</option>
                                        <option value="New Lower Bicutan">New Lower Bicutan</option>
                                        <option value="North Daang Hari">North Daang Hari</option>
                                        <option value="North Signal Village">North Signal Village</option>
                                        <option value="Palingon Tipas">Palingon Tipas</option>
                                        <option value="Pinagsama">Pinagsama</option>
                                        <option value="San Miguel">San Miguel</option>
                                        <option value="Santa Ana">Santa Ana</option>
                                        <option value="South Daang Hari">South Daang Hari</option>
                                        <option value="South Signal Village">South Signal Village</option>
                                        <option value="Tanyag">Tanyag</option>
                                        <option value="Tuktukan">Tuktukan</option>
                                        <option value="Ususan">Ususan</option>
                                        <option value="Upper Bicutan">Upper Bicutan</option>
                                        <option value="Wawa">Wawa</option>
                                        <option value="Western Bicutan">Western Bicutan</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="txtAddress" name="city" placeholder="City" value="Taguig City" readonly required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="col-12 btnAddAppointment" style="margin: 5px 0 0;">
                                <div style="display: flex;">
                                    <div class="col-12">
                                        <button type="submit" name="addAppointment" class="addAppointment col-12">Add My Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        
        <!-- SCRIPT LINK -->
        <script src="./js/subservices/dynamic.js"></script>
        <script>
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