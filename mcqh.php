<!DOCTYPE html>
<html>
<head>
<title> mcq</title>
</head>
<body>	
<img src="option.jpg" style="width:1335px ;height:650px">
<div  style="font-size:25px ;font-family:Berlin Sans FB ;color:#FFF ;position:absolute; top:0px ;right:10px">
Hey!

<br>
<a href = "logout.php">Logout</a>
</div>

		         
		        <div style="position:absolute;top:30px;left:20px; background-color:rgba(255,255,255,0.5);font-size:50px;font-family:Berlin Sans FB;color:#000">

				 <table align="center">
				
				<form method = "post" id="store_manager" action = "mcq.php">
				 <tr><td>Enter the question:</td><td><input type="text" name="question"></td></tr>
				 <tr><td>Option 1:</td><td><input type="text" name="option1"></td></tr>
				 <tr><td>Option 2:</td><td><input type="text" name="option2"></td></tr>
				 <tr><td>Option 3:</td><td><input type="text" name="option3"></td></tr>
				 <tr><td>Option 4:</td><td><input type="text" name="option4"></td></tr>
				 <tr><td colspan=2><input type="submit" name = "que1" value="next question"></td></tr>
				 </form>

				 <form method = "post" id="store_manager" action = "form_make.php">
				 <tr><td colspan=2><input type="submit" name = "type" value="Choose another type:"></td></tr>
			
				 </form>
				 </table>
				 </div>
				 </body>

				

