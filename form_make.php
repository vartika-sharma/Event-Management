<?php

	session_start();
	$drop=$radio=$text=$form_name="";
	$dropErr=$radioErr=$textErr="";
	require_once("config.php");

   		$username = $_SESSION['username'];
		$sql = "SELECT * FROM sign_in WHERE username = '".$username."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];

 
		 if(isset($_POST['form_name_make'])|| isset($_POST['type']))
		{
			
         	if(isset($_POST['form_name_make']))
         	{
         		$form_name = $_POST['form_name'];
         		$sql = "INSERT INTO form(org_id,form_name)VALUES ('$org_id' , '$form_name')";
			       mysqli_query($db,$sql);
         	}
         	if(isset($_POST['type']))
         	{
         		$form_name = $_SESSION['form_name'];
         	}

			
		
			$_SESSION['form_name'] = $form_name;
		echo" <div  style='font-size:25px;font-family:Berlin Sans FB;color:#FFF;position:absolute; top:0px;right:10px;''>
Hey!

<br>
<a href = 'logout.php'>Logout</a>
</div>
";		echo "<img src='formp.jpg' style='width:1335px;height:635px'>";
		echo "<div id='ques_type' style='position:absolute;left:450px;top:200px ;background-color:rgba(255,255,255,0.5);font-size:75px;font-family:Berlin Sans FB;color:#000;'>";

		echo "<table align='center' style= 'font-size:40px;font-family:Franklin Gothic Demi;color:#00004d;'>";
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
		//echo "<form>";
		//echo "<tr><td colspan=2><input type='submit' name = 'form_make' value='submit'></td></tr>";
		//echo "</form>";

		echo "<form method = 'post' action = 'preview.php'>";
		echo "<tr><td colspan=2><input type='submit' name = 'preview' value='Preview Your Form'></td></tr>";
		echo "</form>";

		
      	}	
		
		//echo $form_name;
		
		
		//fnameget($form_name);
		if(isset($_POST['form_make']))
		{
			unset($_POST['next']);
			include "head_profile.php";
			
		}
		
?>


