<!-- 
    Connection in Service (ConnServ): A Service Finder app made for Various accesible service within Taguig City
    Programming Languages: HTML5, PHP, Bootstrap, CSS3, JS, MySql
    Developers:
        Cabigting, Bryan - Project Manager/Front-end Developer 
        Parole, Karl - Full-stack Developer
 -->


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