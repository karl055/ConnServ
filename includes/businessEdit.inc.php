<?php

    include '../hostCon.php';
    session_start();

    $username = $_SESSION['username'];

    $businessName = $_POST['business_name'];
    $businessEmail = $_POST['business_email'];

    /* Address */
    $businessUnit = $_POST['business_unit_no'];
    $businessBuilding = $_POST['business_building'];
    $businessHouse = $_POST['business_house_no'];
    $businessStreet = $_POST['business_street'];
    $businessVillage = $_POST['business_village'];
    $businessBarangay = $_POST['inputBarangay'];
    $businessZip = $_POST['business_zip'];
    $businessCity = $_POST['business_city'];
    $businessMap = $_POST['business_location'];

    /* Contacts */
    $businessLandline = $_POST['business_landline'];
    $businessMobile = $_POST['business_mobile'];

    /* Services */
    $businessService = $_POST['inputservice'];
    $businessSubservice = $_POST['inputSubService'];
    $businessDescription = $_POST['business_details'];
    
    /* Image, Map, Documents */
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

    if(isset($_POST['createBtn'])){

        if(empty($businessName) || empty($businessEmail) || empty($businessUnit) || empty($businessBuilding)
        || empty($businessHouse) || empty($businessStreet) || empty($businessVillage) || empty($businessBarangay)
        || empty($businessZip) || empty($businessCity) || empty($businessLandline) || empty($businessMobile)
        || empty($businessService) || empty($businessSubservice) || empty($businessDescription) || empty($businessImage)
        || empty($businessMap) || empty($businessLegalDoc) || empty($businessLegalID)){
            echo "ERROR";
        }
        if(in_array($legalFileActualExt, $allowed) && in_array($idFileActualExt, $allowed) && in_array($iconFileActualExt, $imgAllowed)){
            header("Location: ../business.php?error=blankinputs");

            if($legalFileError === 0 && $idFileError === 0 && $iconFileError === 0){

                if($legalFileSize < 500000000 && $idFileSize < 500000000 && $iconFileSize < 500000000){
                    
                    $legalFileNameNew = uniqid('', true). "." .$legalFileActualExt;
                    $idFileNameNew = uniqid('', true). "." .$idFileActualExt;
                    $iconFileNameNew = uniqid('', true).$username."." .$iconFileActualExt;

                    $legalFileDestination = '../assets/legalidDocuments/'.$legalFileNameNew;
                    $idFileDestination = '../assets/legalidDocuments/'.$idFileNameNew;
                    $iconFileDestination = '../assets/img/featured_services/business_icon/'.$iconFileNameNew;

                    
                    if(move_uploaded_file($legalFileTmpName, $legalFileDestination) && move_uploaded_file($idFileTmpName, $idFileDestination) && move_uploaded_file($iconFileTmpName, $iconFileDestination)){

                        $sqlEmail = "SELECT * FROM business_tb WHERE business_name = '$business_email'";

                        $emailResult = mysqli_query($connect, $sqlEmail);
                        
                        if(!mysqli_num_rows($emailResult) == 0){
                            header("Location: ../business.php?error=BusinessNameAlreadyExist");
                            exit();
                        }

                        $sql = "UPDATE business_tb 
                                SET business_name = '$businessName', business_email = '$businessEmail', business_category = '$businessService', business_subcategory = '$businessSubservice', unit_no = '$businessUnit',
                                    business_building ='$businessBuilding', house_no = '$businessHouse', business_street = '$businessStreet', business_village = '$businessVillage', business_barangay = '$businessBarangay', business_zip = '$businessZip',
                                    business_city ='$businessCity', business_landline = '$businessLandline', business_mobile = '$businessMobile', business_description = '$businessDescription',
                                    legalFileName = '$legalFileNameNew', idFileName = '$idFileNameNew', business_icon = '$iconFileNameNew', business_map = '$businessMap'
                                    WHERE ownerId = '$username'";
                                    
                        mysqli_query($connect, $sql) or die(mysqli_error($connect));
                        header("Location: ../business.php");
                    }
                    
                }
            }
        }
    }