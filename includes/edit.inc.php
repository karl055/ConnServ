<?php
    include '../hostCon.php';
    session_start();
    
    
    if(!isset($_SESSION['username'])){
        header("Location: ./login.php");
        die();
    }
    else{
        
        if(isset($_POST['saveChanges'])){
            $user_id = $_SESSION['username'];
            $email = $_POST['edit_email'];
            $password = $_POST['edit_password'];
            $firstname = $_POST['edit_firstname'];
            $lastname = $_POST['edit_surname'];
            $phone = $_POST['edit_phonenumber'];
            $gender = $_POST['edit_gender'];
            $bdate = $_POST['edit_bdate'];
            $houseNum = $_POST['edit_house'];
            $street = $_POST['edit_street'];
            $brgy = $_POST['edit_brgy'];
            $city = $_POST['edit_city'];
            $district = $_POST['edit_district'];
            $zip = $_POST['edit_zip'];

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

                        $fileNameNew = "profile".$user_id."." .$fileActualExt;
                    
                        $fileDestination = '../assets/img/user_profile/'.$fileNameNew; 
                        
                        if(move_uploaded_file($fileTmpName, $fileDestination)){
                            

                            $sql = "UPDATE user_tb SET 
                            user_email = '$email',
                            userPwd = '$password',
                            user_firstname = '$firstname',
                            user_lastname = '$lastname',
                            user_contactnum ='$phone',
                            user_sex ='$gender',
                            user_birthdate = '$bdate',
                            user_housenum = '$houseNum',
                            user_street = '$street',
                            user_barangay = '$brgy',
                            user_city = '$city',
                            user_district = '$district',
                            user_zip = '$zip',
                            profileImg = '$fileNameNew'
                            WHERE user_identity = '$user_id'";
                            mysqli_query($connect, $sql);
                            
            
                            if($result = mysqli_query($connect, $sql)){

                                header("Location: ../user_profile.php?edit=success");
                            }
                            else{
                                echo mysqli_error($connect);
                            }
                        }
                        else{
                            echo mysqli_error($connect);
                        }
                    }
                    
                    else{
                        echo mysqli_error($connect);
                    }
                }
                
                else{
                    echo mysqli_error($connect);
                }
            }
            
            else{
                echo mysqli_error($connect);
            }
        }
        else{
            echo mysqli_error($connect);
        }
    }
    
?>