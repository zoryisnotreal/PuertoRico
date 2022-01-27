<!DOCTYPE html>
<html lang = "en">
   <!-- Zoe Zapata, ISTE-240, 2211 -->
   <head>
      <meta charset="utf-8" />
      <title>Historical Sites</title>
      <link rel="stylesheet" href="CSS/navandbody.css">
      <link rel="stylesheet" href="CSS/historicalsitesstylesheet.css">
   </head>
   <body>
    <?php
      $page = 'historicalsites';
      
      include 'inc/nav.php';
       include 'inc/backtotop.php';
      
      ?>
      <!-- Content -->
      <div id="content">
         <h1> Historical Sites </h1>
         <p> The most unique parts of the island are one filled with nature and 
            culture. 
         </p>
         <div id="Castillo">
            <h2> Castillo San Felipe del Morro</h2>
            <div id="imgone"><img src="media/ElMorro2.jpg" width="300" height="400" alt="El Morro"></div>
            <p>
               Remnants of coastal guard castles left by the Spanish during their reign, the castles served as a way to protect the island in the past but remain as a site of the rich culture in the present. <span class="quote">“It is the result of the efforts of Spanish engineers for more than 250 years and is one of the largest fortifications built by Spain in the Caribbean. Although its foundation was laid in 1539, the six-level fortification was not considered complete until 1787.(2)”</span>
               The castles surround the coast of Old San Juan and remain a popular tourist attraction. 
            </p>
         </div>
         <div id="Faro">
            <h2>Faro Los Morrillos</h2>
            <p>
               Faro Los Morrillos is known to be one of the most historic lighthouses in Cabo Rojo. It is based on a large cliff that looks off onto the ocean. While dangerous and home to many deaths, it is still a place of beauty and history. Many come to enjoy its beauty and the undiscovered beach nearby, home to many stray dogs that will come to you and ask for food.
            </p>
            <iframe width="739" height="390" src="https://www.youtube.com/embed/QuGo9Kzc8Co" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
         <div id="Centro">
            <h2>Centro Ceremonial Indígena de Tibes</h2>
            <p>
               The center is home to the most important ceremonial site in Puerto Rico. The site is filled with the history of the Natives from Puerto Rico, whose history still impacts Puerto Rican culture today. 
               The site is described as <span class="quote">“Archeological investigation and radiocarbon dating indicate that the site's major period of occupation was from 400 through 1000 AD. The site consists of several stone-lined courts/plazas shaded by native trees. The last inhabitants of the site are believed to have been Tainos. (4)”</span>
            </p>
            <div><img  id="imgthree" src="media/Taino_Village.jpg" width="640" height="480" alt="Taino Village"></div>
         </div>
      </div>
      <!-- end of content-->
      <?php
      
      include 'inc/footer.php';
      
      ?>