<!DOCTYPE html>
<html lang = "en">
   <!-- Zoe Zapata, ISTE-240, 2211 -->
   <head>
      <meta charset="utf-8" />
      <title>Restaurants</title>
      <link rel="stylesheet" href="CSS/navandbody.css">
      <link rel="stylesheet" href="CSS/reststylesheet.css">
   </head>
   <body>
      <?php
      $page = 'restaurants';
      
      include 'inc/nav.php';
      
      ?>
      <div id="content">
         <h1> Best Restaurants In Puerto Rico </h1>
         <div id="button"> <a href='https://www.cntraveler.com/gallery/best-restaurants-in-puerto-rico'>Best Eateries in PR</a> </div>
         <div id="rest1">
            <h2> La Alcapurria Quem´e </h2>
            <p>
               Located in La Placita de Santurce, this restaurant caters to beef and crab lovers, with seafood being its specialty. 
               Many say to <span class="quote">“come for the alcapurrias: Puerto Rican fritters made with mashed plantains or yucca and stuffed with meat. There are several varieties at Quemá, but the standouts are the beef and crab, both perfectly spiced and intensely flavorful. The pastelillos (smaller versions of empanadas) are also excellent: gloriously crisp outside and packed with succulent meat inside. (5)” </span>
            </p>
         </div>
         <div id="rest2">
            <h2> La Copa Llena at The Black Edge </h2>
            <p>
               This restaurant is known for attracting tourists. It’s described as <span class="quote">“A breezy oceanfront restaurant so gorgeously picturesque it feels like you're walking into the last scene of a rom-com. The outdoor terrace is framed perfectly by swaying palms, strung with delicate fairy lights, and looks directly out over the sunset. The tapas-style appetizers are tiny but pack a punch: think bites of smoky chistorra sausage with roasted red peppers, anchovies, and eggs on slices of crusty baguette, and perfectly fried tostones. The mains are seafood-centric and dance with global and local flavors, like the catch-of-the-day curry, served with plantains and coconut rice. Most of the ingredients are sourced locally and so the menu changes often, but you can expect playful and inventive Puerto Rican fusion cuisine that doesn't take itself too seriously. (5)”</span> 
            </p>
         </div>
      </div>
      <?php
      
      include 'inc/footer.php';
      
      ?>