<!DOCTYPE html>
<html lang = "en">
   <!-- Zoe Zapata, ISTE-240, 2211 -->
   <head>
      <meta charset="utf-8" />
      <title>Home</title>
      <link rel="stylesheet" href="CSS/navandbody.css">
      <link rel="stylesheet" href="CSS/homestylesheet.css">
   </head>
   <body>
      <?php
      $page = 'home';
      
      include 'inc/nav.php';
      
      ?>
    
      <div id="content">
         <div id="welcome">
            <h1> ¡Bienvenidos! </h1>
            <a id="button" href='index.php'> ¡Let's Explore Puerto Rico!</a>
         </div>
         
         
       <div> 
            <img id="coquiimg" alt="coqui frog in white" width="950" height="1011" src="media/coqui.png">
       </div>
            
            
      </div>
      
      <?php
      
      include 'inc/footer.php';
      
      ?>