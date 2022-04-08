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
            <p class="lead"> Booking ID: <mark>BONA01-CSID-0A0A02</mark></p>
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
                        <td>Dressmaking</td>
                    </tr>
                    <tr>
                        <td><strong>Service Provider: </strong></td>
                        <td>Bonheur Apparel</td>
                    </tr>
                    <tr>
                        <td><strong>Date: </strong></td>
                        <td>April 29, 2022</td>
                    </tr>
                    <tr>
                        <td><strong>Time: </strong></td>
                        <td>3:00pm</td>
                    </tr>					
                    <tr>
                        <td><strong>Address: </strong></td>
                        <td>Brookside Subd. Cainta, Rizal</td>
                    </tr>
                    <tr>
                        <td><strong>Contact Number: </strong></td>
                        <td>09101926395</td>
                    </tr>
                    <tr>
                        <td><strong>Client: </strong></td>
                        <td>James Darren Alcalacal</td>
                    </tr>
                    <tr>
                        <td><strong>Notes: </strong></td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td><strong>Payment Method: </strong></td>
                        <td>Cash on Service</td>
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
                                    <td><strong>Business Name:  </strong></td>
                                    <td><u>Bonheur Apparel</u></td>
                                </tr>
                                <tr>
                                    <td><strong>Date:  </strong></td>
                                    <td><u>April 29, 2022</u></td>
                                </tr>
                                <tr>
                                    <td><strong>Contact Number:  </strong></td>
                                    <td><u>09101926395</u></td>
                                </tr>
                                <tr>
                                    <th>Service Demand</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <th>Total:</th>
                                    <td></td>
                                </tr>
                            </table>
                            <p> Payment Method: <u>Cash on Service</u></p><br>
                            <p> Client: <u>James Dareen Alcalacal</u></p>
                            <p> Address: <u>15 Pres. Aguinaldo St. South Signal, Taguig City</u></p>
                            <p> Contact Number: <u>09101926395</u></p>
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
