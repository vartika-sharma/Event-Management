<?php
session_start() ;
include('headm.html');
	$drop=$radio=$text=$form_name="";	
	$dropErr=$radioErr=$textErr="";
	require_once("config.php");

       echo"<img src='view_ans.jpg' style='width:100%;height:100%;opacity:0.4'>";
   		echo"<div style=' position:absolute;top:65px;font-face:Eras Demi ITC;sont-size:30px'>";
   		$username = $_SESSION["username"];
		$sql = "SELECT * FROM sign_in WHERE username = '".$username."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];

 		$form_name = $_POST["choose_form"];

		 
		 $sql = "SELECT * FROM form WHERE org_id = '".$org_id."' and form_name = '".$form_name."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $form_id = $row["form_id"];

         $sql = "SELECT * FROM form_assign WHERE org_id = '".$org_id."' and form_id = '".$form_id."'";
			         $result1 = mysqli_query($db,$sql);
			         
			         $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

		  

          while($row1)
		  {echo "<hr>";
		  	$manager_id = $row1["manager_id"];
		  	$sql = "SELECT * FROM form_que WHERE form_id = '".$form_id."'";
		         $result2 = mysqli_query($db,$sql);
		         
		         $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);

		  	$ques_id = $row2["ques_id"];
		  	echo sizeof($row2);
	  		echo "<form>";
		         while($row2)
		         {//echo "thtt";
		         	$ques_id = $row2["ques_id"];
		         	$sql = "SELECT * FROM fill_answers WHERE form_id = '".$form_id."' and manager_id = '".$manager_id."' and ques_id = '".$ques_id."'";
		         $result3 = mysqli_query($db,$sql);
		         
		         $row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
		         

		         	$question = $row2["question"];
		         	echo "<tr><td>$question</td></tr>";
		         	echo "<br>";
		         	/*if($row2['option1']!="")
		         	{
		         		echo "<tr><td>$row2['option1']</td></tr>";
		         	}
		         	if($row2['option2']!="")
		         	{
		         		echo "<tr><td>$row2['option2']</td></tr>";
		         	}
		         	if($row2['option3']!="")
		         	{
		         		echo "<tr><td>$row2['option3']</td></tr>";
		         	}
		         	if($row2['option4']!="")
		         	{
		         		echo "<tr><td>$row2['option4']</td></tr>";
		         	}*/
		         	echo sizeof($row3);
		         	$answer = $row3["answer"];
		         	echo "<tr><td>$answer</td></tr>";
		         	echo "<br><br>";
		         	$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);

		         }
		         echo "</form>";
		         

		         $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
		         echo"<a href ='choose_form_ans.php'>see answers to other forms</a>";
                 echo"</div>";

		  }
		  
	  		 
?>


