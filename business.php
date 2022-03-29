<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <?php include_once './includes/bootstrap_con.php';?>

        <link rel="stylesheet" href="./css/business.css" type="text/css">
        <title>Document</title>
    </head>
    <body>
        <?php include_once './navbar.php';?>
        <section class="container-fluid" style="margin: 2rem 0 2rem; height: 100%;">
        <div class="row">
            <div class="col-2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-business-tab" data-toggle="pill" href="#v-pills-business" role="tab" aria-controls="v-pills-home" aria-selected="true">Business</a>
                <a class="nav-link" id="v-pills-appointments-tab" data-toggle="pill" href="#v-pills-appointments" role="tab" aria-controls="v-pills-profile" aria-selected="false">Appointments</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                </div>
            </div>
            <div class="col-10">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active business_content" id="v-pills-business" role="tabpanel" aria-labelledby="v-pills-business-tab">
                        
                        <div class="col-12">
                            <div class="col-3">
                                <div class="user_icon">
                                    <div class="profile_picture">
                                        <img src="./assets/img/categories/computer.png" alt="User Icon" id="photo">
                                        <label id="uploadBtn" for="file">Click to change</label>
                                        <input type="file" id="file" name="file">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade appointments_content" id="v-pills-appointments" role="tabpanel" aria-labelledby="v-pills-appointments-tab">
                        <h1>This is appointments page</h1>
                    </div>
                    <div class="tab-pane fade messages_content" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h1>This is messages page</h1>
                    </div>
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