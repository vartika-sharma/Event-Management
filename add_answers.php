<?php
session_start();

		require_once("config.php");

   		$username = $_SESSION["username"];
   		$password = $_SESSION["password"];
   		$answers = $_POST['answer'];
   		$ques_id = $_SESSION['ques_id'];
   		$form_id = $_SESSION["form_id"];


   		$sql = "SELECT * FROM store_managers WHERE name = '".$username."' and manager_id = '".$password."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];
		         $manager_id = $row["manager_id"];
		         echo sizeof($answers);

             $sql = "SELECT * FROM form_que WHERE org_id = '".$org_id."' and form_id = '".$form_id."'";
               $result = mysqli_query($db,$sql);
               
               $row1 = mysqli_fetch_array($result,MYSQLI_ASSOC);
               $ques_id = $row1["ques_id"];
		 for($i=0;$i<sizeof($answers);$i++)
         {
             $sql = "INSERT INTO fill_answers(org_id , form_id , manager_id , ques_id , answer) VALUES('$org_id' , '$form_id' , '$manager_id' , '$ques_id' , '$answers[$i]')";
             mysqli_query($db,$sql);

             $row1 = mysqli_fetch_array($result,MYSQLI_ASSOC);
               $ques_id = $row1["ques_id"];
         }
         echo "$org_id";
         echo "$form_id";
         echo "$manager_id";
         echo "$ques_id";
         echo "$answers[0]";
?>