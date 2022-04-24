<?php 

  session_start();
  if(!isset($_SESSION['username'])){
    header("Location: ./login.php");
    die();
  }

  include './hostCon.php';
  $username = $_SESSION['username'];

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
          
          $_SESSION['business'] = $imgRow['business_id'];
          $appointmentAccessId = $_SESSION['business'];
      }
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
        <style>
          hr{
            border:2px solid black;
          }
        </style>
        <link rel="stylesheet" href="./css/userProfileStyling.css">
        <?php 
          require_once './hostCon.php';
          $id = $_SESSION['username'];
          $imageSelect = "SELECT * FROM user_tb WHERE user_identity = $id";
          if($imgResult = mysqli_query($connect, $imageSelect)){
            
            if($imgRow = mysqli_fetch_assoc($imgResult)){
              
              $imgVar = $imgRow['profileImg'];
            }
          }
         
        ?>

        <title>ConnServ</title>
    </head>
    <body>
      <?php include "./navbar.php"?>
        <div class="body_container">
            <div class="container-fluid">

            <div class="profile_nav">
              <ul class="nav nav-pills mb-3 col-12" id="pills-tab" role="tablist">
                
                <!-- Notifications Pill -->
                <li class="nav-item col-2">
                  <a class="nav-link active" id="pills-notifications-tab" data-toggle="pill" href="#pills-notifications" role="tab" aria-controls="pills-notifications" aria-selected="false">Notifications</a>
                </li>
                <!-- Appointments Pill -->
                <li class="nav-item col-2">
                  <a class="nav-link" id="pills-appointment-tab" data-toggle="pill" href="#pills-appointment" role="tab" aria-controls="pills-appointment" aria-selected="false">Appointments</a>
                </li>
                <!-- Profile Pill -->
                <li class="nav-item col-2">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</a>
                </li>
                <!-- Messages Pill -->
                <li class="nav-item col-2">
                  <a class="nav-link" id="pills-messages-tab" data-toggle="pill" href="#pills-messages" role="tab" aria-controls="pills-messages" aria-selected="false">Messages</a>
                </li>
                <!-- Business Pill -->
                <li class="nav-item col-2">
                  <a class="nav-link" id="pills-business-tab" data-toggle="pill" href="#pills-business" role="tab" aria-controls="pills-business" aria-selected="false">My Business</a>
                </li>
              </ul>
            </div>
                    
              <div class="col-12 tab_container">
                <div class="tab-content" id="v-pills-tabContent">

                        <!-- Profile Contents -->
                  <div class="tab-pane fade profile" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                          <div class="main_content">
                            <div class="title_head">
                              <h4>My Profile</h4>
                              <p>Manage your account</p>
                              <div class="configureDiv" style="display: flex;">
                                <button class="configureBtn" id="updateFormBtn">Update</button>
                                <button class="configureBtn" id="deactivateFormBtn">Deactivate</button>
                                <button class="configureBtn" id="saveFormBtn">Save</button>
                              </div>
                            </div>
                            <div class="content">
                              <div class="content_format">
                                <form action="./includes/edit.inc.php" class="needs-validation"  method="POST" enctype="multipart/form-data">
                                  <div class="row">

                                    <div class="col-9">
                                      <h5>Information</h5>
                                      <div class="form-row">
                                        <div class="form-group col-md-3">
                                          <label for="inputUsername">Username</label>
                                          <input type="text" class="form-control" id="inputUsername" value="<?php echo $_SESSION['username'];?>" disabled>
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="inputEmail">Email</label>
                                          <input type="email" class="form-control" id="inputEmail" name="edit_email" value="<?php echo $_SESSION['email'];?>" placeholder="Email" readonly required>
                                        </div>
                                        <div class="form-group col-md-3">
                                          
                                        <label for="inputPassword">Password</label>
                                          <label class="sr-only" for="inputPassword">Password</label>
                                          <div class="input-group">
                                            <input type="password" class="form-control" id="inputPassword" name="edit_password" value="<?php echo $_SESSION['password'];?>" placeholder="Password" required>
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">
                                                <input type="checkbox" onclick="showPassword()"></div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <div class="form-group col-md-3">
                                          <div>
                                            <label>Gender</label>
                                          </div>
                                          <?php
                                          
                                          if($ownerrow['user_sex']=="Male"){
                                            
                                            ?>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="edit_gender" id="male" value="Male" checked>
                                              <label class="form-check-label" for="male">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="edit_gender" id="female" value="Female">
                                              <label class="form-check-label" for="female">Female</label>
                                            </div>
                                            <?php
                                            
                                          }

                                          else if($ownerrow['user_sex']=="Female"){

                                            ?>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="edit_gender" id="male" value="Male">
                                              <label class="form-check-label" for="male">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="edit_gender" id="female" value="Female" checked>
                                              <label class="form-check-label" for="female">Female</label>
                                            </div>
                                            <?php
                                          }
                                          else{
                                            ?>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="edit_gender" id="male" value="Male">
                                              <label class="form-check-label" for="male">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="edit_gender" id="female" value="Female">
                                              <label class="form-check-label" for="female">Female</label>
                                            </div>
                                            <?php
                                          }
                                          ?>
                                          
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <?php
                                        
                                        if($ownerrow['user_firstname']!="" && $ownerrow['user_lastname']!="" && $ownerrow['user_contactnum']!="" && $ownerrow['user_birthdate']!=""){

                                          ?>
                                          
                                          <div class="form-group col-md-3">
                                            <label for="inputName">First Name</label>
                                            <input type="text" class="form-control" id="inputName" name="edit_firstname" value="<?php echo $ownerrow['user_firstname'];?>" required>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="inputSurname">Surname</label>
                                            <input type="text" class="form-control" id="inputSurname" name="edit_surname" value="<?php echo $ownerrow['user_lastname'];?>" required>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="inputPhone">Phone Number</label>
                                            <input type="text"  onkeypress='return restrictAlphabets(event)' maxlength="11" value="<?php echo $ownerrow['user_contactnum'];?>" class="form-control" id="inputPhone" name="edit_phonenumber" required>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="inputDate">Birthdate</label>
                                            <input type="date" class="form-control" id="inputDate" value="<?php echo $ownerrow['user_birthdate'];?>" name="edit_bdate" min="1950-01-01" max="2010-01-01" required>
                                          </div>
                                          <?php
                                        }
                                        else{
                                          ?>

                                          <div class="form-group col-md-3">
                                            <label for="inputName">First Name</label>
                                            <input type="text" class="form-control" id="inputName" name="edit_firstname" required>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="inputSurname">Surname</label>
                                            <input type="text" class="form-control" id="inputSurname" name="edit_surname" required>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="inputPhone">Phone Number</label>
                                            <input type="text"  onkeypress='return restrictAlphabets(event)' maxlength="11" class="form-control" id="inputPhone" name="edit_phonenumber" required>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="inputDate">Birthdate</label>
                                            <input type="date" class="form-control" id="inputDate" name="edit_bdate" min="1950-01-01" max="2010-01-01" required>
                                          </div>
                                          <?php
                                        }
                                        ?>
                                      </div>
                                    </div>
  
  
                                    <div class="col-3">
                                      <div class="user_icon">
                                        <div class="profile_picture">
                                        <?php  
                                        
                                          if($ownerrow['profileImg'] != ""){
                                            echo "<img src='./assets/img/user_profile/".$imgVar."' alt='User Icon' id='photo'>";
                                          }else{
                                            echo "<img src='./assets/img/icons/homepage/account.png".$imgVar."' alt='User Icon' id='photo'>";
                                          }
                                        ?>
                                        </div>
                                        <label id="uploadBtn" for="file">Click to change</label>
                                        <input type="file" id="file" name="file">
                                      </div>
                                    </div>
                                  </div>


                                  <h5>Address</h5>
                                  
                                  <?php
                                    
                                    if($ownerrow['user_housenum'] != "" && $ownerrow['user_street'] != "" && $ownerrow['user_barangay'] != ""
                                    && $ownerrow['user_city'] != ""  && $ownerrow['user_district'] != "" && $ownerrow['user_zip'] != ""){

                                      ?>
                                      
                                      <div class="form-row">
                                        <div class="form-group col-md-3">
                                          <label for="inputHouse">House No.</label>
                                          <input type="text" class="form-control" id="inputHouse" value="<?php echo $ownerrow['user_housenum'];?>" name="edit_house" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="inputStreet">Street</label>
                                          <input type="text" class="form-control" id="inputStreet" value="<?php echo $ownerrow['user_street'];?>" name="edit_street" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="inputBarangay">Barangay</label>
                                          <select id="inputBarangay" class="form-control"  name="edit_brgy" required>
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
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-3">
                                          <label for="inputCity">City</label>
                                          <input type="text" class="form-control" id="inputCity" value="<?php echo $ownerrow['user_city'];?>" name="edit_city" value="Taguig City" required>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <label for="inputDistrict">District</label>
                                          <select id="inputDistrict" class="form-control" name="edit_district" required>
                                            <option selected value="District 1">District 1</option>
                                            <option value="District 2">District 2</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <label for="inputZip">Zip</label>
                                          <input type="text" onkeypress='return restrictAlphabets(event)' value="<?php echo $ownerrow['user_zip'];?>" class="form-control" id="inputZip" name="edit_zip" required>
                                        </div>
                                      </div>
                                      <?php
                                    }
                                    else{
                                      ?>
                                      <div class="form-row">
                                        <div class="form-group col-md-3">
                                          <label for="inputHouse">House No.</label>
                                          <input type="text" class="form-control" id="inputHouse" name="edit_house" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="inputStreet">Street</label>
                                          <input type="text" class="form-control" id="inputStreet" name="edit_street" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="inputBarangay">Barangay</label>
                                          <select id="inputBarangay" class="form-control"  name="edit_brgy" required>
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
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-3">
                                          <label for="inputCity">City</label>
                                          <input type="text" class="form-control" id="inputCity" name="edit_city" value="Taguig City" required>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <label for="inputDistrict">District</label>
                                          <select id="inputDistrict" class="form-control" name="edit_district" required>
                                            <option selected value="District 1">District 1</option>
                                            <option value="District 2">District 2</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <label for="inputZip">Zip</label>
                                          <input type="text" onkeypress='return restrictAlphabets(event)' class="form-control" id="inputZip" name="edit_zip" required>
                                        </div>
                                      </div>
                                      <?php
                                    }
                                  ?>
                                  
                                  <div class="form-row">

                                    <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <p>Are you sure to save changes?</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary" name="saveChanges">Save changes</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                                <div class="form-group col-md-3">
                                      <button type="submit" class="btn btn-primary saveBtn"  data-toggle="modal" data-target="#saveModal">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                  </div>

                        <!-- Appointments Contents -->
                  
                  <div class="tab-pane fade appointments" id="pills-appointment" role="tabpanel" aria-labelledby="pills-appointment-tab">
                    <div class="container row">
                      <h4>Your Appointments</h4>
                    </div>
                    <div class="col-12" style="display: flex;">
                      <div class="col-2">
                        <div class="col-12 filter_check">
                          <p style="width: 100%; margin: 0;"><b>Filter By</b></p>
                          <div style="width: 100%;">
                              <a href="./user_profile.php?alphabet">A-Z</a>
                          </div>
                          <div style="width: 100%;">
                              <a href="./user_profile.php?date">Date Appointed</a>
                          </div>
                          <div style="width: 100%;">
                              <a href="./user_profile.php?approved">Approved</a>
                          </div>
                          <div style="width: 100%;">
                              <a href="./user_profile.php?waiting">Waiting</a>
                          </div>
                          <div style="width: 100%;">
                              <a href="./user_profile.php?reset">Reset</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-10">
                        
                        <?php
                        if(isset($_GET['date'])){
                          $selection = "SELECT * FROM `appointment_tb` WHERE client_id = '$username' AND approval = 'Approved' ORDER BY min_date ASC";
                          $appointmenResult = mysqli_query($connect, $selection);
      
                          if(mysqli_fetch_assoc($appointmenResult)){
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
                                        echo '<p class="card-text">Date: <small><strong>'.$appointmentRows['min_date'].' / '.$appointmentRows['max_date'].'</strong></small></p><hr>';
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
                          else{
                            echo "<h4>THERE IS NO RECORD</h4>";
                          }
                        }
                        else if(isset($_GET['alphabet'])){
                          $selection = "SELECT * FROM `appointment_tb` WHERE client_id = '$username' AND approval = 'Approved' ORDER BY business_name ASC";
                          $appointmenResult = mysqli_query($connect, $selection);
      
                          if(mysqli_fetch_assoc($appointmenResult)){
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
                                        echo '<h5 class="card-title text-center"  style="white-space: nowrap;overflow: hidden; text-overflow: ellipsis; padding: 10px;"  data-toggle="tooltip" data-placement="top" title="<strong>'.$appointmentRows['business_name'].'</strong>" value="'.$appointmentRows['business_name'].'">'.$appointmentRows['business_name'].'</h5>';
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
                          else{
                            echo "<h4>THERE IS NO RECORD</h4>";
                          }
                        }
                        else if(isset($_GET['approved'])){
                          $selection = "SELECT * FROM `appointment_tb` WHERE client_id = '$username' AND approval = 'Approved' ";
                          $appointmenResult = mysqli_query($connect, $selection);
                          if(mysqli_fetch_assoc($appointmenResult)){
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
                          else{
                            echo "<h4>THERE IS NO RECORD</h4>";
                          }
                        }
                        
                        else if(isset($_GET['waiting'])){
                          $selection = "SELECT * FROM `appointment_tb` WHERE client_id = '$username' AND approval = 'waiting' ";
                          $appointmenResult = mysqli_query($connect, $selection);

                          if(mysqli_fetch_assoc($appointmenResult)){
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
                          else{
                            echo "<h4>THERE IS NO RECORD</h4>";
                          }
                        }
                        else if(!isset($_GET['date']) && !isset($_GET['alphabet']) && !isset($_GET['approved']) || isset($_GET['reset'])){
                          $selection = "SELECT * FROM `appointment_tb` WHERE client_id = '$username' AND approval = 'Approved'";
                          $appointmenResult = mysqli_query($connect, $selection);
                          if(mysqli_fetch_assoc($appointmenResult)){
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
                          else{
                            echo "<h4>THERE IS NO RECORD</h4>";
                          }
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                        <!-- Messages Contents -->
                  <div class="tab-pane fade messages" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
                        <p>AWDASDAWDSD</p>
                  </div>

                        <!-- Notifications Contents -->
                  
                  <div class="tab-pane fade show active notifications" id="pills-notifications" role="tabpanel" aria-labelledby="pills-notifications-tab">
                        <p>AWDASDAWDADS</p>
                  </div>    
                        <!-- Business Contents -->
                  <div class="tab-pane fade business" id="pills-business" role="tabpanel" aria-labelledby="pills-business-tab">
                    <div class="business_contents">
                      <div class="contents_container">
                        <div class="container_display">
                          <?php

                            require_once './hostCon.php';
                            $owner = $_SESSION['username'];
                            $query = mysqli_query($connect,"SELECT * FROM business_tb WHERE ownerId = '$owner'");
                            $rows = mysqli_fetch_array($query);
                            if(!mysqli_num_rows($query)>0){
                              echo "<h1>No Business? Create now!</h1>";
                              echo "<a href='./create_business.php' class='createLink'>
                                        <button type='submit' class='createBtn'>Create Business</button>
                                    </a>";
                              echo "<p>You must use Desktop or Laptop before creating a business.</p>";
                            }
                            
                            else{
                              $_SESSION['businessId'] = $rows['business_id'];

                              ?>
                              <div class="col-2 accordion" id="accordionExample">
                                <div>
                                    
                                    <div id="collapseAppointment" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="nav flex-column nav-pills a_links" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link" id="v-pills-upcoming-tab" data-toggle="pill" href="#v-pills-upcoming" role="tab" aria-controls="v-pills-upcoming" aria-selected="false">Upcoming</a>
                                            <a class="nav-link" id="v-pills-pending-tab" data-toggle="pill" href="#v-pills-pending" role="tab" aria-controls="v-pills-pending" aria-selected="false">Pending</a>
                                            <a class="nav-link" id="v-pills-mybusiness-tab" data-toggle="pill" href="#v-pills-mybusiness" role="tab" aria-controls="v-pills-mybusiness" aria-selected="false">My Business</a>
                                            <a class="nav-link" id="v-pills-editbusiness-tab" data-toggle="pill" href="#v-pills-editbusiness" role="tab" aria-controls="v-pills-editbusiness" aria-selected="false">Edit</a>
                                        </div>
                                    </div>
                                </div>
                              </div>

                              
                              <div class="col-10 body_content">
                                  <div class="tab-content" id="v-pills-tabContent" style="margin: 2rem 0 2rem; ">
                                          <!-- Business Profile TAB -->
                                      <div class="tab-pane fade business_content" id="v-pills-mybusiness" role="tabpanel" aria-labelledby="v-pills-mybusiness-tab">
                                          <div class="col-12">
                                              <div class="col-12 row title_business">
                                                  <div class="col-3">
                                                      <div class="user_icon">
                                                          <div style="width: 100%;">
                                                              <?php echo "<img src='./assets/img/featured_services/business_icon/".$imgVar."' style='width: 100%;' alt='User Icon' >";?>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-9">
                                                      <div class="title_container">
                                                          <h1><?php echo $row['business_name'];?></h1>
                                                          <h5 class="text-muted"><?php echo $row['business_category']." / ".$row['business_subcategory'];?></h5>
                                                              
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
                                                          <div class="col-12" style="display: flex;">
                                                              <div class="col-3 description_bar">
                                                                  <h6>Service Price</h6><hr>
                                                                  <div>
                                                                      <p>Price Starts At:<br> <span><?php echo $row['price'];?></span></p>
                                                                  </div>
                                                              </div>
                                                              <div class="col-1">

                                                              </div>
                                                              <div class="col-8 description_bar">
                                                                  <h6>Description</h6><hr>
                                                                  <div class="description_content">
                                                                      <p><?php echo $row['business_description'];?></p>
                                                                  </div>
                                                              </div>
                                                          </div><br>
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
                                      <div class="tab-pane fade edit_content" id="v-pills-editbusiness" role="tabpanel" aria-labelledby="v-pills-editbusiness-tab">
                                          <div class="col-12">
                                              
                                              <div class="business_container">
                                                  <div class="container_title">
                                                      <h3>Edit my Business</h3><span style="color:red;">CAUTION! EDITING WILL REQUIRE YOU TO CHANGE OR INPUT ALL REQUIRED FIELDS!</span>
                                                  </div>
                                                  <form action="./includes/businessEdit.inc.php" method="post" enctype="multipart/form-data">
                                                      <div class="row">
                                                          <div class="col-7">
                                                              <div class="business_trade">

                                                                  <label for="business_name">Business Name <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                                                  <input type="text" name="business_name" class="business_name" required>
                                                              </div>
                                                              <div class="business_trade">

                                                                  <label for="trade_name">Business Email <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
                                                                  <input type="text" name="business_email" class="trade_name" value="<?php echo $row['business_email'];?>" readonly required>
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
                                                                      <img src='./assets/img/featured_services/business_icon/<?php echo $imgVar;?>' id="photo" alt="..." class="img-thumbnail">
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
                                                                  <button type="submit" name="updateBusinessBtn" class="createBtn">Update</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                          <!-- Appointments TAB -->
                                      <div class="tab-pane fade incoming_content" id="v-pills-upcoming" role="tabpanel" aria-labelledby="v-pills-upcoming-tab">
                                          <div class="col-12">
                                              

                                              <div class="col-12 row">
                                              
                                                  <?php
                                                  
                                                      $selection = "SELECT * FROM `appointment_tb` WHERE business_id = '$appointmentAccessId' AND approval = 'Approved'";
                                                      $appointmenResult = mysqli_query($connect, $selection);
                                  
                                                      foreach($appointmenResult as $appointmentRows){
                                                                                                  
                                                          echo '<div class="col-12" style="margin-top: 2rem;">';
                                                          echo '<div class="card">';
                                                              echo '<div class="card card-header">';
                                                              echo '<h2 class="mb-0">';
                                                                  echo '<h6 style="width: 200px; white-space: nowrap;overflow: hidden; text-overflow: ellipsis; padding: 10px;"  data-toggle="tooltip" data-placement="top" title="'.$appointmentRows['client_lastname'].", ".$appointmentRows['client_firstname'].'"> '.$appointmentRows['client_lastname'].", ".$appointmentRows['client_firstname'].' </h6>';
                                                              echo '</h2>';
                                                              echo '</div>';
                                                              echo '<div class="card-body">';
                                                                  echo '<h5 class="card-title text-center"  style="white-space: nowrap;overflow: hidden; text-overflow: ellipsis; padding: 10px;"  data-toggle="tooltip" data-placement="top" title="'.$appointmentRows['appointment_title'].'">'.$appointmentRows['appointment_title'].'</h5>';
                                                                  echo '<p class="card-text text-center">'.$appointmentRows['appointment_custom'].'<hr></p>';
                                                                  echo '<div style="display:flex;">';
                                                                      echo '<div class="col-6" style="border-right: 1px solid black;">';
                                                                          echo '<p class="card-text">Contact: '.$appointmentRows['mobile'].'</p><hr>';
                                                                          echo '<p class="card-text">Date: '.$appointmentRows['min_date'].' <strong>/</strong> '.$appointmentRows['max_date'].'</p><hr>';
                                                                          echo '<p class="card-text">Time: <small>'.$appointmentRows['hour_time'].' <strong>:</strong> '.$appointmentRows['mins_time'].' '.$appointmentRows['hour_clock'].'</small></p><hr>';
                                                                          echo '<p class="card-text">Payment Method: <small>'.$appointmentRows['payment_method'].'</small></p>';
                                                                      echo '</div>';
                                                                      echo '<div class="col-6">';
                                                                          echo '<p class="card-text">Service Description:<br></p>';
                                                                          echo '<p class="card-text">'.$appointmentRows['service_note'].'</p>';
                                                                      echo '</div>';
                                                                  echo '</div>';
                                                              echo '</div>';
                                                              echo '<div class="card-footer text-muted  text-center">';
                                                                  echo '<a href="#" class="btn btn-primary">Show Receipt</a>';
                                                              echo '</div>';
                                                          echo '</div>';
                                                          echo '</div>';
                                                      }
                                                  ?>
                                              </div>
                                          
                                          </div>
                                      </div>
                                          <!-- Appointment Approvals TAB -->
                                      <div class="tab-pane fade show active approval_content" id="v-pills-pending" role="tabpanel" aria-labelledby="v-pills-pending-tab">
                                          <div class="col-12 approval_container">
                                              <div class="col-12 date_title">
                                                  <h6>Pending Appointments</h6>
                                              </div>
                                              <form action="./includes/businessinc/businessSearch.inc.php" method="post">
                                                <div class="col-12 table_contents">
                                                              
                                                          <table class="table table-hover incoming_table" border="1">

                                                              <thead>
                                                                  <tr>
                                                                      <th scope="col" style="width: 10%;"></th>
                                                                      <th scope="col">ID</th>
                                                                      <th scope="col" style="width: 10%;">Title</th>
                                                                      <th scope="col" style="width: 10%;">Name</th>
                                                                      <th scope="col" style="width: 20%;">Address</th>
                                                                      <th scope="col" style="width: 11%;">Contact</th>
                                                                      <th scope="col" style="width: 16%;">Date</th>
                                                                      <th scope="col" style="width: 8%;">Time</th>
                                                                  </tr>
                                                              </thead>

                                                              <tbody>
                                                                  <?php

                                                                      $notApprovedSql = "SELECT * FROM appointment_tb WHERE business_id = '$appointmentAccessId' AND approval = 'waiting'";
                                                                      
                                                                      if($notApprovedResult = mysqli_query($connect, $notApprovedSql)){
                                                                          
                                                                          if(mysqli_fetch_assoc($notApprovedResult)){
                                                                              foreach($notApprovedResult as $notApprovedRows){
                      
                                                                                  echo '<tr>';
                                                                                      echo '<td class="record"><small><a href="./includes/businessinc/businessSearch.inc.php?cancel='.$notApprovedRows['appointment_custom'].'" class="selection">&times;</a> <a href="./includes/businessinc/businessSearch.inc.php?approve='.$notApprovedRows['appointment_custom'].'" class="selection">&#10003;</a></td>';
                                                                                      echo '<td class="record"><small title="'.$notApprovedRows['appointment_custom'].'">'.$notApprovedRows['appointment_custom'].'</td>';
                                                                                      echo '<td class="record"><small title="'.$notApprovedRows['appointment_title'].'">'.$notApprovedRows['appointment_title'].'</td>';
                                                                                      echo '<td class="record"><small title="'.$notApprovedRows['client_lastname']. ", ".$notApprovedRows['client_firstname'].'">'.$notApprovedRows['client_lastname']. ", ".$notApprovedRows['client_firstname'].'</td>';
                                                                                      echo '<td class="record" title="'.$notApprovedRows['houseNum'].', '.$notApprovedRows['street'].', '.$notApprovedRows['barangay'].', '.$notApprovedRows['city'].'"><small>'.$notApprovedRows['houseNum'].', '.$notApprovedRows['street'].', '.$notApprovedRows['barangay'].', '.$notApprovedRows['city'].'</td>';
                                                                                      echo '<td class="record"><small title="'.$notApprovedRows['mobile'].'">'.$notApprovedRows['mobile'].'</td>';
                                                                                      echo '<td class="record"><small title="'.$notApprovedRows['min_date'].' <strong>/</strong> '.$notApprovedRows['max_date'].'">'.$notApprovedRows['min_date'].' <strong>/</strong> '.$notApprovedRows['max_date'].'</td>';
                                                                                      echo '<td class="record"><small>7:00 pm</td>';
                                                                                  echo '</tr>';
                                                                              }
                                                                              
                                                                          }
                                                                          else{
                                                                              echo "<td colspan='8' class='text-center'><h3><strong>There is no data</strong></h3></td";
                                                                          }
                                                                          
                                                                      }
                                                                  ?>
                                                              </tbody>
                                                          </table>
                                                          
                                                </div>
                                              </form>
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

                              <?php
                            }
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade messages" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
                    <form action="./includes/signout.inc.php" method="POST">
                      <button type="submit" name="logout">Logout</button>
                    </form>    
                  </div>
                </div>
              </div>
            </div>
        </div>
        <script>
            function restrictAlphabets(e) {
              var x = e.which || e.keycode;
              if ((x >= 48 && x <= 57))
                  return true;
              else
                  return false;
              }
            function showPassword() {
                var x = document.getElementById("inputPassword");
                if (x.type === "password") {
                  x.type = "text";
                } else {
                  x.type = "password";
                }
            }
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
        <script src="./js/userProfile/appointmentCards.js"></script>
        <script src="./js/userProfile/profile_image.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
      </body>
</html>