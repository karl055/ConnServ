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

            echo $_POST['category'];

            $newdate = date("Y-m-d h:i:s");
            echo $newdate;

        }
        
        ?>
    </body>
</html>