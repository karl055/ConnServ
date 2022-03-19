<?php
    include '../hostCon.php';

    $email = $_POST['email'];
    $name = $_POST['fullname'];
    $houseNum = $_POST['houseNum'];
    $street = $_POST['houseSt'];
    $brgy = $_POST['brgy'];
    $city = $_POST['city'];

    $sql = "UPDATE client SET c_name = '$name',
    c_add_house_no = '$houseNum',
    c_add_street = '$street',
    c_add_brgy = '$brgy',
    c_add_city ='$city'
    WHERE c_email = '$email'";
    mysqli_query($connect, $sql);

    header("Location: ../edit.php?edit=success");
?>