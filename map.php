<!DOCTYPE html>
<html lang = "en">
   <!-- Zoe Zapata, ISTE-240, 2211 -->
   <head>
      <meta charset="utf-8" />
      <title>Map</title>
      <link rel="stylesheet" href="CSS/navandbody.css">
      <link rel="stylesheet" href="CSS/mapstylesheet.css">
   </head>
   <body>
    <?php
      $page = 'map';
      
      include 'inc/nav.php';
      
      ?>
      <!-- Start of content -->
      <div id="content">
         <h1> Map of Puerto Rico </h1>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1947572.3813975279!2d-66.54833639552794!3d17.562217051715148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c0296261b92a7f9%3A0xf336ec2818049b1a!2sPuerto%20Rico!5e0!3m2!1sen!2sus!4v1632872150211!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         <div id="places">
            <span> Prime Places to visit in Puerto Rico: </span>
            <ul>
               <li>Cabo Rojo (where my family is from!)</li>
               <li>Ponce –– home to stray dogs and rich food and glowing bay</li>
               <li>Old San Juan –– Home to El Morro</li>
               <li>Mayaguez ––  a rich beach in puerto rico</li>
            </ul>
         </div>
      </div>
      <!-- end of content -->
   <?php
    include 'inc/footer.php';
    
    ?>