<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Fashiologin.php");
    exit;
}
 
// Include config file
require_once "config.php";

  //creating connection to database
$con=mysqli_connect("localhost","root","root","Test");
  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);
$Subject = $con->real_escape_string($_POST['subject']);
$Message = $con->real_escape_string($_POST['message']);
  //query to insert the variable data into the database
$sql="INSERT INTO contactus (name, email, subject, message) VALUES ('".$Name."','".$Email."', '".$Subject."', '".$Message."')";

  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
echo "<script>alert('Thank You! We will get back to you soon!');";
echo 'window.location.href ="FashioHome.php";';
echo '</script';
}

?>
 
<html>
<head>
<title> Contact Us</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=SF+Pro Text&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <meta password="viewport" content="width=device-width, initial-scale=1">
<body>
	<div id="rectangle">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<img src ="Status Bar.png" width="375" height="44">
		<div id="space">
		<a href="FashioSettings.php"><img src ="union.png" width="12.21" height="11.35"></a>
	</div>
	<div id="e0_71"><span id="e0_70">Contact Us</span></div>
	<div id="e0_73">
 <div class="form-group">
 	<div id="e0_72">
     <input type="text" Name="name" class="form-control" placeholder ="Name" required>
  </div>
</div>
</div>
<div id="e0_73">
 <div class="form-group">
 	<div id="e0_72">
     <input type="email" Name="email" class="form-control" placeholder ="Email" required>
  </div>
</div>
</div>
<div id="e0_73">
  <div class="form-group">
 	<div id="e0_72">
     <input type="text" Name="subject" class="form-control" placeholder="Subject" required>
  </div>
</div>
</div>
<div id="e0_73">
 <div class="form-group">
<textarea type="text" name="message" class="form-control" rows="3" cols="28" rows="5" placeholder="Message"></textarea> 

</div>
</div>
<br/>
<div id="e0_76">
      <input type="submit" name="submit" value="Send" class="btn-btn-primary">

</div>
</form>
</div>


<style>
  
#rectangle {
position: relative;
background-color:rgba(255, 255, 255, 1);
opacity:1;
width:375px;
height:812px;
border:1px solid#000;
margin: 0 auto;
}
#space
{
	margin:15px;
}
a 
{ 
	text-decoration: none; 
}
#e0_71 {
position:relative;
background-color:rgba(255, 255, 255, 1);
opacity:1;
width:148px;
height:40px;
margin-top: 50px;
}
#e0_70 {
color:rgba(0, 0, 0, 1);
opacity:1;
width:300px;
height:40px;
position:absolute;
left:0px;
top:0px;
font-family:Comfortaa;
text-align:left;
font-size:36px;
margin:15px;
letter-spacing:-1.5;
line-height:undefined;
}
#e0_73 {
position:relative;
background-color:rgba(255, 255, 255, 1);
opacity:1;
width:343px;
height:52px;
margin:15px;
margin-top:30px;
}
#e0_72 {
background-color:rgba(255, 255, 255, 1);
opacity:1;
border:2px solid rgba(0, 0, 0, 1);
width:343px;
height:42px;
position:absolute;
left:0px;
top:0px;
}
#e0_74 {
color:rgba(0, 0, 0, 1);
opacity:1;
width:38px;
height:18px;
position:absolute;
left:17px;
top:17px;
font-family:Roboto;
text-align:left;
font-size:15px;
letter-spacing:0;
line-height:undefined;
}
#e0_76 {
position:relative;
opacity:1;
width:343px;
height:52px;
margin: 15px;
margin-top:30px;
}
#ei0_76_043 {
background-color:rgba(0, 0, 0, 1);
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
width:35px;
height:15px;
position:absolute;
left:153.28741455078125px;
top:19px;
font-family:Roboto;
text-align:center;
font-size:13px;
line-height:undefined;
}
</style>
</body>
</html>
