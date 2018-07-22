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
		 $sql = "SELECT * FROM form WHERE form_name = '".$form_name."' and org_id = '".$org_id."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $form_id = $row["form_id"];

	if(isset($_POST['submit']))
	{
		for($i=0;$i<sizeof($checkbox1);$i++)
		{
			echo $form_id."  ";
			echo $org_id."   ";
			echo $checkbox1[$i];
			$sql = "SELECT * FROM store_managers WHERE name = '".$checkbox1[$i]."' and org_id = '".$org_id."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $manager_id = $row["manager_id"];
		         echo $manager_id."   ";
			$query = "INSERT INTO form_assign(org_id , form_id , manager_name , manager_id) VALUES ('$org_id' , '$form_id' , '$checkbox1[$i]' , '$manager_id')";
			 mysqli_query($db,$query);

			 $notification = "New form has been assisgned to you";
			 $query = "INSERT INTO messageTest(org_id , manager_id , notification , status) VALUES ('$org_id' , '$manager_id' , '$notification' , 'unread')";
			 mysqli_query($db,$query);
			 header('location: headProfile.php');

		}
	}