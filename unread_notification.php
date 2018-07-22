<?php
session_start();
	require_once("config.php");

	$username = $_SESSION["username"];

	$sql = "SELECT * FROM store_managers WHERE name = '".$username."'";

	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$manager_id = $_SESSION["password"];
	$sql = "SELECT * FROM messageTest WHERE status = 'unread' and manager_id = '".$manager_id."'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	 echo mysqli_num_rows($result);
?>