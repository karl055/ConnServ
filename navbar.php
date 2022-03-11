<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include './includes/bootstrap_con.php';?>

        <link rel="stylesheet" href="./css/homepage.css">
        <title>ConnServ</title>
    </head>
    <body>
    <nav>
        <div class="container-fluid">
            <div class="logo">
                <img class="logo-img" src="./assets/img/ConnServ_Logo.png" alt="connserv-logo">
            </div>
            <div class="search-div">
                <input class="servicetxt" type="text" placeholder="Service, Business">
                <input class="locationtxt" type="text" placeholder="Location">
                <button class="searchbtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </div>
            <ul class="nav-links">
                <li><a href="./login.php">Account</a></li>
            </ul>
        </div>
        </nav>
    </body>
</html>