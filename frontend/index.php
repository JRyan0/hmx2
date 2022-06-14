<!doctype html>
<html lang="en">
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link type="text/css" href="estilo.css" rel="stylesheet"/>
    <title>Hello, world!</title>
    <style>

    </style>
</head>

<body>
        <?php
            include_once 'header.php';
        ?>
 
   <!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
      <!-- If we need pagination -->
  <div class="swiper-pagination"></div>
    <!-- Slides -->
    <div class="swiper-slide"><img class="img" src="images\a.jpg"  alt=""></div>
    <div class="swiper-slide"><img class="img" src="images\20220502_120124.jpg"  alt=""></div>
    <div class="swiper-slide">Slide 3</div>
    ...
  </div>


  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>



<!-- Carrinho-->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <button type="button" class="pos btn btn-light">Finalizar Compra</button>
</div>

<!-- Use any element to open the sidenav -->

        <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "350px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
        }
        </script>
      <script type="module">
        import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'
        import "react-slideshow-image/dist/styles.css"
        const swiper = new Swiper('.swiper', {
          speed: 400,
          spaceBetween: 100,
        });

        const swiper = document.querySelector('.swiper').swiper;
        
        // Now you can use all slider methods like
        swiper.slideNext();
        const swiper = new Swiper('.swiper', {
          // Optional parameters
          direction: 'vertical',
          loop: true,
          // If we need pagination
          pagination: {
            el: '.swiper-pagination-bullet-active',
            type: 'clickable',
          },

          // Navigation arrows
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },

          // And if we need scrollbar
          scrollbar: {
            el: '.swiper-scrollbar',
          },
        });
       


      </script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
</body>

</html>