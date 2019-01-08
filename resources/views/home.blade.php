@extends('default')

@section('section')

  <body>

  <div class="slideshow-container" style="max-width:900px">

  <div class="mySlides">
   <div class="numbertext">1 / 3</div>
   <a href="/catalogo"><img src="/images/dulce3.jpg" style="width:100%"></a>
   <div class="text">Dulce</div>
  </div>

  <div class="mySlides">
   <div class="numbertext">2 / 3</div>
   <a href="/catalogo"><img src="/images/salado4.jpg" style="width:100%"></a>
   <div class="text">Salado</div>
  </div>

  <div class="mySlides">
   <div class="numbertext">3 / 3</div>
   <a href="/catalogo"><img src="/images/dulce4.jpg" style="width:100%"></a>
   <div class="text">Completo</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
  <br>

  <div style="text-align:center">
   <span class="dot" onclick="currentSlide(1)"></span>
   <span class="dot" onclick="currentSlide(2)"></span>
   <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
   showSlides(slideIndex += n);
  }

  function currentSlide(n) {
   showSlides(slideIndex = n);
  }

  function showSlides(n) {
   var i;
   var slides = document.getElementsByClassName("mySlides");
   var dots = document.getElementsByClassName("dot");
   if (n > slides.length) {slideIndex = 1}
   if (n < 1) {slideIndex = slides.length}
   for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
   }
   for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" active", "");
   }
   slides[slideIndex-1].style.display = "block";
   dots[slideIndex-1].className += " active";
  }
  </script>

  </body>

@endsection
