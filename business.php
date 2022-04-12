<?php
    session_start();
if(!isset($_SESSION['username'])){

    header("Location: ./login.php");

    die();

}
 require_once './hostCon.php';
    
$businessOwner = $_SESSION['username'];
$businessSql = "SELECT * FROM business_tb WHERE ownerId = $businessOwner";
$businessresult = mysqli_query($connect, $businessSql);
$row = mysqli_fetch_assoc($businessresult);

$ownerSql = "SELECT * FROM user_tb WHERE user_identity = $businessOwner";
$ownerresult = mysqli_query($connect, $ownerSql);
$ownerrow = mysqli_fetch_assoc($ownerresult);

$ownerFname = ucfirst($ownerrow['user_firstname']);
$ownerLname = ucfirst($ownerrow['user_lastname']);

          $id = $_SESSION['username'];
          $imageSelect = "SELECT * FROM business_tb WHERE ownerId = $id";
          if($imgResult = mysqli_query($connect, $imageSelect)){
            
            if($imgRow = mysqli_fetch_assoc($imgResult)){
              
              $imgVar = $imgRow['business_icon'];
            }
          }
         
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./assets/img/tab_icon.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <?php include_once './includes/bootstrap_con.php';?>

        <link rel="stylesheet" href="./css/stylingBusinessNew.css">
        <title>Business</title>
    </head>
    <body style="height: 1000px;">
        <?php include_once './navbar.php';?>
        <section class="container-fluid" style="height: 100%;">
        <div class="row">
            <div class="col-2 accordion" id="accordionExample"  style="padding-top: 1rem;">
                <div style="padding-left: 1rem;">
                    <p class="parent_link"  data-toggle="collapse" data-target="#collapseBusiness" aria-expanded="true" aria-controls="collapseBusiness">Profile</p>
                    
                    <div id="collapseBusiness" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" id="v-pills-business-tab" data-toggle="pill" href="#v-pills-business" role="tab" aria-controls="v-pills-business" aria-selected="false">Business</a>
                            <a class="nav-link" id="v-pills-edit-tab" data-toggle="pill" href="#v-pills-edit" role="tab" aria-controls="v-pills-edit" aria-selected="false">Edit</a>
                            <a class="nav-link" id="v-pills-revenue-tab" data-toggle="pill" href="#v-pills-revenue" role="tab" aria-controls="v-pills-revenue" aria-selected="false">Revenue</a>
                            <a class="nav-link" id="v-pills-other-tab" data-toggle="pill" href="#v-pills-other" role="tab" aria-controls="v-pills-other" aria-selected="false">Others</a>
                        </div>
                    </div>
                    <p class="parent_link"  data-toggle="collapse" data-target="#collapseAppointment" aria-expanded="true" aria-controls="collapseAppointment">Appointments</p>
                    
                    <div id="collapseAppointment" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" id="v-pills-incoming-tab" data-toggle="pill" href="#v-pills-incoming" role="tab" aria-controls="v-pills-incoming" aria-selected="false">Incoming</a>
                            <a class="nav-link" id="v-pills-approval-tab" data-toggle="pill" href="#v-pills-approval" role="tab" aria-controls="v-pills-approval" aria-selected="false">Approval</a>
                        </div>
                    </div>
                    <a href="./user_profile.php" class="backbtn"><button>Back to User Page</button></a>
                </div>
            </div>
            <div class="col-10 body_content">
                <div class="tab-content" id="v-pills-tabContent" style="margin: 2rem 0 2rem; ">
                        <!-- Business Profile TAB -->
                    <div class="tab-pane fade show business_content" id="v-pills-business" role="tabpanel" aria-labelledby="v-pills-business-tab">
                        <div class="col-12">
                            <div class="col-12 row title_business">
                                <div class="col-3">
                                    <div class="user_icon">
                                        <div class="profile_picture">
                                            <?php echo "<img src='./assets/img/featured_services/business_icon/".$imgVar."'  alt='User Icon' >";?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="title_container">
                                        <h2><?php echo $row['business_name'];?></h2>
                                        <h4 class="text-muted">Barista and Coffee Tutor</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 tab_contents">
                                <div class="col-12 address_bar">
                                    <table style="width: 25%;">
                                        <tr>
                                            <th style=" padding-bottom: 1rem !important;"><h5>Basic Information</h5></th>
                                        </tr>
                                    </table>
                                    <table class="basic_contact">
                                        <tr>
                                            <th>Owner</th>
                                            <th>Business Email</th>
                                            <th>Contact #</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo $ownerFname." ".$ownerLname;?></td>
                                            <td><?php echo $row['business_email'];?></td>
                                            <td><?php echo $row['business_mobile'];?></td>
                                        </tr>
                                    </table>
                                    <table class="address_table">
                                        <tr>
                                            <th>Unit/House #</th>
                                            <th>Street</th>
                                            <th>Barangay</th>
                                            <th>District</th>
                                            <th>City</th>
                                            </tr>
                                            <tr class="data_even">
                                            <td><?php echo $row['house_no'];?></td>
                                            <td><?php echo $row['business_street'];?></td>
                                            <td><?php echo $row['business_barangay'];?></td>
                                            <td><?php echo $row['business_zip'];?></td>
                                            <td><?php echo $row['business_city'];?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-12">
                                    <div class="main_content">
                                        <div class="col-12 category_content">
                                            <div class="col-12 category_title">
                                                <h5>Service Category</h5>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                                <h5>Sub Service Category</h5>
                                            </div>
                                            
                                            <div class="col-12 category_chosen">
                                                <h6 class="text-mute"><?php echo $row['business_category'];?></h6>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                                <h6 class="text-mute"><?php echo $row['business_subcategory'];?></h6>
                                            </div>
                                        </div>
                                        <div class="col-12 description_bar">
                                            <h6>Description</h6><hr>
                                            <div class="description_content">
                                                <p><?php echo $row['business_description'];?></p>
                                            </div>
                                        </div>
                                        <div class="col-12 documents_bar">
                                            
                                            <div class="col-6" style="margin: 0; padding:0;">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Location via Google Map</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                    <div class="location"><?php echo $row['business_map'];?></div>
                                            </div>
                                            
                                            <div class="col-2">
                                            <!-- Indention Space GAP -->
                                            </div>
                                            <div class="col-4 documents_content">
                                                <table class="col-12 table table-hover">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">Documents / IDs</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">
                                                                <p><?php echo $row['legalFileName'];?></p>
                                                            </td>
                                                            <td>
                                                                <a href="./assets/legalidDocuments/<?php echo $row['legalFileName']?>" download>
                                                                    <button class="downloadBtn">
                                                                        <span>Download</span>
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">
                                                                <p><?php echo $row['idFileName'];?></p>
                                                            </td>
                                                            <td>
                                                                <a href="./assets/legalidDocuments/<?php echo $row['idFileName']?>" download>
                                                                    <button class="downloadBtn">
                                                                        <span>Download</span>
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <!-- EDIT TAB -->
                    <div class="tab-pane fade edit_content" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
                        <div class="col-12">
                            
                            <div class="business_container">
                                <form action="./includes/businessEdit.inc.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="business_trade">

                                                <label for="business_name">Business Name <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                                <input type="text" name="business_name" class="business_name">
                                            </div>
                                            <div class="business_trade">

                                                <label for="trade_name">Business Email <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                                <input type="text" name="business_email" class="business_name">
                                            </div>
                                            <div class="business_address">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="business_unit_no">Unit Number</label>
                                                        <input type="text" name="business_unit_no" class="business_unit_no">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="business_building">Building Name</label>
                                                        <input type="text" name="business_building" class="business_building">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="business_house_no">House Number</label>
                                                        <input type="text" name="business_house_no" class="business_house_no">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="business_street">Street Name <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                                        <input type="text" name="business_street" class="business_street">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-5">
                                                        <label for="business_village">Village</label>
                                                        <input type="text" name="business_village" class="business_village">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="business_street">Barangay <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                                        <select id="inputBarangay" name="inputBarangay" class="form-control business_barangay">
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
                                                        <label for="business_zip">Zip Code <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                                        <input type="text" name="business_zip" class="business_street">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="business_city">City <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                                        <input type="text" name="business_city" class="business_city" required>
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="business_city">Landline</label>
                                                        <input type="text" name="business_landline" class="business_city" required>
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="business_city">Mobile No. <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                                        <input type="text" name="business_mobile" class="business_city" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="inputService">Type of Service</label>
                                                        <select id="inputService" class="form-control" name="inputservice" required>
                                                            <option value="ArtandCulture" selected>Art and Culture</option>
                                                            <option value="BeautyandWellness">Beauty and Wellness</option>
                                                            <option value="Construction">Construction</option>
                                                            <option value="Education">Education</option>
                                                            <option value="Electronics">Electronics</option>
                                                            <option value="Events">Events</option>
                                                            <option value="FoodandBeverages">Food and Beverages</option>
                                                            <option value="MedicalCare">Medical Care</option>
                                                            <option value="ProfessionalServices">Professional Services</option>
                                                            <option value="ShoppingandRetail">Shopping and Retail</option>
                                                            <option value="Transportation">Transportation</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="inputSubService">Sub Service</label>
                                                        <select id="inputSubService" class="form-control" name="inputSubService" required>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="business_details">Business Description</label>
                                                        <textarea class="form-control" name="business_details" id="business_details" rows="3" placeholder="What is your business?.."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="col-12">

                                                <div class="business_logo">
                                                    <?php echo '<img src="./assets/img/featured_services/business_icon/'.$imgVar.'" id="photo" alt="..." class="img-thumbnail">';?>
                                                    <!-- <img src="./assets/img/featured_services/business_icon/" id="photo" alt="..." class="img-thumbnail"> -->
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
                                                    <label>Business Legal Documents  <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                                    <input type="file" name="legalFiles" multiple>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="owner_valid">
                                                    <hr>

                                                    <label>Owner Valid ID  <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                                    <input type="file" name="idFiles" multiple>
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
                        <!-- REVENUE TAB -->
                    <div class="tab-pane fade edit_content" id="v-pills-revenue" role="tabpanel" aria-labelledby="v-pills-revenue-tab">
                        <div class="col-12">
                            <p>THIS IS REVENUE CONTENT</p>
                        </div>
                    </div>
                        <!-- OTHERS TAB -->
                    <div class="tab-pane fade edit_content" id="v-pills-other" role="tabpanel" aria-labelledby="v-pills-other-tab">
                        <div class="col-12">
                            <p>THIS IS OTHERS CONTENT</p>
                        </div>
                    </div>
                        <!-- Appointments TAB -->
                    <div class="tab-pane fade incoming_content" id="v-pills-incoming" role="tabpanel" aria-labelledby="v-pills-incoming-tab">
                        
                        <div class="col-12 incoming_container">
                            <div class="col-12 date_title">
                                <h6>Current Date</h6>
                            </div>
                            <div class="col-12 incoming_content">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Service Type</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Client Name</h6>
                                        <p class="card-text">Description note from the client of what problem to solve.</p>
                                        <p class="card-text">Chosen Date</p>
                                        <a class="card-text">Payment Method</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- Messages TAB -->
                    <div class="tab-pane fade approval_content" id="v-pills-approval" role="tabpanel" aria-labelledby="v-pills-approval-tab">
                        <div class="col-12 approval_container">
                                <div class="col-12 date_title">
                                    <h6>Current Date</h6>
                                </div>
                                <div class="col-12 incoming_content">
                                    <div class="col-12 table_contents">
                                        <table class="table table-hover table-sm incoming_table" border="1">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Service Type</th>
                                                    <th scope="col">Last</th>
                                                    <th scope="col">First</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Contact #</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Approval</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1009</th>
                                                    <td>Hardware Repair</td>
                                                    <td>Parole</td>
                                                    <td>Karl</td>
                                                    <td class="address">71e, Mapagkawanggawa</td>
                                                    <td>09676842595</td>
                                                    <td>03/09/22</td>
                                                    <td>7:00 pm</td>
                                                    <td><button>Approve</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1009</th>
                                                    <td>Hardware Repair</td>
                                                    <td>Parole</td>
                                                    <td>Karl</td>
                                                    <td class="address">71e, Mapagkawanggawa</td>
                                                    <td>09676842595</td>
                                                    <td>03/09/22</td>
                                                    <td>7:00 pm</td>
                                                    <td><button>Approve</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1009</th>
                                                    <td>Hardware Repair</td>
                                                    <td>Parole</td>
                                                    <td>Karl</td>
                                                    <td class="address">71e, Mapagkawanggawa St., Escopa 3, Project 4, Quezon City</td>
                                                    <td>09676842595</td>
                                                    <td>03/09/22</td>
                                                    <td>7:00 pm</td>
                                                    <td><button>Approve</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <p>Some text</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SETTINGS TAB -->
                    <div class="tab-pane fade settings_content" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h1>This is setting page</h1>
                    </div>
                </div>
            </div>
        </div>
        </section>
        
        <script src="./js/userProfile/profile_image.js"></script>
        <script src="./js/subservices/dynamic.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    </body>
</html>