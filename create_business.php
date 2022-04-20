<?php
    session_start();
if(!isset($_SESSION['username'])){

    header("Location: ./login.php");

    die();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./assets/img/tab_icon.png">

        <!-- Google Font Link -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

        <!-- Online Bootstrap Link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link rel="stylesheet" href="./css/createBusiness.css">
        <title>Create Business</title>
    </head>
    <body>
        <?php include './navbar.php';?>
        <div class="row back-container" style="margin: 0;">
            <div class="col-12">
                <a href="./user_profile.php">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                            <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                        </svg>
                        Back
                    </p>
                </a>
            </div>
        </div>
        <div class="body_container">
            <div class="container">
                <div class="business_container">
                    <div class="container_title">
                        <h3>Create Business</h3>
                        <h1>Here there and everywhere</h1>
                    </div>
                    <form action="./includes/createbusiness.inc.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-7">
                                <div class="business_trade">

                                    <label for="business_name">Business Name <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                    <input type="text" name="business_name" class="business_name" required>
                                </div>
                                <div class="business_trade">

                                    <label for="trade_name">Business Email <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                    <input type="text" name="business_email" class="trade_name" required>
                                </div>
                                <div class="business_address">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="business_unit_no">Unit Number <small class="text-muted">Leave if N/A</small></label>
                                            <input type="text" name="business_unit_no" onkeypress='return restrictAlphabets(event)' class="business_unit_no">
                                        </div>
                                        <div class="col-6">
                                            <label for="business_building">Building Name <small class="text-muted">Leave if N/A</small></label>
                                            <input type="text" name="business_building" class="business_building">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="business_house_no">House Number <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                            <input type="text" name="business_house_no" class="business_house_no" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="business_street">Street Name <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                            <input type="text" name="business_street" class="business_street" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <label for="business_village">Village <small class="text-muted">Leave if N/A</small></label>
                                            <input type="text" name="business_village" class="business_village"> 
                                        </div>
                                        <div class="col-4">
                                            <label for="business_street">Barangay <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                            <select id="inputBarangay" class="form-control business_barangay" name="business_barangay" required>
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
                                        <div class="col-3">
                                            <label for="business_street">Zip Code <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                            <input type="text" name="business_zip" class="business_street" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="business_city">City <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                            <input type="text" name="business_city" class="business_city" value="Taguig City" readonly required>
                                        </div>
                                        <div class="col-4">
                                            <label for="business_city">Landline <small class="text-muted">Leave if N/A</small></label>
                                            <input type="text" onkeypress='return restrictAlphabets(event)'  maxlength="8" name="business_landline" class="business_city">
                                        </div>
                                        <div class="col-4">
                                            <label for="business_city">Mobile No. <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                            <input type="text" onkeypress='return restrictAlphabets(event)'  maxlength="11" name="business_mobile" class="business_city" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="inputService">Type of Service</label>
                                            <select id="inputService" class="form-control" name="inputservice" required>
                                                <option value="Art_And_Culture" selected>Art and Culture</option>
                                                <option value="Beauty_And_Wellness">Beauty and Wellness</option>
                                                <option value="Construction">Construction</option>
                                                <option value="Education">Education</option>
                                                <option value="Electronics">Electronics</option>
                                                <option value="Events">Events</option>
                                                <option value="Food_And_Beverages">Food and Beverages</option>
                                                <option value="Medical_Care">Medical Care</option>
                                                <option value="Professional_Services">Professional Services</option>
                                                <option value="Shopping_And_Retail">Shopping and Retail</option>
                                                <option value="Automotive">Automotive</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label for="inputSubService">Sub Service</label>
                                            <select id="inputSubService" class="form-control" name="inputSubService" required>
                                                
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label for="startsPrice">Service Price (Starts At)</label>
                                            <input type="text" onkeypress='return restrictAlphabets(event)' value="&#8369; " id="startsPrice" class="form-control" name="price" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="business_details">Business Description</label>
                                            <textarea class="form-control" name="business_details" id="business_details" rows="3" placeholder="What is your business?.." required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="col-12">

                                    <div class="business_logo">
                                        <img src="./assets/img/ConnServ_Logo_Black.png" id="photo" alt="..." class="img-thumbnail">
                                    </div>
                                      
                                    <div class="profile_picture">
                                        <label for="file">Click here to insert an Image  <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                        <input type="file" id="file" name="change_icon" style="display: none;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr>
                                    <label for="business_location">Insert Google Embedded Map  <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                    <input type="text" name="business_location" id="business_location" class="business_location" placeholder="Insert html here..">
                                    
                                    <div class="card mb-3">
                                        <div class="card-header"><label onclick="show_hide()">How to Insert Google Embedded Map? <span>Click Here!</span></label></div>
                                        <div class="appointment_container">
                                            <div class="card-body">
                                                <p class="card-text">Step 1. Search for Google Maps.</p>
                                                <p>Step 2. Select your business' Location.</p>
                                                <p>Step 3. Click 'Share' icon.</p>
                                                <p>Step 4. In the tab in window, select 'Embed a map'.</p>
                                                <p>Step 5. Click the text 'Copy HTML'.</p>
                                                <p>Step 6. Paste in the textbox above this tutorial.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="business_docu">
                                        <hr>
                                        <label>Business Legal Documents  <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">* <small class="text-muted">pdf file only</small></span></label>
                                        <input type="file" id="file" name="legalFiles" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="owner_valid">
                                        <hr>

                                        <label>Owner Valid ID  <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">* <small class="text-muted">pdf file only</small></span></label>
                                        <input type="file" id="file" name="idFiles" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr>
                                    <button type="submit" name="createBtn" class="createBtn">Create Business</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="./js/userProfile/appointmentCards.js"></script>
        <script src="./js/userProfile/profile_image.js"></script>
        <script type="text/javascript">

            function restrictAlphabets(e) {
             var x = e.which || e.keycode;
             if ((x >= 48 && x <= 57))
                 return true;
             else
                 return false;
            }

            var inputservice = {
                Art_And_Culture: ['Digital Art', 'Painting', 'Calligraphy'],
                Beauty_And_Wellness: ['Personal Care', 'Exercises', 'Wellness and Alternatives'],
                Construction: ['Plumbing', 'Masonry', 'Special Construction'],
                Education: ['Training and Development', 'Educational Services'],
                Electronics: ['Computers', 'Communications', 'Cabling', 'Security and Protection'],
                Events: ['Photography', 'Party Planning Services', 'Memorial Services'],
                Food_And_Beverages: ['Bars and Cafes', 'Catering', 'Bakeries', 'Restaurants'],
                Medical_Care: ['Animal Health', 'Health Care Facilities', 'Health Care Services'],
                Professional_Services: ['Interior Design Services', 'Engineering Services', 'Architectural Services'],
                Shopping_And_Retail: ['Cooperative Buying', 'Malls', 'Luggage and Bags', 'Safety Gear and Equipment'],
                Automotive: ['Repair and Maintenance', 'Parts Shop', 'Detail Supplies', 'Towing']
            }

            var main = document.getElementById('inputService');
            var sub = document.getElementById('inputSubService');

            main.addEventListener('change', function(){

                var selected_option = inputservice[this.value];

                while(sub.options.length > 0 ){

                    sub.options.remove(0);
                }

                Array.from(selected_option).forEach(function(el){

                    let option = new Option(el, el);

                    sub.appendChild(option);
                });
            });
        </script>
        <!-- POPPER JS  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/popper.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
      </body>
</html>