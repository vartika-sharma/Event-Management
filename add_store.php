<?php

	
			        
	$city=$address=$phone="";
	$cityErr=$addressErr=$phoneErr="";
	require_once("config.php");  

   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
       //username and password sent from form
      if(isset($_POST['add_store']))
      { 
         $city = $_POST['city'];
	    $address=$_POST['address'];



	            $city = $_POST['city'];
		         $address = $_POST['address'];
		         $name = $_POST['name'];

	         $username = $_SESSION['username'];

		$sql = "SELECT * FROM sign_in WHERE username = '".$username."'";
	     $result = mysqli_query($db,$sql);
	     
	     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	     	     
	     $org_id = $row["org_id"];   //get org_id
	     $org_name = $row["org_name"];

	    $sql1 = "SELECT * FROM store_managers WHERE name = '".$name."'";
		         $result = mysqli_query($db,$sql1);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		             $manager_id = $row['manager_id']; 
	   $manager_name = $row['name'];
	    $email = $row['email'];
	   /* echo $email;
	    $msg = "You have been chosen as store manager of ".$org_name." ".$city." by your main head ";
	    $header = 'From: riyaarora97@gmail.com@gmail.com' . '\r\n' .
    'Reply-To: riyaarora97@gmail.com' . '\r\n' .
    'X-Mailer: PHP/' . phpversion();


	    mail("vartikasharma2512@gmail.com","bcfds",$msg,"From: riyaarora97@gmail.com",$header);   
	    //$phone =$_POST['phone'];
	//$manager_name = $row["name"];

		$username = $_SESSION["username"];
	    //$password = $_SESSION["password"];
	    */

		if($city!=""&& $address!="")				//validation
	    {      
		         //$org_name = $row["org_name"];
		         
		  		$query = "INSERT INTO stores(org_id , city , manager_id) VALUES('$org_id', '$city' , '$manager_id')";
		  		mysqli_query($db,$query);
		  		
		  		echo "<script>alert('data stored')</script>";

		}
		else
		{
			echo "Name and Email are required";
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}

	}
}
?>