<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .iconDiv{
                justify-content: center;
                align-self: center;
            }
            img {
                border: 3px solid #fff;
                box-shadow: 0px 4px 4px 5px #888;
                border-radius: 50%;
            }
        </style>
    </head>
    <body>
        <form action="./profile.php" method="post">
            <input type="text" name="category">
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php
        if(isset($_POST['submit'])){

            $business_category = $_POST['category'];
            $business_category_explode = explode("_", $business_category);
            
            if(count($business_category_explode)>2){
                echo implode(" ", $business_category_explode);
            }
            else if(count($business_category_explode)<=2){
                echo implode(" ", $business_category_explode);
            }
            /* foreach($business_category_explode as $business_category_fixed){
                $business_main_category = $business_category_fixed." ";

                echo $business_main_category;
            }
            echo $business_main_category; */
            
            /* if($business_category_explode == 2){
    
                $business_category_fix = $content['0']." ".$content['1']." ".$content['2'];
                echo $business_category_fix;
            }
            else if(count(explode("_", $business_category)) == 1){
                $business_category_fix = $business_category_explode['0']." ".$business_category_explode['1'];
            }else{
                echo 'error';
            } */
        }
        
        ?>
    </body>
</html>