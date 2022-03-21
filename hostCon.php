<?php
    $host = "localhost";
    $user = "root";
    $password = "karl055";
    $database = "connserv";

    $connect = new mysqli($host, $user, $password, $database);

    if($connect -> connect_error){
        echo $con -> connect_error;
    }
?>