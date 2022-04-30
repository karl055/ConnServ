<?php 
$host = "localhost";
$user = "root";
$password = "karl055";
$database = "connserv";

$connect = new mysqli($host, $user, $password, $database);

if($connect -> connect_error){
    echo $con -> connect_error;
}


    if($_GET['cancel']){
        $id = $_GET['cancel'];
        $approved = 'approved';
        $approvalSql = "UPDATE business_tb SET business_approval = '$approved' WHERE business_id = '$id' ";
        if($approvalResult = mysqli_query($connect, $approvalSql)){
            header("Location: ../business_approval.php");
            die();
        }
    }