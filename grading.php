<!DOCTYPE html>
<html lang = "en">
<!-- Zoe Zapata, ISTE-240, 2211 -->
<head>
	<meta charset="utf-8" />
	<title>Rubric</title>
	<link rel="stylesheet" href="CSS/navandbody.css">
	<link rel="stylesheet" href="CSS/tainosstylesheet.css">

</head>
<body>
<?php
      $page = 'grading';
      
      include 'inc/nav.php';
      
      ?>


<!-- content -->
	<div id="content">
	<h1> Rubric </h1>
	<form>
		<input type="checkbox" id="rubric1" name="grading" value="design">
		<label for="rubric1">Good Design Techniques –– CRAP</label><br>
		<input type="checkbox" id="rubric2" name="grade2" 			
		value="info">
		<label for="rubric2">Organization of Information</label><br>
		<input type="checkbox" id="rubric3" name="grade3" value="content">
		<label for="rubric3">Content –– Interesting read, perfect grammar and 
		spelling</label><br>
		<input type="checkbox" id="rubric4" name="grade4" value="nav">
		<label for="rubric4">Navigation –– easy to get around</label><br>
		<input type="checkbox" id="rubric5" name="grade5" value="HTML">
		<label for="rubric5">Use of HTML5 andCSS3(both text and 
		positioning)</label><br>
		<input type="checkbox" id="rubric6" name="grade6" value="references">
		<label for="rubric6">A separate linked "Reference" page(in addition 
		to 
		the 10 required content pages. Youwill lose 10% for not having a 
		"References" page.</label><br>
		<input type="checkbox" id="rubric7" name="grade7" 			
		value="doc">
		<label for="rubric7">Document what you have done in each and every 
		grading category above, which is linked from your 
		homepage.</label><br>
		
	</form>
	</div>
<!-- content -->
<?php
   
      include 'inc/footer.php';
      
      ?>
	
	
	
	
	
	
	
	
	
	
	
	
	