
<?php
 session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
   header("location: FashioLogin.php");
   exit;
}
require_once "config.php";

?>

<html>
<head>
	<title> Home </title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/styles.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=SF+Pro Text&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
	<div id="rectangle">
		<img src ="Status Bar.png" width="375" height="44">
	<div id="e0_71">
		<span id="e0_70">Discover</span>
		
			<span id ="e0_69"><a href="FashioSettings.php"><img src = "setting.png"></a></span>
		</div>
<span id="e4_411">New Trends</span>
<div id="topimg">
<a href ="FashioTimPic.html"><img src ="66243095_351284892222570_2520770567785894621_n.jpg" width="343" height="387" ></a>
</div>
<div id="e0_699"><a href="FashioTimDessaint.php"><img src="Ellipse.jpg"><span id="ei0_699_0124">Tim Dessaint</span></a>
  
</div>
<span id="e4_411">Browse All</span>
<div id="images">
<a href="FashioKrisWu.html"><img src ="79385083_170163824210587_5729399682148873834_n.jpg" width="167" height="350"></a>
<a href="FashioMoney.html"><img src ="76989407_608008319938391_1385609049582148683_n.jpg" width="167" height="350"></a>
<a href="FashioJoji.html"><img src ="15876544_716553648513871_133421187660251136_n.jpg" width="167" height="350"></a>
<a href="FashioZionT.html"><img src ="56852998_286853802234346_4356387674581360596_n.jpg" width="167" height="350"></a>
<a href="FashioJoji2.html"><img src ="70185814_231120171192718_6041514338953537345_n.jpg" width="167" height="350"></a>
<a href="FashioRichBrian.html"><img src ="73283263_148950533116015_294811286300787530_n.jpg" width="167" height="350"></a>
<a href="FashioKrisWu2.html"><img src ="80523651_2457120311271161_9077445244976362879_n.jpg" width="167" height="350"></a>
<a href="FashioZionT2.html"><img src ="42766156_303660210226542_244335299875711211_n.jpg" width="167" height="350"></a>
</div>
<div id="e0_76">
  <div id="ei0_76_043"></div><span id="ei0_76_046"><a href="FashioHomeExtended.php" style="color:black;">SEE MORE</a></span>
</div>
        <div id="botbar">
<rect width="375" heigh="83"><div id="home"><a href="FashioHome.php"><img src="unionnew.png" width="20" height="20"></a></div><div id="search"><a href="FashioSearch.php"><img src="search.png" width="40" height="40"></a></div><div id="add"><a href="FashioAdd.php"><img src="unionadd.png" width="20" height="20"></a></div><div id="comment"><a href="FashioMessage.php"><img src="comment.png" width="40" height="40"></a></div><div id="profile"><a href="FashioProfile.php"><img src="bell.png" width="40" height="40"></a></div></rect></div>
</div>


<style>
#rectangle {
position: relative;
background-color:rgba(255, 255, 255, 1);
opacity:1;
width:375px;
height:2267px;
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
#e0_71 {
position:relative;
background-color:rgba(255, 255, 255, 1);
opacity:1;
width:148px;
height:40px;
margin-top: 30px;
margin-bottom: 50px;
}
#e0_70 {
color:rgba(0, 0, 0, 1);
opacity:1;
width:148px;
height:40px;
position:absolute;
left:0px;
top:0px;
font-family:Comfortaa;
text-align:left;
font-size:36px;
letter-spacing:-1.5;
line-height:undefined;
margin:15px;
}
#e0_69 {
color:rgba(0, 0, 0, 1);
opacity:1;
width:148px;
height:40px;
position:absolute;
left:0px;
top:0px;
font-family:Comfortaa;
text-align:left;
font-size:36px;
letter-spacing:-1.5;
line-height:undefined;
margin-left: 330px;
}
#e4_411 {
color:rgba(0, 0, 0, 1);
opacity:1;
width:97px;
height:20px;
font-family:Roboto;
text-align:left;
font-size:17px;
margin:15px;
line-height:undefined;
}
#e0_699 {
position:relative;
background-color:rgba(255, 255, 255, 1);
opacity:1;
width:139px;
height:28px;
margin:15px;
margin-bottom: 50px;
}
#ei0_699_0124 {
color:rgba(0, 0, 0, 1);
opacity:1;
width:77px;
height:15px;
position:absolute;
left:36px;
top:0px;
font-family:Roboto;
text-align:left;
font-size:13px;
letter-spacing:0;
line-height:undefined;
}
#ei0_699_0126 {
color:rgba(0, 0, 0, 0.800000011920929);
opacity:1;
width:68px;
height:13px;
position:absolute;
left:36px;
top:15px;
font-family:Roboto;
text-align:left;
font-size:11px;
letter-spacing:0;
line-height:undefined;
}
#ei0_699_0127 {
border-radius:500px;
opacity:1;
width:28px;
height:28px;
position:absolute;
left:0px;
top:0px;
}
#e0_76 {
position:relative;
opacity:1;
width:343px;
height:52px;
margin: 15px;
}
#ei0_76_043 {
opacity:1;
border:2px solid rgba(0, 0, 0, 1);
width:343px;
height:52px;
position:absolute;
left:0px;
top:0px;
border-top-left-radius:6px;
border-top-right-radius:6px;
border-bottom-left-radius:6px;
border-bottom-right-radius:6px;
}
#ei0_76_046 {
color:rgba(255, 255, 255, 1);
opacity:1;
position:absolute;
left:153.28741455078125px;
top:19px;
font-family:Roboto;
text-align:center;
font-size:14px;
line-height:undefined;
}

</style>
</body>
</html>
