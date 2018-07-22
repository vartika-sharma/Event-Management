<?php

session_start();

	$date=$sale=$purchase="";
	$dateErr=$saleErr=$purchaseErr="";
	include("config.php");  

   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {

   	echo "hello";
       //username and password sent from form
      if(isset($_POST['add_detail']))

      {
      	echo"<script>$date=getDate();</script>";
      	      	$sale=$_POST['sale'];
      	      	$purchase=$_POST['purchase'];


		$username = $_SESSION["username"];
	    $manager_id = $_SESSION["password"];
echo"$username";
echo $manager_id;
		if($sale!="" && $purchase!="")				//validation
	    {
		  	
				$sql = "SELECT * FROM stores WHERE  manager_id='".$manager_id."'";
		         $result = mysqli_query($db,$sql);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		         if($result)
		         	echo "gfh";
		         else
		         	echo "dgdf";
		         $store_id = $row["store_id"];
		         $org_id = $row["org_id"];
		         echo"$store_id $org_id";
                $profit=($sale-$purchase)*100/$purchase;

                $sql = "SELECT * FROM sales WHERE  manager_id='".$manager_id."' and store_id = '".$$store_id."'";
		         $result = mysqli_query($db,$sql);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $query = "SELECT CURDATE()";
		         $result = mysqli_query($db,$sql);
		         $date = date("Y/m/d");

		         if($row["store_id"] == $store_id && $row["tdate"] == $date)
		         {
		         	echo "ERROR";
		         }
		         else
		         {
		         	$query = "INSERT INTO sales (org_id , store_id , tdate, sale , purchase,profit ) VALUES('$org_id','$store_id','$date' , '$sale' , '$purchase','$profit')";
		  		//mysqli_query($db,$query);
		  		   if(mysqli_query($db,$query))
			  		{
			  			header('Location: managerProfile.php');
			  		echo "<script>alert('data added succesfully')</script>";
	               
                }
		         }

		  		
	    }

	    else
		{
			echo "Name and Email are required";
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			
		}
		
			

	}
}
?>