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

        <div class="mbsc-grid">
            <div class="mbsc-form-group">
                <div class="mbsc-row">
                    <div class="mbsc-col-12">
                        <div class="mbsc-txt-muted md-mobile-picker-header">Use the picker with any inputs & show on focus/click</div>
                        <input id="demo-mobile-picker-input" class="md-mobile-picker-input" placeholder="Please Select..." />
                    </div>
                </div>
            </div>
        </div>
        
        <div class="md-mobile-picker-inline">
            <div id="demo-mobile-picker-inline"></div>
        </div>

        <!-- SCRIPT LINK -->
        <script src="./js/calendar/calendar.js"></script>
    </body>
</html>