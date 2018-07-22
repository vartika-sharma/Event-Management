<?php

include("config.php");
$query= "SELECT playerid,score from score ORDER BY playerid ";
$result=mysqli_query($db,$query);
$jsonArray = array();
		//check if there is any data returned by the SQL Query
		if ($result->num_rows > 0) {
		  //Converting the results into an associative array
		  while($row = $result->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['label'] = $row['playerid'];
		    $jsonArrayItem['value'] = $row['score'];
		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		    //Closing the connection to DB
		$conn->close();
		//set the response content type as JSON
		header('Content-type: application/json');
		//output the return value of json encode using the echo function. 
		echo json_encode($jsonArray);


?>