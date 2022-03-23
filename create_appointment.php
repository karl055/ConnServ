<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./assets/img/tab_icon.png">
        <title>Document</title>

        <?php include './includes/bootstrap_con.php';?>

        <link rel="stylesheet" href="./includes/mobiPlugins/mobiscroll.javascript.min.css">
        <script src="./includes/mobiPlugins/mobiscroll.javascript.min.js"></script>

        <link href="./css/create_appointment.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container-fluid row">
            <div class="col-5">
                <div class="col-12">
                    <div class="mbsc-row">
                        <div class="col-12">
                            <div class="date_title">
                                <label>Select Preferred Date</label>
                            </div>
                            <input id="demo-mobile-picker-input" class="md-mobile-picker-input" placeholder="Please Select..." />
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <label for="inputService">Type of Service</label>
                    <select id="inputService" class="form-control" name="inputservice" required>
                        <option value="Art and Culture" selected>Art and Culture</option>
                        <option value="Beauty and Wellness">Beauty and Wellness</option>
                        <option value="Construction">Construction</option>
                        <option value="Education">Education</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Events">Events</option>
                        <option value="Food and Beverages">Food and Beverages</option>
                        <option value="Medical Care">Medical Care</option>
                        <option value="Shopping and Retail">Shopping and Retail</option>
                        <option value="Sports and Recreation">Sports and Recreation</option>
                        <option value="Tourism">Tourism</option>
                        <option value="Utilities">Utilities</option>
                    </select>
                </div>
            </div>
            <div class="col-7">
                <div class="col-12">
                    <div class="container-fluid">
                        <div class="time_title row">
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
                <div class="col-12">
                    <div class="container-fluid">
                        <div class="address_title">
                            <label>Input Detailed Address</label>
                        </div>
                        <div class="address_content">
                            <input type="text" class="txtAddress" name="houseNum" placeholder="House Number">
                            <input type="text" class="txtAddress" name="street" placeholder="Street">
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
                            <input type="text" class="txtAddress" name="city" placeholder="City">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid row">

        </div>
        
        <!-- SCRIPT LINK -->
        <script src="./js/calendar/calendar.js"></script>

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