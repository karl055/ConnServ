<?php
    $host = "localhost";
    $user = "root";
    $password = "1234";
    $database = "connsev";

    $connect = new mysqli($host, $user, $password, $database);

    if($connect -> connect_error){
        echo $con -> connect_error;
    }
?>