<!DOCTYPE html>
<html  lang = "en">
   <!-- Zoe Zapata, ISTE-240, 2211 -->
   <head>
      <meta charset="utf-8" />
      <title>Neighbors</title>
      <link rel="stylesheet" href="CSS/navandbody.css">
      <link rel="stylesheet" href="CSS/neighborsstylesheet.css">
   </head>
   <body>
     <?php
      $page = 'neighbors';
      
      include 'inc/nav.php';
      
      ?>
      <!-- content -->
      <div id="content">
         <h1> Neighboring Countries </h1>
         <p> Puerto Rico has many neighboring countries: </p>
         <div id="dr">
            <h2> Dominican Republic </h2>
            <p>A fellow Latin country with a rich Taino history. Despite the similarities the two islands face, there is also animosity between the two. 
            </p>
         </div>
         <div id="cuba">
            <h2> Cuba </h2>
            <p>The two islands share a “sisterly kind” of love. Cuba has always supported Puerto Rico in its fight against colonial rule while Puerto Rico has always supported Cuba in its fight against foreign nations. The two flags are inversed colors to show Cuba’s support for Puerto Rico’s fight for independence. 
            </p>
         </div>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31129718.55599159!2d-90.62215702370463!3d17.743957254493427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb9e309d5a038b7%3A0xc67ecf32cac5dbdc!2sCaribbean!5e0!3m2!1sen!2sus!4v1632872543835!5m2!1sen!2sus" width="400" height="300" 
            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <!-- end of content -->
      <?php
      
      include 'inc/footer.php';
      
      ?>