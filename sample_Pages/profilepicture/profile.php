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
        <div class="business_logo">
            <img src="./assets/img/ConnServ_Logo_Black.png" id="photo" alt="..." class="img-thumbnail">
        </div>
                                                
        <div class="profile_picture">
            <label for="file">Click here to insert an Image  <span data-toggle="tooltip" title="Must Fill Up!" class="tool_tip">*</span></label>
            <input type="file" id="file" name="change_icon" style="display: none;">
        </div>

        <script>
            
        /* Change Profile Picture Function  */
            const imgDiv = document.querySelector('.profile_picture');
            const image = document.querySelector('#photo');
            const file = document.querySelector('#file');
            const uploadBtn = document.querySelector('#uploadBtn');

            file.addEventListener('change', function(){
                const photoChose = this.files[0];

                if(photoChose){
                    const reader = new FileReader();

                    reader.addEventListener('load', function(){
                        image.setAttribute('src', reader.result);
                    });

                    reader.readAsDataURL(photoChose);
                }
            }); 




        </script>
    </body>
</html>