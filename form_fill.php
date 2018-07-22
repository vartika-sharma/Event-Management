<?php 
session_start();
include "notification.php";
include"heade.html";
?>
<!DOCTYPE html>
<html>
<head>
<title>Form Fill</title>
</head>
<body bgcolor="#ebebe0">

<img src="addManager.jpeg" width="100%" height="90%"  style="position:absolute; top:60px;left:0px">
<div style="position: absolute;top: 130px;left:550px;">
<table style="font-size:24px;font-family: Malgun Gothic;padding: 10px"  >
<form method="post" id="form fill" action="view_form.php">
<tr>
<td>Form Names: </td>
</tr>

<?php

	
                include"add_store.php";
                $username = $_SESSION['username'];
               // echo $username;
                $manager_id=$_SESSION['password'];
				$sql = "SELECT * FROM store_managers WHERE name = '".$username."'";
		         $result = mysqli_query($db,$sql);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];
		         //$org_name = $row["org_name"];
		         echo $org_id;

				$sql = "SELECT * FROM form_assign WHERE org_id = '".$org_id."'and manager_id='".$manager_id."'";
		         $result = mysqli_query($db,$sql);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		        
		         echo "<select name = 'form_id'>";
		         while($row)
		         {
		         	
		         	$form_name = $row["form_name"];
		         	$form_id = $row["form_id"];
		         	echo "$form_name";//
		         	echo "<option>$form_id</option> ";

		         	
		           	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		         }
		         echo "</select>";
?>
</td>
</tr>
<tr><td align="center" colspan=2><input type="submit" style="width:100px;height: 40px" name = "form_choose" value="submit"></td></tr></form></table>
</div></body></html>
