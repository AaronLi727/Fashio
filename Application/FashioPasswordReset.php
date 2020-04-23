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
 
// Define variables and initialize with empty values
$new_password = "";
$new_password_err  = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
        
    // Check input errors before updating the database
    if(empty($new_password_err)){
        // Prepare an update statement
        $sql = "UPDATE account SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password= password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: FashioLogin.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<html>
<head>
<title> Reset Password</title>
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
	<div id="e0_71"><span id="e0_70">Reset Password</span></div>
<div id="e0_73">
 <div class="form-group">
 	<div id="e0_72">
     <input type="password" Name="new_password" class="form-control" value="<?php echo $new_password; ?>" >
                <span class="help-block"><?php echo $new_password_err; ?></span>
  </div>
</div>
</div>

<div id="e0_76">
                <input type="submit" class="btn btn-primary" Name="Submit" value="Reset">

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
width:148px;
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
