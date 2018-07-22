<?php

session_start();
	$name=$email=$phone=$gender=$age="";
	$nameErr=$emailErr=$phoneErr="";
	include("config.php");  

   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {echo "hello";
       //username and password sent from form
      if(isset($_POST['add_manager']))

      {
      	$name=$_POST['name'];
      	      	$email=$_POST['email'];


		$username = $_SESSION["username"];
	    //$password = $_SESSION["password"];
echo"$username";
		if($name!="" && $email!="")				//validation
	    {
		  	
				$sql = "SELECT * FROM sign_in WHERE username = '".$username."'";
		         $result = mysqli_query($db,$sql);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];
		         $org_name = $row["org_name"];
		         echo"$org_id";

		  		$query = "INSERT INTO store_managers (org_id , name , email , isadmin , phone , gender ) VALUES('$org_id','$name','$email','0' , '$phone' , '$gender' )";
		  		mysqli_query($db,$query);
		  		header('Location: headProfile.php');
                echo"<script> alert('manager added successfully');</script>";
		  		


		  		

		  		
		}
		else
		{
			echo "Name and Email are required";
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			
		}
	}
}
?>