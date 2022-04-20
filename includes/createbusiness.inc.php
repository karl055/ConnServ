<?php
    include '../hostCon.php';
    session_start();


    if(isset($_SESSION['username'])){
        if(isset($_POST['createBtn'])){

            $userId = $_SESSION['username'];
            $business_name = mysqli_real_escape_string($connect, $_POST['business_name']);
            $business_email = mysqli_real_escape_string($connect, $_POST['business_email']);
            $business_category = mysqli_real_escape_string($connect, $_POST['inputservice']);
            $business_subcategory = mysqli_real_escape_string($connect, $_POST['inputSubService']);
            $business_unit_no = mysqli_real_escape_string($connect, $_POST['business_unit_no']);
            $business_building = mysqli_real_escape_string($connect, $_POST['business_building']);
            $business_house_no = mysqli_real_escape_string($connect, $_POST['business_house_no']);
            $business_street = mysqli_real_escape_string($connect, $_POST['business_street']);
            $business_village = mysqli_real_escape_string($connect, $_POST['business_village']);
            $business_barangay = mysqli_real_escape_string($connect, $_POST['business_barangay']);
            $business_zip = mysqli_real_escape_string($connect, $_POST['business_zip']);
            $business_city = mysqli_real_escape_string($connect, $_POST['business_city']);
            $business_landline = mysqli_real_escape_string($connect, $_POST['business_landline']);
            $business_mobile = mysqli_real_escape_string($connect, $_POST['business_mobile']);
            $business_details = mysqli_real_escape_string($connect, $_POST['business_details']);
            $business_logo = mysqli_real_escape_string($connect, $_POST['change_icon']);
            $business_location = mysqli_real_escape_string($connect, $_POST['business_location']);
            $business_cost = mysqli_real_escape_string($connect, $_POST['price']);

            $business_category_explode = explode("_", $business_category);
            
            if(count($business_category_explode)>2){
                $business_fixed = implode(" ", $business_category_explode);
            }
            else if(count($business_category_explode)<=2){
                $business_fixed = implode(" ", $business_category_explode);
            }

            /* CHANGE ICON UPLOAD */

            $iconFiles = $_FILES['change_icon'];

            $iconFileName = $iconFiles['name'];
            $iconFileTmpName = $iconFiles['tmp_name'];
            $iconFileSize= $iconFiles['size'];
            $iconFileError = $iconFiles['error'];
            $iconFileType = $iconFiles['type'];

    
            /* LEGAL FILES UPLOAD */

            $legalFiles = $_FILES['legalFiles'];

            $legalFileName = $legalFiles['name'];
            $legalFileTmpName = $legalFiles['tmp_name'];
            $legalFileSize= $legalFiles['size'];
            $legalFileError = $legalFiles['error'];
            $legalFileType = $legalFiles['type'];

    
            /* LEGAL ID UPLOAD */


            $idFiles = $_FILES['idFiles'];

            $idFileName = $idFiles['name'];
            $idFileTmpName = $idFiles['tmp_name'];
            $idFileSize= $idFiles['size'];
            $idFileError = $idFiles['error'];
            $idFileType = $idFiles['type'];

    
            $idFileExt = explode('.', $idFileName);
            $idFileActualExt = strtolower(end($idFileExt));
            
            $legalFileExt = explode('.', $legalFileName);
            $legalFileActualExt = strtolower(end($legalFileExt));
            
            $iconFileExt = explode('.', $iconFileName);
            $iconFileActualExt = strtolower(end($iconFileExt));

            $allowed = array('pdf');
            $imgAllowed = array('jpeg', 'png', 'jpg');

            if(in_array($legalFileActualExt, $allowed) && in_array($idFileActualExt, $allowed) && in_array($iconFileActualExt, $imgAllowed)){

                if($legalFileError === 0 && $idFileError === 0 && $iconFileError === 0){
        
                    if($legalFileSize < 500000000 && $idFileSize < 500000000 && $iconFileSize < 500000000){

                        $legalFileNameNew = uniqid('', true). "." .$legalFileActualExt;
                        $idFileNameNew = uniqid('', true). "." .$idFileActualExt;
                        $iconFileNameNew = uniqid('', true).$userId."." .$iconFileActualExt;

                        $legalFileDestination = '../assets/legalidDocuments/'.$legalFileNameNew;
                        $idFileDestination = '../assets/legalidDocuments/'.$idFileNameNew;
                        $iconFileDestination = '../assets/img/featured_services/business_icon/'.$iconFileNameNew;

                        if(move_uploaded_file($legalFileTmpName, $legalFileDestination) && move_uploaded_file($idFileTmpName, $idFileDestination) && move_uploaded_file($iconFileTmpName, $iconFileDestination)){
        

                            if(empty($business_cost) || empty($business_name) || empty($business_email) || empty($business_category) || empty($business_subcategory)
                            || empty($business_house_no) || empty($business_street) || empty($business_barangay) || empty($business_zip) || empty($business_city)
                            || empty($business_mobile) || empty($business_details) || empty($business_location)){

                                header("Location: ../create_business.php?error=blankinputs");
                                exit();
                            }
                            $sqlEmail = "SELECT * FROM business_tb WHERE business_name = '$business_email'";

                            $emailResult = mysqli_query($connect, $sqlEmail);
                            
                            if(!mysqli_num_rows($emailResult) == 0){
                                header("Location: ../create_business.php?error=BusinessNameAlreadyExist");
                                exit();
                            }

                            $sql = "INSERT INTO business_tb 
                            SET price = '$business_cost',business_name = '$business_name', business_email = '$business_email', business_category = '$business_fixed', business_subcategory = '$business_subcategory', unit_no = '$business_unit_no',
                                business_building ='$business_building', house_no = '$business_house_no', business_street = '$business_street', business_village = '$business_village', business_barangay = '$business_barangay', business_zip = '$business_zip',
                                business_city ='$business_city', business_landline = '$business_landline', business_mobile = '$business_mobile', business_description = '$business_details',
                                legalFileName = '$legalFileNameNew', idFileName = '$idFileNameNew', business_icon = '$iconFileNameNew', business_map = '$business_location',
                                ownerId = (
                                SELECT user_identity
                                FROM user_tb
                                WHERE user_identity = $userId)";
                                
                            mysqli_query($connect, $sql) or die(mysqli_error($connect));
                            
                            /* , '$business_email', '$business_category', '$business_subcategory', '$business_unit_no', '$business_building', '$business_house_no', '$business_street', '$business_village', '$business_barangay', '$business_zip', '$business_city', '$business_landline', '$business_mobile', '$business_details' */
                            /* , business_email, business_category, business_subcategory, unit_no, business_building, house_no, business_street, business_village, business_barangay, business_zip, business_city, business_landline, business_mobile, business_details */
                            header("Location: ../user_profile.php");
                        }
        
                    }
                    else{ 
                        header("Location: ../create_business.php?error=largeFile");
                        exit();
                    }
                }
                else{  
                    header("Location: ../create_business.php?error=errorupload");
                    exit();
                }
            }
            else{
                header("Location: ../create_business.php?error=invalidFile");
                exit();
            }


            
        }
    }
    