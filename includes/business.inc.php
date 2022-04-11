<?php
$businessOwner = $_SESSION['username'];
$businessSql = "SELECT * FROM business_tb WHERE ownerId = $businessOwner";

if($businessresult = mysqli_query($connect, $businessSql)){
    if($row = mysqli_fetch_assoc($businessresult)){
        echo $row['business_name'];
    }
}