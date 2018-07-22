<?php
session_start() ;
include('headm.html');
?>
<DOCTYPE html>
<html>
<head>
<title>
head_profile
</title>
<style>
#links{
a:link{
	color: #FFF;

}
a:visited{
	color: #FFF;
}
}


</style>
</script>
</head>
<body bgcolor="#ccccb3">

<img src="headProfile.jpg" width="1335px" height="300px">

<div align="center" style="font-family: Rockwell; font-size: 28px";id="links">
<a href="addManager.php">Add a New Manager</a>
<br><br>
<a href="addStore.php">Add a New Store</a>
<br><br>
<a href="form_name.php">Create a new Form</a>
<br><br>
<a href = "choose_form_ans.php">View form submissions</a>
<br><br>
<a href = "shsale.php">View sales</a>
</div>
</body>
</html>