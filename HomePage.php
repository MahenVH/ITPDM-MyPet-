<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="./css/homePageCSS.css">

  <script type="text/javascript">
/*slideshow*/
  var slideIndex = 0;
  function showSlides() {

      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
  </script>

<style >
    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        padding-top: 10px;

    }

    /* Hide the images by default */
.mySlides {
          display: none;
      }

    /* Next & previous buttons */
.prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
      }

    /* Position the "next button" to the right */
.next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

    /* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
      }

    /* Caption text */
.text {
        color:#999;
        font-size: 8px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }


      /* The dots/bullets/indicators */
.dot {
        cursor:pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 2s ease;
      }

.active, .dot:hover {
        background-color: #717171;
      }

      /* Fading animation */
.fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
      }

@-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
          }

@keyframes fade {
          from {opacity: .4}
          to {opacity: 1}
        }
.image {
        	color: #FFF;
        }

</style>



</head>
<body>
  <header>

    <div class="TopBar">
      <img src=".\img\catdog.png" width="250px" height="180px" align=top >
      <nav>
        <ul>
          <li class="current"><a href="HomePage.html">Home</a></li>
          <li ><a href="Gallery.php">Gallery</a></li>
          <li><a href="RegisterPetDetails.html">RegisterPet</a></li>
          <li><a href="login.html">Login</a></li>
          <li ><a href="TrackingVetAppointments_VIEW_UPDATE_DELETE.html">Modify</a></li>
          <li><a href="TrackingVetAppointmentsADD.php">Add </a></li>
        </ul>
      </nav>
    </div>

  </header>
  <main>
    <section >
      <body onload="showSlides()">
      <table width="893" height="603" border="0" align="center">
<tr>
      <div class="slideshow-container">

      <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src=".\img\slideshow1.jpg" style="width:100%">

      </div>
      <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src=".\img\slideshow2.jpg" style="width:100%">

      </div>
      <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src=".\img\slideshow3.jpg" style="width:100%">


      </div>
      <br>
      <div style="text-align:center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>

      </div>
</tr>


    </section>

    </main>



    <footer>General web design, Copyright &copy 2018</footer>
  </body>


  </html>