<?php
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: FashioLogin.php");
    exit;
}

require_once "config.php";

?>
<html>
<head>
<title>Settings</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/styles.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=SF+Pro Text&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
	<div id="rectangle">
		<img src ="Status Bar.png" width="375" height="44">
		
	<div id ="e30_5">Settings</div>

 
  <hr/>
<div id="e0_835">
	<a href="FashioEmailReset.php">
  <div id="e0_834"><img src = "mail.png"></div><span id="e0_839"><b>Email</b><span id="e0_840"><?php echo htmlspecialchars($_SESSION["email"]); ?>  </span></a></span>
</div>
<hr>
<div id="e0_835">
  <a href="FashioUserReset.php">
  <div id="e0_834"><img src = "username.png"></div><span id="e0_839"><b>Username</b><span id="e0_840"><?php echo htmlspecialchars($_SESSION["username"]); ?>  </span></a></span>
</div>
<hr>
<div id="e0_835">
  <a href="FashioPasswordReset.php">
  <div id="e0_834"><img src = "password.png"></div><span id="e0_839"><b>Password</b><span id="e0_840"><?php echo htmlspecialchars($_SESSION["password"]); ?>  </span></a></span>
</div>
<hr>
<div id="e0_835">
  <a href="Logout.php">
  <div id="e0_834"><img src = "exit.png"></div><span id="e0_839"><b>Logout</b></a></span>
</div>
<hr>
<div id="e0_835">
  <a href="FashioHelp.php">
  <div id="e0_834"><img src = "help.png"></div><span id="e0_839"><b>Contact Us</b></a></span>
</div>
<hr>
  <div id="botbar">
<rect width="375" heigh="83"><div id="home"><a href="FashioHome.php"><img src="unionnew.png" width="20" height="20"></a></div><div id="search"><a href="FashioSearch.php"><img src="search.png" width="40" height="40"></a></div><div id="add"><a href="FashioAdd.php"><img src="unionadd.png" width="20" height="20"></a></div><div id="comment"><a href="FashioMessage.php"><img src="comment.png" width="40" height="40"></a></div><div id="profile"><a href="FashioProfile.php"><img src="bell.png" width="40" height="40"></a></div></rect></div>
</div>


<style>
#rectangle {
position: relative;
background-color:rgba(255, 255, 255, 1);
opacity:1;
width:375px;
height:812px;
margin: 0 auto;
}
#botbar
{
	position: absolute;
	bottom: 50;
}
#home
{
    position:absolute;
    margin-left:15px;
    margin-top: 9px;
}
#search
{
    position:absolute;
    margin-left:80px;
}
#add
{
    position:absolute;
    margin-left:180px;
    margin-top:9px;
}
#comment
{
    position:absolute;
    margin-left:260px;
}
#profile
{
    position:absolute;
    margin-left:330px;
}
a 
{ 
	text-decoration: none; 
}
#topimg
{
	display:block;
	margin:15px;
	border:1px solid#000;
}
#images
{
	margin:15px;
}
#e30_5 {
color:rgba(0, 0, 0, 1);
opacity:1;
width:235px;
height:40px;
font-family:Roboto;
text-align:center;
font-size:20px;
letter-spacing:-1.5;
line-height:undefined;
margin-left:75px;
}
#e0_836 {
position:relative;
opacity:1;
color:#A46995;
}
#e0_835 {
position:relative;
opacity:1;
width:343px;
height:40px;
}
#e0_834 {
border-radius:500px;
opacity:1;
width:64px;
height:64px;
position:absolute;
left:0px;
top:0px;
margin-top:20px;
margin-left:15px;
}
#e0_839 {
color:rgba(0, 0, 0, 1);
opacity:1;
width:263px;
height:36px;
position:absolute;
left:80px;
top:24px;
font-family:Roboto;
text-align:left;
font-size:13px;
letter-spacing:0;
line-height:18px;
margin-left:5px;
}
#e0_840 {
color:rgba(0, 0, 0, 1);
opacity:1;
width:200px;
height:18px;
position:absolute;
left:80px;
top:0px;
font-family:Roboto;
text-align:right;
font-size:13px;
line-height:18px;
}

#div-wrapper_img
{
	position: absolute;
	bottom:0;
}
</style>
</body>
</html>
