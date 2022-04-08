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
            <form action="#" autocomplete="off">
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
                                <input type="date" class="first_date" min="<?= date('Y-m-d'); ?>" max="2022-10-20">
                            </div>
                            <div class="col-6">
                                <input type="date" class="first_date" min="<?= date('Y-m-d'); ?>" max="2050-10-20">
                            </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputService">Type of Service</label>
                            <select id="inputService" class="form-control" name="inputservice" disabled>
                                <option value="ArtandCulture" selected>Art and Culture</option>
                                <option value="BeautyandWellness">Beauty and Wellness</option>
                                <option value="Construction">Construction</option>
                                <option value="Education">Education</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Events">Events</option>
                                <option value="FoodandBeverages">Food and Beverages</option>
                                <option value="MedicalCare">Medical Care</option>
                                <option value="ProfessionalServices">Professional Services</option>
                                <option value="ShoppingandRetail" selected>Shopping and Retail</option>
                                <option value="Transportation">Transportation</option>
                            </select>
                        </div><!-- 
                        <div class="col-12">
                            <label for="inputSubService">Type of Sub Service</label>
                            <select id="inputSubService" class="form-control" name="inputSubService" required>
                                
                            </select>
                        </div> -->
                        
                        <div class="col-12">
                            <div class="note_title">
                                <label>Extra Notes: </label>
                            </div>
                            <div class="note_content">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="col-12">
                            <div class="col-12">
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
                                        <input type="radio" name="time" id="pm" value="PM">
                                        <label for="pm" class="timeLabel">PM</label>
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
                                        <input type="text" class="full_name" name="lastname" id="lname" placeholder="Last Name.." autocomplete="off">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="full_name" name="firstname" id="fname" placeholder="First Name.." autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="container-fluid"  style="margin-top: 5px;">
                                <div class="personal_content" style="display: flex;">
                                    <div class="col-6">
                                        <input type="text" class="contact_number" name="mobile" id="mobile" placeholder="Mobile Number.." autocomplete="off">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="contact_number" name="landline" id="landline" placeholder="Landline.." autocomplete="off">
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
                                    <input type="text" class="txtAddress" name="houseNum" placeholder="House Number" autocomplete="off">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="txtAddress" name="street" placeholder="Street">
                                </div>
                            </div>
                            
                            <div class="address_content col-12"  style="display: flex;">
                                <div class="col-6">
                                    <select id="brgy" class="txtAddress"  name="brgy">
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
                                    <input type="text" class="txtAddress" name="city" placeholder="City">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="col-12 btnAddAppointment" style="margin: 5px 0 0;">
                                <div class="col-12">
                                    <a href="./appointment_confirmation.php" ><button type="button" class="addAppointment">Add My Appointment</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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