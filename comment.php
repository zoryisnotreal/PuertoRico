<?php

//Include the database 

 include '../../../dbConn.php';
 
 //first if...check if database connects
  if($conn) {
 
 
 //cool boys, we are in
 //check if name is not empty
 if(!empty($_POST['name'])) {
 
 //its not create a prepared statement, insert user inserts to database
 $sstmt = $conn->prepare("INSERT INTO `recommendationsPR` (name, comment) VALUES (?, ?)");
 $sstmt->bind_param("ss", $_POST['name'], $_POST['comment']);
 
 $sstmt-> execute();
 
 //close it
 $sstmt -> close();
 
 }
 
 //create a select query for database
 	$res = $conn->query('SELECT DISTINCT name, comment, last_modified_date FROM `recommendationsPR`');
 	
//check if res exists, then add the records to rowHolder
 		if($res){
 			while($rowHolder = mysqli_fetch_array($res, MYSQLI_ASSOC)){
 				$records[] = $rowHolder;
 			}
 		}
 
 //close conn
 $conn -> close();
 }

?>
