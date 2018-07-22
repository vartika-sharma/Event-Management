<?php

	session_start();
	include("config.php");
	$checkbox1 = $_POST['color'];

	$username = $_SESSION["username"];
	$sql = "SELECT * FROM sign_in WHERE username = '".$username."'";
		         $result = mysqli_query($db,$sql);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	         $org_id = $row["org_id"];

     $form_name = $_SESSION['form_name'];
		 echo $form_name;
		 //echo "reg";
		
	if(isset($_POST['submit']))
	{
		
			//echo $form_id."  ";
			//echo $org_id."   ";
			//echo $checkbox1[$i];
			$sql = "SELECT * FROM sales WHERE store_id = '".$checkbox1[0]."' and org_id = '".$org_id."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         echo $row["sales"];
		         echo $row["purchase"];
		         echo $row["profit"];
			 header('location: headProfile.php');

		}
	?>