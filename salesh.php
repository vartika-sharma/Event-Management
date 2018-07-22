<?php 
session_start() ;
include "notification.php";
include"heade.html";
?>
<!DOCTYPE html>
<html>
<head>
<title>
Sales
</title>
<style>


</style>
</head>
<body>
<img src="sales.jpeg" width="1335px" height="570px" style="opacity: 0.7 ">
<div align="center"style="font-family: Rockwell; font-size: 28px">

<div style="position: absolute;top:150px;left:500px ;font-size:30px;background-color:rgba(255,255,255,0.5) ">
<h3> Enter data on daily basis</h3>
<table style="font-family:Franklin Gothic Demi ; font-size:30px">
<form method="post" id="daily" action="sales.php">

<tr><td>Sales </td><td><input type="number" step="any" name="sale"></td></tr>
<tr><td>Purchase </td><td><input type="number" step="any" name="purchase"></td></tr>
<tr><td colspan="2"> <input type="submit" name="add_detail" value ="submit the details"></td></tr>
</form>
</table>
</div>
</div>
</body>

