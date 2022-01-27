<!DOCTYPE html>
<html lang = "en">
   <!-- Zoe Zapata, ISTE-240, 2211 -->
   <head>
      <meta charset="utf-8" />
      <title>Food</title>
      <link rel="stylesheet" href="CSS/navandbody.css">
      <link rel="stylesheet" href="CSS/foodstylesheet.css">
   </head>
   <body>
      <?php
      $page = 'food';
      
      include 'inc/nav.php';
      
      ?>
      <!-- Content -->
      <div id="content">
         <h1> Puerto Rican Food </h1>
         <p> Puerto Rico is home to many particular meals. It’s famous for its cuisine 	  
            that has both Spanish and Afro-Caribean influence. 
         </p>
         <div id="pegao">
            Pegao is a dish that is never intentionally made. It is the “burnt” or sticky 
            part of the white rice that comes when cooking it in a caldero, or a cauldron. 
            It is filled with flavor and provides a unique texture with any meal. 
            <div><img id="imgone" src="media/pegao.jpg" width="800" height="600" alt="plate of pegao"></div>
         </div>
         <div id="fry">
            Fry Sauce is a unique mix of Ketchup, mayo, mustard, and a pinch of garlic. It 
            goes with any meal but especially with tostones and pastellitos.
            <h2> How to make fry sauce </h2>
            <ul id="frysauce">
               <li> 1 tbs of mustard </li>
               <li> 1 tbs of ketchup  </li>
               <li> 1 tbs of mayo </li>
               <li> ½ tbs of minced Garlic </li>
            </ul>
            <span> Mix it! </span>
        </div>
        </div>
            <?php

      include 'inc/footer.php';
      
      ?>