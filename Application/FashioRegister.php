<?php

require_once 'config.php';

$email = $username = $password = "";
$email_err = $username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        $email_err = "Please enter a valid email.";
    }
    else{
       
        $sql = "SELECT id FROM account WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = trim($_POST["email"]);
            
            if(mysqli_stmt_execute($stmt)){
                
                mysqli_stmt_store_result($stmt);
            
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }

            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        
         }
        
        mysqli_stmt_close($stmt);
    }



    if(empty($_POST["username"])){
        $username_err = "Please enter a username.";
    } elseif(preg_match("/^[a-zA-Z ]*$/",$username)){
        $username = trim($_POST["username"]);
    } else{
        $username_err = "Only letters and white spaces.";
    }

     if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    if(empty($email_err) && empty($username_err) && empty($password_err)){
        
        
        $sql = "INSERT INTO account (email, username, password) VALUES (? ,?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "sss", $param_email, $param_username, $param_password);
            
          
            $param_email = $email;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            
            
            if(mysqli_stmt_execute($stmt)){
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] =$id;
                $_SESSION["email"]=$email;
                $_SESSION["username"]= $username;
                header("location: FashioHome.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        
        mysqli_stmt_close($stmt);
    }
    
   
    mysqli_close($link);
}

?>

<html>
<head>
<title> Register </title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=SF+Pro Text&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
	<div id="rectangle">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<img src ="Status Bar.png" width="375" height="44">
			<div id="space">
		<a href="FashioLoggedOut.html"><img src ="union.png" width="12.21" height="11.35"></a>
	</div>
	<div id="e0_71"><span id="e0_70">Register</span></div>

<div id="e0_73">
 <div class="form-group">
 	<div id="e0_72">
    <input type="email" Name ="email" class="form-control" placeholder="Email">
     <span class="help-block"><?php echo $email_err; ?></span>
  </div>
</div>
</div>

<div id="e0_73">
 <div class="form-group">
 	<div id="e0_72">
    <input type="text" Name ="username" class="form-control" placeholder="Username">
     <span class="help-block"><?php echo $username_err; ?></span>
  </div>
</div>
</div>

<div id="e0_73">
 <div class="form-group">
 	<div id="e0_72">
    <input type="password" Name ="password" class="form-control" placeholder="Password">
     <span class="help-block"><?php echo $password_err; ?></span>
  </div>
</div>
</div>
<div id="e0_76">
  <div class="form-group">
 <input type="submit" class="btn btn-primary" value="Register">
</div>
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
