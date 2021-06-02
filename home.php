<?php

session_start();

if(isset($_POST['button2'])) {
            include "../userregistration/trivia.php";
        }

if(isset($_POST['button3'])) {
            include "../userregistration/login.php";
        }

if(isset($_POST['ross']))
    
{
    include "../userregistration/ross.php";
}

if(isset($_POST['chan']))
    
{
    include "../userregistration/chan.php";
}
?>


<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="syles.css">
    <link rel="stylesheet" type="text/css" href="button.css">
    <link rel="stylesheet" type="text/css" href="gout.css">
     <link rel="stylesheet" type="text/css" href="char.css">
  
    <title> Home Page </title>
    <body>
        <h1 style="align-content: center;
        backface-visibility: visible;
        background-color: cadetblue;
        color: #004d4d;
        
        align-items: center;
        padding: 20px 30px;
        text-align: center;
       font-family: arial;
        text-shadow: 1px 1px ghostwhite;
        align-items: center;
        align-self: center;" >Home Page</h1>
     <div class="home">
    
         <h3 style="align-content: center;
        backface-visibility: visible;
        background-color: cadetblue;
        color: 	 #c2d6d6;
        
        align-items: center;
        padding: 20px 30px;
        text-align: left;
       font-family: arial;
        text-shadow: 1px 1px black;
        align-items: center;
        align-self: center;"> Your Login was successful, <?php echo $_SESSION['username']; ?></h3>
             <h4 style="align-content: right;
        backface-visibility: visible;
        background-color: cadetblue;
        color: 	 #c2d6d6;
        
        align-items: right;
        padding: 10px 10px;
        text-align: right;
       font-family: monospace;
        text-shadow: 1px 1px black;
        align-items: center;
        align-self: center;"><marquee>how you doin'?  ;) </marquee></h4> 
             <div class = "black" style="text-shadow: 1px 1px white;
   color: black;
   text-align: center;
   color:paleturquoise;
   background: rgba(0, 1, 19, 0.3);
   padding: 10px 10px;"> <h2>Hit button if you wanna play a Trivia, else you could explore the 6 friends's corners<br> Just click on them to know more about them </h2> </div>
        </div>
        <div class="btn">
        <form method="post" action="trivia.php">
            <input type ="submit" name="button2" style="align-content: center;
        backface-visibility: visible;
        background-color: cadetblue;
        color: white;
        background: url(buttonb.jpg);
        border-radius: 10px;
         border: 2px solid #ffffff;
         align-items: center;
        padding: 10px 10px;
        text-align: justify;
       font-family: monospace;
        align-items: center;
        align-self: center;" value="Hit Me"></form>
         <form method="post" action="login.php">
            <input type ="submit" name="button3" style="align-content: right;
        backface-visibility: visible;
        background-color: cadetblue;
        color: white;
          border: 2px solid #ffffff;
        border-radius: 10px;
        align-items: right;
        padding: 10px 10px;
        background: url(buttonb.jpg);
        text-align: justify;
       font-family: monospace;
        align-self: right;" value="Back"></form>  
   
        </div>
        <form method="post" action="ross.php">
        <input name="ross" type="image" src="bross.jpg" height="200" width="250" > </form>
                <form method="post" action="chan.php">
             <input name="chan" type="image" src="chan.jpg" height="200" width="250" >  </form> 
            <form method="post" action="joey.php">
             <input name="chan" type="image" src="joeycol.jpg" height="200" width="250" >  </form>
            <form method="post" action="monica.php">
             <input name="chan" type="image" src="monica.jpg" height="200" width="250" >  </form>
          <form method="post" action="rach.php">
             <input name="chan" type="image" src="rach.jpg" height="200" width="250" >  </form>
        
          <form method="post" action="pheebs.php">
             <input name="chan" type="image" src="pheebs.jpg" height="200" width="250" >  </form>
        
    
   
    </body>
     </head>
    <html>