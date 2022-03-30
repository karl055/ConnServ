<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <?php include_once './includes/bootstrap_con.php';?>

        <link rel="stylesheet" href="./css/business.css">
        <title>Document</title>
    </head>
    <body style="height: 100vh;">
        <?php include_once './navbar.php';?>
        <section class="container-fluid" style="margin: 2rem 0 2rem; height: 100%;">
        <div class="row">
            <div class="col-2 accordion" id="accordionExample">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link business"  data-toggle="collapse" data-target="#collapseBusiness" aria-expanded="true" aria-controls="collapseBusiness">Profile</a>
                    
                    <div id="collapseBusiness" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="nav flex-column nav-pills businessLinks" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" id="v-pills-business-tab" data-toggle="pill" href="#v-pills-business" role="tab" aria-controls="v-pills-business" aria-selected="false">Business</a>
                            <a class="nav-link" id="v-pills-edit-tab" data-toggle="pill" href="#v-pills-edit" role="tab" aria-controls="v-pills-edit" aria-selected="false">Edit</a>
                            <a class="nav-link" id="v-pills-revenue-tab" data-toggle="pill" href="#v-pills-revenue" role="tab" aria-controls="v-pills-revenue" aria-selected="false">Revenue</a>
                            <a class="nav-link" id="v-pills-other-tab" data-toggle="pill" href="#v-pills-other" role="tab" aria-controls="v-pills-other" aria-selected="false">Others</a>
                        </div>
                    </div>
                    <a class="nav-link appointment"  data-toggle="collapse" data-target="#collapseAppointment" aria-expanded="true" aria-controls="collapseAppointment">Profile</a>
                    
                    <div id="collapseAppointment" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" id="v-pills-appointments-tab" data-toggle="pill" href="#v-pills-appointments" role="tab" aria-controls="v-pills-profile" aria-selected="false">Appointments</a>
                        </div>
                    </div>
                    <!-- <a class="nav-link" id="v-pills-appointments-tab" data-toggle="pill" href="#v-pills-appointments" role="tab" aria-controls="v-pills-profile" aria-selected="false">Appointments</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> -->
                </div>
            </div>
            <div class="col-10">
                <div class="tab-content" id="v-pills-tabContent">
                        <!-- Business Profile TAB -->
                    <div class="tab-pane fade show business_content" id="v-pills-business" role="tabpanel" aria-labelledby="v-pills-business-tab">
                        <div class="col-12">
                            <div class="col-12 row title_business">
                                <div class="col-3">
                                    <div class="user_icon">
                                        <div class="profile_picture">
                                            <img src="./assets/img/categories/computer.png" alt="User Icon" id="photo">
                                        </div>
                                        <input type="file" id="file" name="file">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="title_container">
                                        <h2>This is the business Title</h2>
                                        <h6>This is sub title</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 row">
                                <div class="col-3 address_bar">
                                    <table>
                                        <tr>
                                            <th>Owner</th>
                                        </tr>
                                        <tr>
                                            <th><input type="text"></th>
                                        </tr>
                                        <tr>
                                            <th>Owner</th>
                                        </tr>
                                        <tr>
                                            <th><input type="text"></th>
                                        </tr>
                                        <tr>
                                            <th>Owner</th>
                                        </tr>
                                        <tr>
                                            <th><input type="text"></th>
                                        </tr>
                                        <tr>
                                            <th>Owner</th>
                                        </tr>
                                        <tr>
                                            <th><input type="text"></th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-9">
                                    <div class="main_content">
                                        <div class="col-12">
                                            <select class="form-control">
                                                <option value="" selected disabled hidden>Choose Category</option>
                                                <option value="ArtandCulture">Art and Culture</option>
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
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <!-- EDIT TAB -->
                    <div class="tab-pane fade edit_content" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
                        <div class="col-12">
                            <p>THIS IS EDIT CONTENT</p>
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
                    <div class="tab-pane fade appointments_content" id="v-pills-appointments" role="tabpanel" aria-labelledby="v-pills-appointments-tab">
                        <h1>This is appointments page</h1>
                    </div>
                        <!-- Messages TAB -->
                    <div class="tab-pane fade messages_content" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h1>This is messages page</h1>
                    </div>
                        <!-- SETTINGS TAB -->
                    <div class="tab-pane fade settings_content" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h1>This is setting page</h1>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    </body>
</html>