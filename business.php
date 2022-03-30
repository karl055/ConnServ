<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <?php include_once './includes/bootstrap_con.php';?>

        <link rel="stylesheet" href="./css/stylingBusiness.css">
        <title>Document</title>
    </head>
    <body style="height: 1000px;">
        <?php include_once './navbar.php';?>
        <section class="container-fluid" style="margin: 2rem 0 2rem; height: 100%;">
        <div class="row">
            <div class="col-2 accordion" id="accordionExample">
                <div>
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
                    
                </div>
            </div>
            <div class="col-9 body_content">
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
                                        <h4 class="text-muted">This is sub title</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 tab_contents">
                                <div class="col-12 address_bar">
                                    <table class="basic_contact">
                                        <tr>
                                            <th>Owner</th>
                                            <th>Business Email</th>
                                            <th>Contact #</th>
                                        </tr>
                                        <tr>
                                            <td>Owner's Name</td>
                                            <td>..@yahoo/gmail.com</td>
                                            <td>09676842595</td>
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
                                            <td>71-e</td>
                                            <td>Mapagkawanggawa</td>
                                            <td>Escopa 3</td>
                                            <td>District 3</td>
                                            <td>Quezon City</td>
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
                                                <h6 class="text-mute">Sample Service</h6>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                                <h6 class="text-mute">Sample Sub Service</h6>
                                            </div>
                                        </div>
                                        <div class="col-12 description_bar">
                                            <h6>Description</h6><hr>
                                            <div class="description_content">
                                                <p>In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since. 'Whenever you feel like criticizing anyone,' he told me, 'just remember that all the people in this world haven't had the advantages that you've had.'In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since. 'Whenever you feel like criticizing anyone,' he told me, 'just remember that all the people in this world haven't had the advantages that you've had.'In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since. 'Whenever you feel like criticizing anyone,' he told me, 'just remember that all the people in this world haven't had the advantages that you've had.'In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since. 'Whenever you feel like criticizing anyone,' he told me, 'just remember that all the people in this world haven't had the advantages that you've had.'</p>
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
                    <div class="tab-pane fade incoming_content" id="v-pills-incoming" role="tabpanel" aria-labelledby="v-pills-incoming-tab">
                        <h1>This is Incoming page</h1>
                    </div>
                        <!-- Messages TAB -->
                    <div class="tab-pane fade approval_content" id="v-pills-approval" role="tabpanel" aria-labelledby="v-pills-approval-tab">
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