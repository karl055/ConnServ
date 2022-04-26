<?php

    require_once '../../../hostCon.php';

    if(isset($_POST['upload'])){

        $file = $_FILES['file'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize= $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpeg', 'jpg', 'png');
        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){

                if($fileSize < 500000000){
                    $fileNameNew = "profile". "." .$fileActualExt;
                    
                    $businessName = "KenParole";
                    
                    $fileDestination = '../../../assets/'.$fileNameNew;
                    
                    if(file_exists($fileDestination)){
                        /* unlink($fileDestination); */
                        header("Location: ../index.php?fileExists");
                    }
                    if(move_uploaded_file($fileTmpName, $fileDestination)){

                        $sql = "INSERT INTO file_tb (legalFileName) VALUES ('$fileNameNew')";
                        $result = mysqli_query($connect, $sql);
                        if($result){
                            header("Location: ../index.php");
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
    