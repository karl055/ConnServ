
<?php

if(!isset($_SESSION['username'])){
    session_start();
}

require_once './hostCon.php';

$businessImg = $_GET['bimg'];
$clientId = $_GET['cid'];
$appointmentId = $_GET['comb'];

/* Client and Service Info */
$businessName = $_GET['bname'];
$businessEmail = $_GET['bemail'];
$clientFName = $_GET['cfname'];
$clientLName = $_GET['clname'];
$clientMobile = $_GET['cmobile'];
$clientLandline = $_GET['clandline'];

/* Client Address */

$clientHouse = $_GET['chouse'];
$clientStreet = $_GET['cstreet'];
$clientBarangay = $_GET['cbrgy'];
$clientCity = $_GET['ccity'];

/* Date and Time */

$preferredMinDate = $_GET['prefmindate'];
$preferredMaxDate = $_GET['prefmaxdate'];
$preferredHourTime = $_GET['prefhourtime'];
$preferredMinsTime = $_GET['prefminstime'];
$preferredTime = $_GET['preftime'];
$description = $_GET['desc'];

$showSql = "SELECT * FROM appointment_tb WHERE appointment_id = '$appointmentId'";
$showResult = mysqli_query($connect, $showSql);
$showRows = mysqli_fetch_assoc($showResult);

$minuteTime = $showRows['mins_time'];
if(strlen($minuteTime)<2){

    $minuteTime = "0".$showRows['mins_time'];
}

$detailSql = "SELECT * FROM business_tb WHERE business_icon = '$businessImg'";
$detailResult = mysqli_query($connect, $detailSql);
$detailRows = mysqli_fetch_assoc($detailResult);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./assets/img/tab_icon.png">
        <?php include_once './includes/bootstrap_con.php';?>
        <link rel="stylesheet" href="./css/confirmation.css">
        <title>ConnServ</title>
    </head>
    <body>
        <!-- NAVIGATION BAR -->
    <?php require_once './navbar.php';?>
        
    <div class="col-12">
        <div class="text-header">
            <h1>Book Request Sent</h1>
            <p class="lead"> Booking ID: <mark><?php echo $showRows['appointment_custom'];?></mark></p>
        </div>
        <div class="info-table">
            <table>
                <thead>
                    <tr>
                        <th>Option</th>
                        <th title="This is the value of every row">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Service Type: </strong></td>
                        <td><?php echo $detailRows['business_subcategory'] ;?></td>
                    </tr>
                    <tr>
                        <td><strong>Service Provider: </strong></td>
                        <td><?php echo $showRows['business_name'] ;?></td>
                    </tr>
                    <tr>
                        <td><strong>Service Contact:  </strong></td>
                        <td><?php echo $detailRows['business_mobile'] ;?></td>
                    </tr>
                    <tr>
                        <td><strong>Date: </strong></td>
                        <td>
                            <?php echo $showRows['min_date'];?>
                        
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                            </svg>
                            <?php echo $showRows['max_date'] ;?>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Time: </strong></td>
                        <td><?php echo $showRows['hour_time'].": ". $minuteTime." ".$showRows['hour_clock'] ;?></td>
                    </tr>					
                    <tr>
                        <td><strong>Client Address: </strong></td>
                        <td><?php echo $clientHouse.", ".$clientStreet.", ".$clientBarangay.", ".$clientCity;?></td>
                    </tr>
                    <tr>
                        <td><strong>Client Mobile/Landline: </strong></td>
                        <td><?php echo $clientMobile."<strong>/</strong> ".$clientLandline;?></td>
                    </tr>
                    <tr>
                        <td><strong>Client: </strong></td>
                        <td><?php echo $clientFName." ".$clientLName;?></td>
                    </tr>
                    <tr>
                        <td><strong>Service Needed & Description: </strong></td>
                        <td><?php echo $showRows['service_note'];?></td>
                    </tr>
                    <tr>
                        <td><strong>Payment Method: </strong></td>
                        <td><?php echo $showRows['payment_method'];?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <row>
            <div class="col-md-12 buttons">
                <a href="#open-modal" class="btn purple block">View Reciept</a>
                <a href="./homepage.php" class="btn gray block">To Homepage</a>
                <div id="open-modal" class="modal-window">
                    <div class="modal-content">
                        <a href="#" title="Close" class="modal-close">Close</a>
                        <div class="modal-body">
                            <img src="./assets/img/ConnServ_Logo_Black.png"> 
                            <table>
                                <tr>
                                    <td><strong>Appointment Id:  </strong></td>
                                    <td colspan="3"><u><?php echo $showRows['appointment_custom'];?></u></td>
                                </tr>
                                <tr>
                                    <td><strong>Business Name:  </strong></td>
                                    <td colspan="3"><u><?php echo $showRows['business_name'];?></u></td>
                                </tr>
                                <tr>
                                    <td><strong>Service Contact:  </strong></td>
                                    <td colspan="3"><u><?php echo $showRows['business_contact'];?></u></td>
                                </tr>
                                <tr>
                                    <td><strong>Date:  </strong></td>
                                    <td colspan="3">
                                        <u>
                                        <?php echo $showRows['min_date']."<br>";?>
                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                        </svg><br>
                                        <?php echo $showRows['max_date'] ;?>
                                        </u>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Service Demand</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <td rowspan="5"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td></td>
                                </tr>
                            </table>
                            <p> Payment Method: <u><?php echo $showRows['payment_method'];?></u></p><br>
                            <p> Client: <u><?php echo $showRows['client_firstname']." ".$showRows['client_lastname'];?></u></p>
                            <p> Client Address: <u><?php echo $clientHouse.", ".$clientStreet.", ".$clientBarangay.", ".$clientCity;?></u></p>
                            <p> Contact Number: <u><?php echo $showRows['mobile'];?></u></p>
                        </div>
                    </div>
                </div>
            </div>
        </row>
    </div>
        <!-- FOOTER -->

    <footer class="footer-div">
        <div class="container-fluid row connserv-container">
            <div class="col-4">
              <img class="connserv-logo" src="./assets/img/ConnServ_Logo.png" alt="Connserv Image">
            </div>
            <div class="col-8 footer-links">
                <div class="row">
                    <div class="col-4">
                        <p>COMPANY</p>
                        <ul>
                            <li><a href="#">News</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <p>LEARN MORE</p>
                        <ul>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Developers</a></li>
                            <li><a href="#">Service Program</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Referral Program</a></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <p>CONNECT WITH US</p>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Google+</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <hr>
            <div>
                <p>Copyright @ 2019 All Rights Reserved. Connserv Philippines Corporation</p>
            </div>
        </div>
    </footer>
        <!--
            SCRIPT LINK FOR BOOTSTRAP AND DESIGNING
        -->
        <!-- JS SCRIPTS --> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </body>
</html>
