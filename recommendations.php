<!DOCTYPE html>
<html  lang = "en">
   <!-- Zoe Zapata, ISTE-240, 2211 -->
   <head>
      <meta charset="utf-8" />
      <title>Recommendations</title>
      <link rel="stylesheet" href="CSS/navandbody.css">
      <link rel="stylesheet" href="CSS/recommendstylesheet.css">
   </head>
   <body>
      <?php
      $page = 'recommendations';
      
      include 'inc/nav.php';
      include 'comment.php';
      ?>
      <div id="content">
         <h1> Best Places to Visit: </h1>
         <div id="playa">
            <h2> Playa Sucia </h2>
            <p> A beach near the Los Morillos Lighthouse, known for its stray dogs.  </p>
            <img src="media/sucia.jpg" alt="Playa Sucia" width=400 height=225>
         </div>
         <div id="BEACH">
            <h2> Buye beach </h2>
            <p>A small but popular beach in Cabo Rojo, near an amazing supermarket with rich food</p>
            <img src="media/buye.jpg" alt="Buye Beach" width=400 height=267>
         </div>
         <div id="agua">
            <h2>Aguadilla</h2>
            <p>An isle of Puerto Rico with beautiful beaches and colorful homes (also one of the few airports in Puerto Rico).</p>
            <img src="media/agua.jpg" alt="Aguadilla" width=400 height=225> 
         </div>
         
         <div id="recommendations">
		
		<hr/>
		<h3>What other places do you recommend in Puerto Rico?</h3>
		<form action="recommendations.php" method="POST">		
		
		<!-- Name input -->
			Name: 
			<input type="text" id="first" name="name" />
			
		<!-- Comment Input -->
			<div id="comments">
			<textarea id="comment" placeholder="Write a comment" name="comment"></textarea>
			</div>
		
		<!-- Submission Input -->
			<input type="submit" id="submit" value="Make A Cool Comment"/>
			
			<div id="list">
			<ul>
			
			<!-- Start of php output -->
			<?php
			
			//foreach repeats inputs 				
				foreach($records as $thisRow){
				
				//echo database, change name color only with span
					echo '<li>' . '<span style="font-weight:bold">'. $thisRow['name'] . '</span>' . ': ' . $thisRow['comment'] . ' @ ' . 	
					$thisRow['last_modified_date'] . '</li>';
					
					}
			?>
			</ul>
		</div>
		</form>
	</div>
      </div>
     <?php
      
      include 'inc/footer.php';
      
      ?>