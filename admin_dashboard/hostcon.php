<?php 
$host = "localhost";
$user = "bryan";
$password = "bryan121999";
$database = "connserv";

$connect = new mysqli($host, $user, $password, $database);

if($connect -> connect_error){
    echo $con -> connect_error;
}
?>