<!DOCTYPE html>
<html  lang = "en">
   <!-- Zoe Zapata, ISTE-240, 2211 -->
   <head>
      <meta charset="utf-8" />
      <title>San Juan</title>
      <link rel="stylesheet" href="CSS/navandbody.css">
      <link rel="stylesheet" href="CSS/sjstylesheet.css">
   </head>
   <body>
     <?php
      $page = 'sj';
      
      include 'inc/nav.php';
      
      ?>
      <!-- content -->
      <div id="content">
         <h1> Old San Juan VS New San Juan </h1>
         <div class="container">
            <img class="img" src="media/oldsj.jpg" width="840" height="400" alt="Old San Juan">
            <div class="middle">
               <p class="text"> Old San Juan </p>
            </div>
         </div>
         <div class="container">
            <img class="img" src="media/newsj.jpg" width="601" height="400" alt="New San Juan">
            <div class="middle">
               <p class="text"> Nueva San Juan </p>
            </div>
         </div>
         <p> Old San Juan Is a section of San Juan, the Capitol of Puerto Rico. Old San Juan is filled with historical attributes––abandoned Spanish architecture, rich tourist locations, and much more. It  <span class="quote">“is special in every way, known for its rich history, five-century-old forts, romantic ambiance, Old World elegance, exquisite food, and festive atmosphere. “El Viejo San Juan” is no ordinary cookie-cutter destination(8).”</span>
            San Juan is the capital. It is filled with modern homes, businesses, and is booming in tourism. It is home to the very few resorts in Puerto Rico.
         </p>
      </div>
      <!-- end of content -->
     <?php
      
      include 'inc/footer.php';
      
      ?>