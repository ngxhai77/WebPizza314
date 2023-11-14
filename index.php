<!DOCTYPE html>
<html lang="en">
<head>
   <title>3.14ZZA</title>
   <link rel="stylesheet" href="./asset/font/fontawesome-free-6.0.0-web/css/all.min.css">
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <script src="http://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
   

   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="wrapper">

<!---------------------Slider-------------------->

<!--------------------bat dau trang sp-------------------------> 

<!----------------------------bat dau footer---------------------------->

<?php 
session_start();
include('admincp/config/config.php');
include('pages/header.php');
include('pages/slider.php');
include ('pages/main.php');
include('pages/footer.php');

?>





</div>
<!-------end trang----------------->




</body>
<script>
    // const header = document.querySelector("header")
    // window.addEventListener("scroll",function(){
    //     x = window.pageYOffset
    //     if(x>0){
    //         header.classList.add("sticky")
    //     }
    //     else
    //     {
    //         header.remove.add("sticky")
    //     }
    // })
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector('.aspect-ratio-169')
    const dotItem = document.querySelectorAll(".dot")
    let imgNumber = imgPosition.length 
    let index = 0
    //console.log(imgPosition)
    imgPosition.forEach(function(image,index){
        image.style.left =index*100 + "%"  
        dotItem[index].addEventListener("click",function(){
            slider(index)
        })  
    })
    function imgSlide (){
        index++;
        if (index >= imgNumber){index=0}
        slider(index)
    }
    function slider(index){ 
        imgContainer.style.left = "-" +index*100+ "%"
        const dotActive = document.querySelector('.active')
        dotActive.classList.remove("active")
        dotItem[index].classList.add("active")
    }
    setInterval(imgSlide,5000)

</script>
</html>