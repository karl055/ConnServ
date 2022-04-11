<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .user_icon{
                height: 300px;
            }
            .user_icon .profile_picture{
                height: 100px;
                width: 100px;
                border: 1px solid black;
                overflow: hidden;
            }
            .user_icon .profile_picture img{
                height: 100%;
            }
        </style>
    </head>
    <body>
        
<!--         <form action="./include/upload.inc.php" method="POST" enctype="multipart/form-data">
            <div class="user_icon">
                <div class="profile_picture">
                    <img src="../../assets/profile.jpg" alt="User Icon" id="photo">
                </div>
                <label id="uploadBtn" for="file">Click to change</label>
                <input type="file" id="file" name="file">

                <button type="submit" name="upload">Upload</button>
            </div>
        </form> -->

        <?php
        
        require_once '../../hostCon.php';
        $imageSelect = 'SELECT * FROM user_tb WHERE user_identity = 1020';
        
        if($imgResult = mysqli_query($connect, $imageSelect)){
            if($imgRow = mysqli_fetch_assoc($imgResult)){
                
                echo $imgRow['user_firstname'];
            }
            
        }
        

        ?>
        
        <script src="../../js/userProfile/profile_image.js"></script>
    </body>
</html>