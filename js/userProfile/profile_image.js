
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



