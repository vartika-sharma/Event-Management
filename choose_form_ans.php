<?php
session_start() ;
include('headm.html');
    $drop=$radio=$text=$form_name="";	
	$dropErr=$radioErr=$textErr="";
	require_once("config.php");

   		$username = $_SESSION["username"];
		$sql = "SELECT * FROM sign_in WHERE username = '".$username."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];

 
		 $sql = "SELECT * FROM form WHERE org_id = '".$org_id."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            echo "<img src='form_ans.jpg' style='position:absolute;top:60px;height:550px;width:550px '>";
   		echo"<div style='position:absolute;top:60px;left:900px; font-face:Eras Demi ITC;font-size:20px;background-color:#e6f5ff'>";
		    echo "<form method = 'POST' action = 'view_answers.php' id = 'choose_form'>"  ;  
		  while($row)
		  {
		  	$form_name = $row["form_name"];
		  	echo "<tr><td><input type = 'radio' name= 'choose_form' value = '$form_name'>$form_name</td></tr>";
		  	echo "<br>";
		  	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		  }
		  echo "<tr><td><input type = 'submit' name = 'submit' value = 'View submitions'></td></tr>";
		  echo "</form>";
	  		 
?>


