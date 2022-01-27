<!DOCTYPE html>
<html lang = "en">
   <!-- Zoe Zapata, ISTE-240, 2211 -->
   <head>
      <meta charset="utf-8" />
      <title>NewYoricans</title>
      <link rel="stylesheet" href="CSS/navandbody.css">
      <link rel="stylesheet" href="CSS/nystylesheet.css">
   </head>
   <body>
     <?php
      $page = 'ny';
      
      include 'inc/nav.php';
      include 'inc/backtotop.php';
      
      ?>
      <!-- Content -->
      <div id="content">
         <h1> NewYoricans </h1>
         <p> NewYoricans (or Nuyoricans) is a term for the mass culture of Puerto Ricans in New York. 
            New York City is a prime space for immigration and despite being owned by the US, Puerto Ricans still chose to immigrate. 
            Puerto Ricans are known for creating close and deep communities in NYC, specifically in areas like the Bronx.  It is home to many Latin communities,  who share food, culture, and religion. 
         </p>
         <h2> An Excerpt from Poets.Org </h2>
         <p class="quote"> "The Nuyorican movement was a tradition of poets, writers, artists, and musicians whose work spoke to the social, political, and economic issues Puerto Ricans faced in New York City in the 1960s and 1970s.
            Not unlike the Harlem Renaissance, the Nuyorican movement was born out of a period of migration. After the United States conferred commonwealth status onto Puerto Rico in 1950, Puerto Rican migration to New York City increased, creating pockets of Puerto Rican communities in neighborhoods like the Lower East Side and East Harlem. Many of the Nuyorican writers were part of this group of first-generation New Yorkers, who were either the children of immigrants or who themselves arrived at New York City at a young age."
         </p>
         <span> Some "Famous" NewYoricans: </span>
         <dl>
            <div id="hernandez">
               <dt><img src="media/hernandezcruz.jpg" width="396" height="400" alt="Hernandez Cruz"></dt>
               <dd> Hernandez Cruz: Famous Puerto Rican Author and Poet </dd>
            </div>
            <div id="photo">
               <dt><img src="media/Santiago.jpg" width="300" height="200" alt="Esmeralda Santiago"></dt>
               <dd> Esmeralda Santiago: Famous Puerto Rican Author and Writer of "When I Was a Puerto Rican"</dd>
            </div>
            <div id="mom">
               <dt><img src="media/mom.JPG" width="300" height="400" alt="Photo of Mom"></dt>
               <dd> ELizabeth Zapata: My mom who is a first generation Puerto Rican and was born in the height of the Nuyorican Movement</dd>
            </div>
         </dl>
      </div>
      <!-- End of content -->
      <?php
      
      include 'inc/footer.php';
      
      ?>