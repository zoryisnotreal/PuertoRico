<!DOCTYPE html>
<html lang = "en" >
   <!-- Zoe Zapata, ISTE-240, 2211 -->
   <head>
      <meta charset="utf-8" />
      <title>Hot Spots</title>
      <link rel="stylesheet" href="CSS/navandbody.css">
      <link rel="stylesheet" href="CSS/hotspotsstylesheet.css">
   </head>
   <body>
     <?php
      $page = 'hotspots';
      
      include 'inc/nav.php';
      
      include 'inc/backtotop.php';
      ?>
      <!-- Content -->
      <div id="content">
         <h1> Hot Spots </h1>
         <div id="ElYunque">
            <h2 class="ElYunque"> El Yunque </h2>
            <p class="ElYunque">
               The only rainforest a part of the U.S National Forest Service, El Yunque is home to a diverse ecosystem and the island’s native frog species, el coque.
            </p>
            <!-- Slideshow -->
            <div class="slideshow-container" style="width: 50%; height:auto;">
               <!-- Slideshow Part 1 -->
               <div class="mySlides fade">
                  <img src="media/waterfall.jpg" width="525" height="800" style="width:100%; height:50%;" alt="ElYunque WaterFall">
               </div>
               <!-- Slideshow Part 2 -->
               <div class="mySlides fade">
                  <img src="media/coqui.jpg" width="1158" height="800" style="width:100%; height:auto;" alt="Coqui">
               </div>
               <!-- Slideshow Part 3-->
               <div class="mySlides fade">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/RVAL8Yu7wYk" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
               <!-- Slideshow Buttons -->
               <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
               <a class="next" onclick="plusSlides(1)">&#10095;</a>
               <br>
               <!-- Slideshow Dots -->
               <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
               </div>
            </div>
            <!-- End of Slideshow -->
            <!-- JS for slideshow -->
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
            <!-- Rest of content -->
            <p class="ElYunque">
               It is home to a variety of plants and animals, making it the perfect place for hiking and enjoying the scenery. 
               It’s famous for the sounds of the rain that calm the forest, making it a soothing place of nature. 
            </p>
         </div>
         <div class="IslaCaja">
            <h2 class="IslaCaja"> Isla Casa de Muertos </h2>
            <p class="IslaCaja">
               The island, or <span class="quote">“isla”</span> is an uninhabited island off the coast of Ponce. While it may not be home to anyone, it is a hot spot for beachgoers and nature lovers. Several tours explore the island, many including buffets and water activities. 
            </p>
            <div><img id="imgtwo" class="IslaCaja" src="media/island.jpg" width="753" height="500" alt="Island Casa"></div>
         </div>
         <div class="Bahia">
            <h2 class="Bahia"> Bahia Bioluminiscente </h2>
            <p class="Bahia">
               Off the Coast of Puerto Rico is home to one of the few bioluminescent bays in the world. It is described as “rare ecosystems [that] happen when microscopic, single-celled organisms called dinoflagellates grow in quantities big enough to produce a <span class="quote">“glow-in-the-dark” effect when stimulated by movement. So, when you paddle or splash the water, these organisms light up in a neon blue-green color, and so does everything they come in contact with, giving a star-like reflection to the water (3).”</span>
               Many trips take tourists to the bays to see its beauty. 
            </p>
            <div><img id="imgthree" class="Bahia" src="media/bio.jpg" width="449" height="300" alt="Bioluminscente Water"></div>
         </div>
      </div>
      <!-- End of content-->
      <?php
      
      include 'inc/footer.php';
      
      ?>