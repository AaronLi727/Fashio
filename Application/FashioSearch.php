<?php
 session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
   header("location: FashioLogin.php");
   exit;
}
require_once "config.php";

?>
<!DOCTYPE html>
<html>
   <head>
    <title> Search </title>
      <link rel="stylesheet" type="text/css" href="CSS/styles.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <style>
         body{
         font-size: 14px;
         }
         @import url(https://fonts.googleapis.com/css?family=Open+Sans);

         body{
           background: #f2f2f2;
           font-family: 'Open Sans', sans-serif;
         }
/*
         .search {
           width: 100%;
           position: relative;
           display: flex;
         }

         .searchTerm {
           width: 100%;
           border: 2px solid #000000;
           padding: 5px;
           height: 40px;
           border-radius: 5px 5px 5px 5px;
           outline: none;
           color: #000000;
         }

         .searchTerm:focus{
             color: #000000;
             border: 3px solid #9d00ff;

         }
         .searchButton {
             position: relative;
             right: 10%
         }
          
         /*Resize the wrap to see the search bar change!*/
         .search-box{
                     background-color:rgba(255, 255, 255, 1);
opacity:1;
border:2px solid rgba(0, 0, 0, 1);
width:343px;
height:36px;
position:absolute;
left:0px;
top:0px;
                     }
                     .search-box input[type="text"]{
                     height: 32px;
                     padding: 5px 10px;
                     border: 1px solid #CCCCCC;
                     font-size: 14px;
                     }
                     .result{
                     position: absolute;
                     z-index: 999;
                     top: 100%;
                     left: 0;
                     }
                     .search-box input[type="text"], .result{
                     width: 100%;
                     box-sizing: border-box;
                     }
                     /* Formatting result items */
                     .result p{
                     background: #ffffff;
                     margin: 0;
                     padding: 7px 10px;
                     border: 1px solid #CCCCCC;
                     border-top: none;
                     cursor: pointer;
                     }
                     .result p:hover{
                     background: #f2f2f2;
                     }
         .wrap{
           width: 50%;
           position: absolute;
           top: 200%;
           left: 50%;
           transform: translate(-50%, -50%);
         }
      
      </style>
       <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                  <script type="text/javascript">
                     var username;
                     
                     $(document).ready(function(){
                                       $('.search-box input[type="text"]').on("keyup input", function(){
                                                                              /* Get input value on change */
                                                                              var inputVal = $(this).val();
                                                                              var resultDropdown = $(this).siblings(".result");
                                                                              if(inputVal.length){
                                                                              $.get("vp/backend-search.php", {term: inputVal}).done(function(data){                                     resultDropdown.html(data);
                                                                                                                                 });
                                                                              } else{
                                                                              resultDropdown.empty();
                                                                              }
                                                                              });
                                       
                                       // Set search input value on click of result item

                                       $(document).on("click", ".result p", function(){
                                                      $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                                                      //sets search field val
                                                      
                                                      $(this).parent(".result").empty();
                                                      //clears dropdown
                                                      username = $(this).text().replace(/\s/g,'');
                                                      
                                                      
                                                      window.open("FashioTimDessaint.php?username=" +username,"_self");
                                                 
                                                  

                                                      
                                                      
                                                      });
                                       });
                  </script>
   </head>
   <body>
	<div id="rectangle">
		<img src ="Status Bar.png" width="375" height="44">
		<div id="space">
		<a href="FashioHome.php"><img src ="union.png" width="12.21" height="11.35"></a>
	</div>
	<div id="e0_71"><span id="e0_70">Search</span></div>
<div id="e0_73">
  	<div class="search-box">
                    
                        <input type="text"  class="form-control" placeholder="Search For User">
                        <div class ="result"></div>
                    
 
</div>
</div>
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
margin-top: 50px;
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

height:18px;
position:absolute;
left:17px;
top:17px;
font-family:Roboto;
text-align:left;
font-size:15px;
line-height:undefined;
}

</style>
</body>     
</html>



<!--
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/styles.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=SF+Pro Text&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
	<div id="rectangle">
		<img src ="Status Bar.png" width="375" height="44">
		<div id="space">
		<a href="FashioHome.html"><img src ="union.png" width="12.21" height="11.35"></a>
	</div>
	<div id="e0_71"><span id="e0_70">Search</span></div>
<div id="e0_73">
  <div id="e0_72"></div><span id="e0_74">Search all photos</span>
</div>

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
margin-top: 50px;
}
#e0_72 {
background-color:rgba(255, 255, 255, 1);
opacity:1;
border:2px solid rgba(0, 0, 0, 1);
width:343px;
height:52px;
position:absolute;
left:0px;
top:0px;
}
#e0_74 {
color:rgba(0, 0, 0, 1);
opacity:1;

height:18px;
position:absolute;
left:17px;
top:17px;
font-family:Roboto;
text-align:left;
font-size:15px;
line-height:undefined;
}

</style>
</body>
</html>
