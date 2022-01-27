<!DOCTYPE html>
<html lang="en">
   <!-- Zoe Zapata, ISTE-240, 2211 -->
   <head>
      <meta charset="utf-8" />
      <title>Puerto Rico</title>
      <link rel="stylesheet" href="CSS/navandbody.css">
      <link type="text/css" rel="stylesheet" href="CSS/indexstylesheet.css">
   </head>
   <body>
      <?php
      $page = 'index';
      
      include 'inc/nav.php';
      
      ?>
      <!-- Starter for content -->
      <div id="content">
         <h1> Location </h1>
         <!-- Island Stats -->
         <div id="container">
            <div id="IslandInfo">
               <ul>
                  <li> Capitol: San Juan </li>
                  <li> Language: <br> Spanish and English </li>
                  <li> Currency: US Dollars </li>
                  <li> National Anthem: <br> La Borinquen </li>
               </ul>
            </div>
            <!-- Image one -->
            <div id="imageone"> <img src="media/el_morro.jpg" width="437" height="305" alt="el morro"> </div>
         </div>
         <!-- Text -->
         <div id="bodytext">
            <p>
               Puerto Rico is a small island off the coast of the United States. It is a part 
               of the Caribbean and it neighbors the Dominican Republic and Cuba. 
            </p>
            <p>
               The island is filled with a rich and interesting history, starting from the 
               Natives that once lived there, the Tainos, to its current status as US 
               property. It contains smaller islands off its coast, called <span id="quote">“Vieques and 
               Culebra, are administratively parts of Puerto Rico, as is Mona Island to the 
               west (1)”.</span>
            </p>
            <p>
               Puerto Rico is a cultural mixing pot, filled with a mix of Spanish, U.S., and 
               Afro-Caribbean culture with a strong history in indigenous culture and 
               practices. 
               <br><br>
               There is much controversy with the status of Puerto Rico as a country and its 
               relationship with the United States, but the island remains strong and filled 
               with nature, culture, and more. 
               <br><br>
               The people are filled with a love for the island, history, and language and are 
               proud to be called Borinquenos.
            </p>
         </div>
         <!-- Image two -->
         <div> <img src="media/prfamilyphoto.jpg" width="800" height="533" id="imagetwo" alt="el morro" > </div>
         
        <?php
        	include 'inc/backtotop.php'
        ?>
         
      </div>
     <?php
      
      include 'inc/footer.php';
      
      ?>