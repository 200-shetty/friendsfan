
<?php


session_start();


$con = mysqli_connect('remotemysql', 'hx0HNfsPC0', 'BUKkixZON0');

if(!mysqli_select_db($con, 'userregistration'))
{
    echo 'error';
}
$bname=$_POST["bscore"];
$sname=$_POST["sscore"];

$subsc=" insert into score(buzzfeed, seventeen) values ('$bname', '$sname')"; 

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
       else if($bname>40 && $bname<50 && $sname<110 && $sname<120)
       {
           echo "ah! close";
       }
       else if($bname>30 && $bname<40 && $sname>100 && $sname<110)
       {
           echo "you getting there";
       }
       else if($bname>20 && $bname<30 && $sname>90 && $sname<100)
       {
           echo "give it another try";
       }
    
        
   }
?>