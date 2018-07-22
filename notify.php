<?php
session_start() ;
include "notification.php";
include"heade.html";
  
  echo"<img src='view_ans.jpg ' style='width:1335px;height:580px;position:absolute;top:60px;opacity:0.5'>";
  echo"<div style='position:absolute;top:150px;left:450px;font-face:Eras Demi ITC;font:size:33px'>";

		$username = $_SESSION["username"];
	$manager_id = $_SESSION["password"];
		$sql = "SELECT * FROM store_managers WHERE name = '".$username."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];
		         //echo $manager_id;
		         //echo $org_id;
	$sql = "SELECT * FROM messageTest WHERE org_id = '".$org_id."' and status = 'unread' and manager_id = '".$manager_id."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			         //echo $org_id;
			         /*if($row)
			         {
			         	echo "rgrg0";
			         }
			         else
			         {
			         	echo "nonono";
			         }*/
/*			         			         if(!$row)

                       echo"<h2>Sorry, you don't have any notifications</h2>";
         else*/
		while($row)

		{
			echo $row["notification"];
			echo "<br><br>";
			$id = $row["id"];
			$query = "UPDATE messageTest SET status = 'read' WHERE id = '".$id."'";
			 mysqli_query($db,$query);
			 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		}
		echo"</div>";


?>