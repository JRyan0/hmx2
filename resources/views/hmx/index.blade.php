@extends('base.index')

@section('container')
   <!-- Slider main container -->
   <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
      <!-- Slides -->
      <div class="swiper-slide"><img class="img" src="{{ asset('images\a.jpg') }}"  alt=""></div>
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



  @include('base.carrinhoClose')

  <!-- Use any element to open the sidenav -->


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
    @include('base.footer')
@endsection
