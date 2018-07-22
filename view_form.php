<?php
require_once('config.php');
include "notification.php";
include"heade.html";


	session_start();
	$drop=$radio=$text=$form_name="";	
	$dropErr=$radioErr=$textErr="";
	
       echo"<img src='form.jpeg' style='position:absolute;top:50px;left:700px;width=300px;height:600px' >";
       echo"<div style='position:absolute;top:60px;left:20px;font-face:Eras Demi ITC;font-size:30px'>";
   		$username = $_SESSION["username"];
   		$password = $_SESSION["password"];
		$sql = "SELECT * FROM store_managers WHERE name = '".$username."' and manager_id = '".$password."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];
		         $manager_id = $row["manager_id"];

 			//echo $org_id;
		 $form_id = $_POST['form_id'];
		 $_SESSION["form_id"] = $form_id;
		// echo $_SESSION["form_id"];
		 //echo $form_id;
		 //echo "reg";
		 $sql = "SELECT * FROM form_que WHERE form_id = '".$form_id."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $ques_id = $row["ques_id"];

		  //echo $ques_id;
		  echo "<form method = 'POST' action = 'add_answers.php'>";
		  $i=0;
		  while($row)
		  {
		  	echo $row["question"];
		  	echo "<br>";
		  	echo $row["option1"];
		  	echo "<br>";
		  	echo $row["option2"];
		  	echo "<br>";
		  	echo $row["option3"];
		  	echo "<br>";
		  	echo $row["option4"];

		  	echo "<tr><td><input type = 'text' name = 'answer[]'></td></tr>";
		  	$_SESSION['ques_id'] = $row['ques_id'];
		  	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		  	

		  }
		  echo"<br>";
		  echo "<tr><td>Submit your form</td><td><input type='submit' id='Calltext' name = 'submit' value='SUBMIT'></td></tr>";
		  echo "</form>";
		  
	  		 /*$sql = "SELECT * FROM store_managers WHERE org_id = '".$org_id."'";
		         $result = mysqli_query($db,$sql);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		      echo " <form action='form_assign.php' method='post' enctype='multipart/form-data' >";
	         while($row)
	         {
	         	echo $row['name'];
	         	$mname = $row['name'];
				echo "<tr><td><input type='checkbox' name='color[]'  value='$mname'></td></tr>";
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				
	         }
	         echo "<tr><td><input name='submit' type='submit' value='Send Forms'></td></tr>";
			echo "</form>";*/
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


