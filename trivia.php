<?php


session_start();


$con = mysqli_connect('remotemysql', ' hx0HNfsPC0', 'BUKkixZON0');

if(!mysqli_select_db($con, 'userregistration'))
{
    echo 'error';
}
if(isset($_POST['bscore'])&&isset($_POST['sscore']))
{
    $bname = $_POST['bscore'];
    $sname = $_POST['sscore'];
    echo" ";


$subsc = "insert into score(buzzfeed, seventeen) values ('$bname', '$sname')"; 

if(!mysqli_query($con, $subsc))
{
   echo "error";
}
else
{
    echo "  ";
}
if(isset($_POST['score']))
   {
       if($bname==50&&$sname==120)
       {
           echo "Amazing job";  
       }
       else if($bname>=40 && $bname<50 || $sname>=110 && $sname<120)
       {
           echo "ah! close";
       }
       else if($bname>=30 && $bname<40 || $sname>=100 && $sname<110)
       {
           echo "you getting there";
       }
       else if($bname>=20 && $bname<30 || $sname>=90 && $sname<100)
       {
           echo "give it another try";
       }
       else
       {
           echo "Invalid score";
       }
        
   }
}
header("url=trivia.php");


?>

<html>
<head>
     <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="button.css">
    <title>F.R.I.E.N.D.S Trivia</title>
    <body>
      
       <div class="head"><h1>Good choice, Lets start the trivia!</h1> </div> 
        <div class="head"><h2> These are some best Trivias I've found</h2></div>
        <div class="head" style=" align-content: center;
        backface-visibility: visible;
        background-color: aliceblue;
        color: white;
        align-items: center;
        padding: 20px 30px;
        text-align: center;
       font-family: monospace;
        align-items: center;
        align-self: center; "><a href="https://www.buzzfeed.com/angelicaamartinez/friends-character-trivia-quiz-hard">Buzzfeed Trivia</a> </div> 
        
        
        <div class="head" style=" align-content: center;
        backface-visibility: visible;
        background-color: aliceblue;
        color: white;
        align-items: center;
        padding: 20px 30px;
        text-align: center;
       font-family: monospace;
        align-items: center;
        align-self: center; "><a href="https://www.seventeen.com/celebrity/celeb-quizzes/a25048028/friends-quiz-trivia/">Seventeen.com Trivia</a></div>
   
        <div class="head"><h2>Give me your scores, so I can say how huge of a fan you are</h2>
            
    <form method="post" action="../userregistration/trivia.php">       
            Scores: 
           <input type="text" name="bscore" placeholder="Buzzfeed Score" required/>
           <input type="text" name="sscore" placeholder="Seventeen.com Score" required/>
                
        <input style=" align-content: center;
        backface-visibility: visible;
        background-color: cadetblue;
        color: white;
        background: url(buttonb.jpg);
        align-items: center;
        padding: 10px 10px;
         border-radius: 10px;              
        text-align: justify;
       font-family: monospace;
        align-items: center;
        align-self: center;
        border: 2px solid #ffffff;"
               type="submit" name="score" value="Submit"/>
        
      
           </form> </div>
        
        <button style="align-content: center;
        backface-visibility: visible;
        background-color: cadetblue;
        color: white;
        background: url(buttonb.jpg);
      border-radius: 10px;
          border: 2px solid #ffffff;
         align-items: center;
        padding: 20px 30px;
        text-align: justify;
       font-family: monospace;
        align-items: center;
        align-self: center;" onclick="document.location='../userregistration/home.php'">Back to home</button>
        
        
    </body>
    </head></html>