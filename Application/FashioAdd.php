<?php
// Initialize the session
session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
   header("location: FashioLogin.php");
   exit;
}

 require_once "config.php";
 
 $connect = mysqli_connect("localhost", "root", "root", "Test");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script></script>';  
      }  
 } 
 ?>  
 
 <html>  
      
           <title>Creation</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/styles.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=SF+Pro Text&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    
      <body> 
           <div id="rectangle">
        <img src ="Status Bar.png" width="375" height="44">
        <div id="e30_4"><img id="imageOne" src ="ellipseeyes.png" onclick="changeImage()"/></div>
        <script>
            var image =  document.getElementById("imageOne");

            function changeImage()
            {
                if (image.getAttribute('src') == "ellipseeyes.png")
                {
                    image.src = "ellipsedino.png";
                }
                else if(image.getAttribute('src') =="ellipsedino.png")
                {
                    image.src ="ellipseegg.png";
                }
                else if(image.getAttribute('src') =="ellipseegg.png")
                {
                    image.src ="ellipsecat.png";
                }
                else if(image.getAttribute('src') =="ellipsecat.png")
                {
                    image.src = "ellipsedog.png";
                }
                else if(image.getAttribute('src') =="ellipsedog.png")
                {
                    image.src ="ellipsepika.png";
                }
                else
                {
                    image.src="ellipseeyes.png";
                }
            }
        </script>
    <div id ="e30_5"><?php echo htmlspecialchars($_SESSION["username"]); ?> </div>

                 
                <div id ="e0_76">
                <form method="post" enctype="multipart/form-data">  
                    
                        
                     <input type="file" name="image" id="image" class ="file"/>  
                     <input type="submit" name="insert" id="insert" value="Insert" class="submit"/><
                       
                </form> 
                </div>

                    
             
           
                <br/> 
                <br/>
                <div id="images">
                      
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="350" width="167"  />  
                             
                          </tr>  
                     ';  
                }  
                ?>  
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
height:1549px;
margin: 0 auto;
}
.file
{
border:2px solid rgba(0, 0, 0, 1);
color:black;
background-color:white;
opacity:1;
width:343px;
height:52px;
position:absolute;
top:0px;
cursor:pointer;
display:inline-block;
font-family:Comfortaa;
text-align:center;
font-size:15px;
border-top-left-radius:6px;
border-top-right-radius:6px;
border-bottom-left-radius:6px;
border-bottom-right-radius:6px;
 }
 .submit
 {
border:2px solid rgba(0, 0, 0, 1);
color:black;
background-color:white;
opacity:1;
width:343px;
height:52px;
position:absolute;
top:50px;
font-family:Comfortaa;
text-align:center;
font-size:14px;
line-height:undefined;
border-top-left-radius:6px;
border-top-right-radius:6px;
border-bottom-left-radius:6px;
border-bottom-right-radius:6px;
 }
 
.img-thumnail
{
   
    margin:10px;
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
font-size:2em;
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
#ei0_76_044 {
opacity:1;
border:2px solid rgba(0, 0, 0, 1);
width:343px;
height:52px;
position:absolute;
left:0px;
top:50px;
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
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  

<
