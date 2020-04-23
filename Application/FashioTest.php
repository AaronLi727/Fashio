<?php
    $con=mysqli_connect("localhost","root","root","Test");
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $result = mysqli_query($con,"SELECT username FROM account where username = '".$_GET["username"]."' ");
    
    
    while($row = mysqli_fetch_array($result))
    {
        
        $name = "". $row['username'] . "";
        
    }
    
    
    mysqli_close($con);
?>



<html>
<head>
<title> <?php echo $name ;?> Profile </title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/styles.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=SF+Pro Text&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
    <div id="rectangle">
        <img src ="Status Bar.png" width="375" height="44">
        <div id="e30_4"><img src ="ellipse.png"></div>
    <div id ="e30_5"><?php echo $name ?> </div>

<div id="e0_76">
  <div id="ei0_76_043"></div><span id="ei0_76_046"><a href="FashioMessage.php" style="color:black;">MESSAGE</a></span>
</div>
<div id="images">
<img src ="87577584_2832777576814217_1361661329996660582_n.jpg" width="167" height="350">
<img src ="83333936_518642188856634_618350334942866486_n.jpg" width="167" height="350">
<img src ="79590866_381461019286168_630952522806198272_n.jpg" width="167" height="350">
<img src ="67452516_2375327286018382_3136940182797086057_n.jpg" width="167" height="350">
<img src ="66243095_351284892222570_2520770567785894621_n.jpg" width="167" height="350">

</div>
<div id="e0_76">
  <div id="ei0_76_043"></div><span id="ei0_76_046"><a href="" style="color:black;">SEE MORE</a></span>
</div>
<div id="botbar">
<rect width="375" heigh="83"><div id="home"><a href="FashioHome.html"><img src="new.png" witdh="40" height="40"></a></div><div id="search"><a href="FashioSearch.html"><img src="search.png" width="40" height="40"></a></div><div id="add"><img src="add.png" width="70" height="40"></div><div id="comment"><a href="FashioMessage.html"><img src="comment.png" width="40" height="40"></a></div><div id="profile"><a href="FashioTimDessaint.html"><img src="bell.png" width="40" height="40"></a></div></rect></div>
</div>
</div>


<style>
#rectangle {
position: relative;
background-color:rgba(255, 255, 255, 1);
opacity:1;
width:375px;
height:1549px;
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
}
#search
{
    position:absolute;
    margin-left:80px;
}
#add
{
    position:absolute;
    margin-left:160px;
}
#comment
{
    position:absolute;
    margin-left:270px;
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
#e30_4 {
border-radius:500px;
opacity:1;
width:128px;
height:128px;
margin-top:30px;
margin-left:130px;
margin-bottom: 30px;
}
#e30_5 {
color:rgba(0, 0, 0, 1);
opacity:1;
width:235px;
height:40px;
font-family:Comfortaa;
text-align:center;
font-size:36px;
letter-spacing:-1.5;
line-height:undefined;
margin-left:75px;
margin-bottom: 20px;
}
#e30_6 {
color:rgba(0, 0, 0, 1);
opacity:1;
width:103px;
height:15px;
font-family:Comfortaa;
text-align:center;
font-size:13px;
letter-spacing:-1.5;
line-height:undefined;
margin-top:15px;
margin-bottom: 30px;
margin-left:150px;
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