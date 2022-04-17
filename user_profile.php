<?php 

  session_start();
  if(!isset($_SESSION['username'])){
    header("Location: ./login.php");
    die();
  }

  $username = $_SESSION['username'];
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
        <link rel="stylesheet" href="./css/userProfile.css">
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

              <ul class="nav nav-pills mb-3 col-12" id="pills-tab" role="tablist">
                
                <!-- Appointments Pill -->
                <li class="nav-item col-2">
                  <a class="nav-link active" id="pills-appointment-tab" data-toggle="pill" href="#pills-appointment" role="tab" aria-controls="pills-appointment" aria-selected="false">Appointments</a>
                </li>
                <!-- Profile Pill -->
                <li class="nav-item col-2">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</a>
                </li>
                <!-- Messages Pill -->
                <li class="nav-item col-2">
                  <a class="nav-link" id="pills-messages-tab" data-toggle="pill" href="#pills-messages" role="tab" aria-controls="pills-messages" aria-selected="false">Messages</a>
                </li>
                <!-- Notifications Pill -->
                <li class="nav-item col-2">
                  <a class="nav-link" id="pills-notifications-tab" data-toggle="pill" href="#pills-notifications" role="tab" aria-controls="pills-notifications" aria-selected="false">Notifications</a>
                </li>
                <!-- Business Pill -->
                <li class="nav-item col-2">
                  <a class="nav-link" id="pills-business-tab" data-toggle="pill" href="#pills-business" role="tab" aria-controls="pills-business" aria-selected="false">My Business</a>
                </li>
                <!-- Account Pill -->
                <li class="nav-item col-2">
                  <a class="nav-link" id="pills-account-tab" data-toggle="pill" href="#pills-account" role="tab" aria-controls="pills-account" aria-selected="false">My Account</a>
                </li>
              </ul>
                    
              <div class="col-12 tab_container">
                <div class="tab-content" id="v-pills-tabContent">

                        <!-- Profile Contents -->
                  <div class="tab-pane fade profile" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                          <div class="main_content">
                            <div class="title_head">
                              <h4>My Profile</h4>
                              <p>Manage your account</p>
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
                                          <input type="email" class="form-control" id="inputEmail" name="edit_email" value="<?php echo $_SESSION['email'];?>" placeholder="Email" required>
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
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="edit_gender" id="male" value="Male">
                                            <label class="form-check-label" for="male">Male</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="edit_gender" id="female" value="Female">
                                            <label class="form-check-label" for="female">Female</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="edit_gender" id="other" value="Other">
                                            <label class="form-check-label" for="other">Prefer not to say</label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-3">
                                          <label for="inputName">First Name</label>
                                          <input type="text" class="form-control" id="inputName" name="edit_firstname" placeholder="Ex. Marielle" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="inputSurname">Surname</label>
                                          <input type="text" class="form-control" id="inputSurname" name="edit_surname" placeholder="Ex. De vera" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="inputPhone">Phone Number</label>
                                          <input type="text" class="form-control" id="inputPhone" name="edit_phonenumber" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="inputDate">Birthdate</label>
                                          <input type="date" class="form-control" id="inputDate" name="edit_bdate" min="1950-01-01" max="2010-01-01" required>
                                        </div>
                                      </div>
                                    </div>
  
  
                                    <div class="col-3">
                                      <div class="user_icon">
                                        <div class="profile_picture">
                                        <?php  echo "<img src='./assets/img/user_profile/".$imgVar."' alt='User Icon' id='photo'>";?>
                                        </div>
                                        <label id="uploadBtn" for="file">Click to change</label>
                                        <input type="file" id="file" name="file">
                                      </div>
                                    </div>
                                  </div>


                                  <h5>Address</h5>
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
                                      <input type="text" class="form-control" id="inputZip" name="edit_zip" required>
                                    </div>
                                  </div>
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
                  
                  <div class="tab-pane fade show active appointments" id="pills-appointment" role="tabpanel" aria-labelledby="pills-appointment-tab">
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
                              <a href="./user_profile.php?notapproved">Not Approved</a>
                          </div>
                          <div style="width: 100%;">
                              <a href="./user_profile.php?reset">Reset</a>
                          </div>
                        </div>

                      </div>
                      <div class="col-10">
                        
                      <?php
                        if(isset($_GET['date'])){
                          $selection = "SELECT * FROM `appointment_tb` WHERE client_id = '$username' ORDER BY min_date ASC";
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
                        else if(isset($_GET['alphabet'])){
                          $selection = "SELECT * FROM `appointment_tb` WHERE client_id = '$username' ORDER BY business_name ASC";
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
                        else if(isset($_GET['approved'])){
                          $selection = "SELECT * FROM `appointment_tb` WHERE client_id = '$username' AND approval = 'Approved' ";
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
                        
                        else if(isset($_GET['notapproved'])){
                          $selection = "SELECT * FROM `appointment_tb` WHERE client_id = '$username' AND approval = 'Not Approved' ";
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
                        else if(!isset($_GET['date']) && !isset($_GET['alphabet']) && !isset($_GET['approved']) || isset($_GET['reset'])){
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
                  
                  <div class="tab-pane fade notifications" id="pills-notifications" role="tabpanel" aria-labelledby="pills-notifications-tab">
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
                            if(mysqli_num_rows($query)>0){
                              
                              $_SESSION['businessId'] = $rows['business_id'];

                              echo "<a href='./business.php' class='createdBusinessLink'><button>Open My Business</button></a>";
                            }
                            
                            else{
                              echo "<h1>No Business? Create now!</h1>";
                              echo "<a href='./create_business.php' class='createLink'>
                                        <button type='submit' class='createBtn'>Create Business</button>
                                    </a>";
                              echo "<p>You must use Desktop or Laptop before creating a business.</p>";
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
          function showPassword() {
              var x = document.getElementById("inputPassword");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
          }
    </script>
        <script src="./js/userProfile/appointmentCards.js"></script>
        <script src="./js/userProfile/profile_image.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
      </body>
</html>