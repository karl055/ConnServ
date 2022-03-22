<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./assets/img/tab_icon.png">
        <title>Document</title>

        <?php include './includes/bootstrap_con.php';?>

        <link rel="stylesheet" href="./includes/mobiPlugins/mobiscroll.javascript.min.css">
        <script src="./includes/mobiPlugins/mobiscroll.javascript.min.js"></script>

        <link href="./css/calendar.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container-fluid row">
            <div class="col-5">
                <div class="mbsc-grid">
                        <div class="mbsc-row">
                            <div class="col-12">
                                <div class="mbsc-txt-muted md-mobile-picker-header">Select Preferred Date</div>
                                <input id="demo-mobile-picker-input" class="md-mobile-picker-input" placeholder="Please Select..." />
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-7">
                <label for="inputService">Type of Service</label>
                <select id="inputService" class="form-control"  name="inputservice" required>
                    <option value="Catering" selected>Catering</option>
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
        
        <div class="md-mobile-picker-inline">
            <div id="demo-mobile-picker-inline"></div>
        </div>

        <!-- SCRIPT LINK -->
        <script src="./js/calendar/calendar.js"></script>
    </body>
</html>