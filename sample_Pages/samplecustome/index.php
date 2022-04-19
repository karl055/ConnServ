<?php

require_once '../../hostCon.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .tableDivide{
                height: 200px;

                border: 1px solid black;
                overflow: scroll;
            }
            .table_body thead{
                position: sticky;
                top: 0;
                background-color: white;
            }
        </style>
    </head>
    <body>
        <div class="tableDivide">
            <!-- <table class="table_head" border="1">
                
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
            </table> -->
            <table class="table_body" border="1">
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
                    
                    <tr>
                    <?php

                    $notApprovedSql = "SELECT * FROM appointment_tb WHERE business_id = '23' AND approval = 'waiting'";

                    if($notApprovedResult = mysqli_query($connect, $notApprovedSql)){
                        
                        if(mysqli_fetch_assoc($notApprovedResult)){
                            foreach($notApprovedResult as $notApprovedRows){

                                echo '<tr>';
                                    echo '<td class="record"><small><a href="./includes/businessinc/businessSearch.inc.php?cancel='.$notApprovedRows['appointment_custom'].'" class="selection">&times;</a> <a href="./includes/businessinc/businessSearch.inc.php?approve='.$notApprovedRows['appointment_custom'].'" class="selection">&#10003;</a></td>';
                                    echo '<td class="record"><small title="'.$notApprovedRows['appointment_custom'].'">'.$notApprovedRows['appointment_custom'].'</td>';
                                    echo '<td class="record"><small title="'.$notApprovedRows['appointment_title'].'">'.$notApprovedRows['appointment_title'].'</td>';
                                    echo '<td class="record"><small title="'.$notApprovedRows['client_lastname']. ", ".$notApprovedRows['client_firstname'].'">'.$notApprovedRows['client_lastname']. ", ".$notApprovedRows['client_firstname'].'</td>';
                                    echo '<td class="record" title="'.$notApprovedRows['houseNum'].', '.$notApprovedRows['street'].', '.$notApprovedRows['barangay'].', '.$notApprovedRows['city'].'"><small>'.$notApprovedRows['houseNum'].', '.$notApprovedRows['street'].', '.$notApprovedRows['barangay'].', '.$notApprovedRows['city'].'</td>';
                                    echo '<td class="record"><small title="'.$notApprovedRows['mobile'].'">'.$notApprovedRows['mobile'].'</td>';
                                    echo '<td class="record"><small title="'.$notApprovedRows['min_date'].' <strong>/</strong> '.$notApprovedRows['max_date'].'">'.$notApprovedRows['min_date'].' <strong>/</strong> '.$notApprovedRows['max_date'].'</td>';
                                    echo '<td class="record"><small>7:00 pm</td>';
                                echo '</tr>';
                            }
                            
                        }
                        else{
                            echo "<td colspan='8' class='text-center'><h3><strong>There is no data</strong></h3></td";
                        }
                        
                    }
                    ?>
                    </tr>
                </tbody>
            </table>
        
        </div>
    </body>
</html>