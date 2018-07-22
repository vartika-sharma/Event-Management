<?php

	session_start();
	$drop=$radio=$text=$form_name="";	
	$dropErr=$radioErr=$textErr="";
	require_once("config.php");
	echo"<img src='form1.jpeg'  style='width:800px;height:550px'>";


   		$username = $_SESSION["username"];
		$sql = "SELECT * FROM sign_in WHERE username = '".$username."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];

    echo"<div style='font-family:Franklin Gothic Demi ;font-size:20px ;position:absolute;top:10px ;right:290px'>";

		 /*$form_name = $_SESSION['form_name'];
		 echo $form_name;
		 echo "reg";*/
		 $sql = "SELECT * FROM stores WHERE org_id = '".$org_id."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $store_id = $row["store_id"];


		$sql = "SELECT * FROM sales WHERE store_id = '".$store_id."' and org_id = '".$org_id."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

			         //echo $form_id;
		 /* while($row)
		  {
		  	echo"<br>";
		  	echo $row["question"];
		  	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		  }
		  
	  		 $sql = "SELECT * FROM store_managers WHERE org_id = '".$org_id."'";
		         $result = mysqli_query($db,$sql);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);*/

		      echo " <form action='show_sales.php' method='post' enctype='multipart/form-data' >";
		      echo"<br>";
		      echo"Select People you want to mail <br>";
	         
	         while($row)
	         {
	         	//echo $row['name'];
	         	$mname = $row['store_id'];
				echo "<tr><td><input type='checkbox' name='color[]'  value='$mname'></td></tr>";
				echo"<br>";
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				
	         }
	         echo "<tr><td><input name='submit' type='submit' value='Select store'></td></tr>";
	         echo"<br>";
			echo "</form>";
			echo"</div>";
		/*echo "<table align='center'>";
		echo "<form method = 'post' id='store_manager' action = 'texth.php'>";
		echo "<tr><td>Text Question</td><td><input type='submit' id='Calltext' name = 'text_que' value='ADD'></td></tr>";
		echo "</form>";

		
		echo "<form method = 'post' id='store_manager' action = 'radioh.php'>";
		echo "<tr><td>Radio Button Question</td><td><input type='submit' id='Calltext' name = 'radio' value='ADD'></td></tr>";
		echo "</form>";
		

		echo "<form method = 'post' id='store_manager' action = 'mcqh.php'>";
		echo "<tr><td>Multiple Choice Question</td><td><input type='submit' id='Calltext' name = 'mcq' value='ADD'></td></tr>";
		echo "</form>";
		//echo "<tr><td colspan=2><input type='submit' name = 'next' value='nextn'></td></tr>";
		echo "<tr><td colspan=2><input type='submit' name = 'form_make' value='submit'></td></tr>";
		echo "</form>";
      	}	
		
		echo $form_name;
		
		
		//fnameget($form_name);
		if(isset($_POST['form_make']))
		{
			unset($_POST['next']);
			include "head_profile.php";
			
		}*/
		
?>


