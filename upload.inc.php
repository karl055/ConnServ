<?php

require_once './hostCon.php';

if(isset($_POST['upload'])){
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize= $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){

            if($fileSize < 500000){
                $fileNameNew = uniqid('', true). "." .$fileActualExt;
                
                $businessName = "KenParole";
                
                $fileDestination = 'assets/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                if(move_uploaded_file($fileTmpName, $fileDestination)){

                    $sql = "INSERT INTO file_tb (legalFileName) VALUES ('$fileNameNew')";
                    $result = mysqli_query($connect, $sql);
                    if($result){
                        header("Location: ./upload.php");
                    }
                }
            }else{  
                echo "Your file is too big!";
            }
        }else{  
            echo "There was an error uploading your file!";
        }
    }else{
        echo "You cannot upload this file!!";
    }
}