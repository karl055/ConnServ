<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/filter.css">
        <title>ConnServ</title>
    </head>
    <body>
        <?php include_once './includes/bootstrap_con.php';?>
        <?php include_once './navbar.php'; ?>

        <div class="col-12 search_container">

            <div class="col-12 search_top">
                <div class="col-12 search_title">
                    <h3>Services Near Me</h3>
                </div>
            </div>
            <div class="main_content" style="display: flex;">

                <div class="col-2 filter_tab">
                    
                    <div class="col-12 filter_check">
                        <p style="width: 100%; margin: 0;"><b>Filter By</b></p>
                        <div style="width: 100%;">
                            <input type="checkbox" id="business"><label for="business"> Business Name</label>
                        </div>
                        <div style="width: 100%;">
                            <input type="checkbox" id="verified"><label for="verified"> Verified Services</label>
                        </div>
                        <div style="width: 100%;">
                            <input type="checkbox" id="newservice"><label for="newservice"> New Services</label>
                        </div>
                    </div><div class="col-12 filter_check">
                        <p style="width: 100%; margin: 0;"><b>Sort By</b></p>
                        <div style="width: 100%;">
                            <input type="checkbox" id="alphabetical"><label for="alphabetical"> Alphabetical</label>
                        </div>
                        <div style="width: 100%;">
                            <input type="checkbox" id="mostrated"><label for="mostrated"> Most Rated</label>
                        </div>
                    </div>
                </div>
                <div class="col-7 search_tab" style="padding: 0;">
                    
                    <div class="col-12" style="padding: 0;">
                        <div class="col-12 card_drawer">
                            <div class="card">
                                <h5 class="card-header">Bonheur Apparel</h5>
                                <div class="card-body" style="display: flex;">
                                    <div class="col-8">
                                        <h5 class="card-title text-muted">Clothing Service</h5>
                                        <p class="card-text" style="font-size: 14px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                            </svg> 14 Pres., Quezon St., South Signal Village, District 2, Taguig City</p>
                                        <a href="#" class="btn stretched-link">Go Visit!</a>
                                    </div>
                                    <div class="col-4">
                                        <img src="./assets/img/featured_services/bonheur_apparel/logo.jpg" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 card_drawer">
                            <div class="card">
                                <h5 class="card-header">CR38 Computer Solutions</h5>
                                <div class="card-body" style="display: flex;">
                                    <div class="col-8">
                                        <h5 class="card-title text-muted">Computer Hardware Solutions</h5>
                                        <p class="card-text" style="font-size: 14px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                            </svg> 71 Pres., Quezon St., South Signal Village, District 2, Taguig City</p>
                                        <a href="#" class="btn stretched-link">Go Visit!</a>
                                    </div>
                                    <div class="col-4">
                                        <img src="./assets/img/featured_services//cr38_solutions/logo.png" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 card_drawer">
                            <div class="card">
                                <h5 class="card-header">Annabelle's Foods and Services</h5>
                                <div class="card-body" style="display: flex;">
                                    <div class="col-8">
                                        <h5 class="card-title">Clothing Service</h5>
                                        <p class="card-text" style="font-size: 14px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                            </svg> 14 Pres., Quezon St., South Signal Village, District 2, Taguig City</p>
                                        <a href="#" class="btn stretched-link">Go Visit!</a>
                                    </div>
                                    <div class="col-4">
                                        <img src="./assets/img/featured_services/bonheur_apparel/logo.jpg" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 nearme_tab">
                    <div class="card">
                        <div class="card-body">
                            <a href="#" class="card-text">Find Services Near me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>