<?php


if(isset($_POST['submit'])){

    if(isset($_POST['selected'])){
        $select = $_POST['selected'];
        header("Location: ./includes/information.inc.php?selected=$select");
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th scope="col" style="width: 5%;"></th>
                    <th scope="col">ID</th>
                    <th scope="col" style="width: 10%;">Title</th>
                    <th scope="col" style="width: 10%;">Name</th>
                    <th scope="col" style="width: 20%;">Address</th>
                    <th scope="col" style="width: 11%;">Contact</th>
                    <th scope="col" style="width: 16%;">Date</th>
                    <th scope="col" style="width: 8%;">Time</th>
                </tr>
            </thead>
            <tbody>
                    <form action="./index.php" method="post">
                <tr>
                        <td class="record" scope="row"><input type="checkbox" id="selectRow" name="selected" value="MWEWMEEW"></td>
                        <td class="record"><small>Karl Parole</small></td>
                        <td class="record"><small>Male</small></td>
                        <td class="record"><small>09676842595</small></td>
                        <td class="record"><small>7:00 pm</small></td>
                        <td class="record"><small>Quezon City</small></td>
                        <td class="record"><small>22 Years old</small></td>
                        <td class="record"><small><button type="submit" name="submit">Submit</button></small></td>
                </tr>
                
                <tr>
                        <td class="record" scope="row"><input type="checkbox" id="selectRow" name="selected" value="WEWE"></td>
                        <td class="record"><small>Karl Parole</small></td>
                        <td class="record"><small>Male</small></td>
                        <td class="record"><small>09676842595</small></td>
                        <td class="record"><small>7:00 pm</small></td>
                        <td class="record"><small>Quezon City</small></td>
                        <td class="record"><small>22 Years old</small></td>
                        <td class="record"><small><button type="submit" name="submit">Submit</button></small></td>
                </tr>
                </form>
            </tbody>
        </table>
    </body>
</html>