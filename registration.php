<?php

session_start();
header('location:login.php');

$con = mysqli_connect('remotemysql', 'hx0HNfsPC0', 'BUKkixZON0');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    header('location:samename.html');
  
}
else 
{
  
    $reg = " insert into usertable(name, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    header('location:successreg.html');
    echo " Registration Successful";
}
?>