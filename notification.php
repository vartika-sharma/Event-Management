<?php
	require_once("config.php");
?>
<style>
#notification_count
{
padding: 3px 7px 3px 7px;
background: #800080;
font-weight: bold;
margin-left: 77px;
border-radius: 9px;
-moz-border-radius: 9px;
-webkit-border-radius: 9px;
position: absolute;
margin-top: -1px;
margin-left: 30px;
font-size: 15px;
float:right;
}
</style>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> 
<script type="text/javascript" charset="utf-8">
 
function addmsg(type, msg){
 
$('#notification_count').html(msg);
 
}
 
function waitForMsg(){
 
$.ajax({
type: "GET",
url: "unread_notification.php",
 
async: true,
cache: false,
timeout:50000,
 
success: function(data){
addmsg("new", data);
setTimeout(
waitForMsg,
1000
);
},
error: function(XMLHttpRequest, textStatus, errorThrown){
addmsg("error", textStatus + " (" + errorThrown + ")");
setTimeout(
waitForMsg,
15000);
}
});
};
 
$(document).ready(function(){
 
waitForMsg();
 
});
 function getNotification()
 {

 }
</script>
<span id="notification_count"></span>
<a href="notify.php" id="notificationLink" onclick = "return getNotification()"><img src="notification.png" width="42" height="42" border="0"></a>
<div id="HTMLnoti" style="textalign:center"></div>	
?>