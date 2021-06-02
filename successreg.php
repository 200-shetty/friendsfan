<?php
 if(isset($_POST['button1']))
 {
            include "../userregistration/login.php";
       
 }

?>
<html>
<head><title>Successful Registartion</title>
    <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="button.css">
            <link rel="stylesheet" type="text/css" href="syles.css">

    
    <body>
    <div class="head"><h1>Hi, your Registration was successful</h1></div>
        <form method='post'>
        <input type ="submit" name="button1" value="Continue to Login"></form>
    </body>
    </head>
</html>