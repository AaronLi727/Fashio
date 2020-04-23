<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: FashioHome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $username = $password = "";
$email_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, username, password FROM account WHERE email= ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            $_SESSION["username"] = $username;
                            // Redirect user to welcome page
                            header("location: FashioHome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $email_err = "No account found with that username.";
                }
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
<title> Login </title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=SF+Pro Text&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <meta email="viewport" content="width=device-width, initial-scale=1">
<body>
	<div id="rectangle">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<img src ="Status Bar.png" width="375" height="44">
		<div id="space">
		<a href="FashioLoggedOut.html"><img src ="union.png" width="12.21" height="11.35"></a>
	</div>
	<div id="e0_71"><span id="e0_70">Log In</span></div>
<div id="e0_73">
 <div class="form-group">
 	<div id="e0_72">
     <input type="email" Name="email" class="form-control" placeholder ="Email" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
  </div>
</div>
</div>

<div id="e0_73">
 <div class="form-group">
 	<div id="e0_72">
    <input type="password" Name="password" placeholder = "Password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
  </div>
</div>
</div>

<div id="e0_76">
                <input type="submit" class="btn btn-primary" Name="Submit" value="Login">

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
