<!DOCTYPE html>
<html>
<head><title>Manish kumar</title>  
<meta charset="en" >
</head>
<body>
	<h1> Welcome to my guessing game</h1>
     <?php
     $var= $_GET["guess"]; 
     if(count($var)==0)
     {
     	echo "missing guess parameter";
     }

     elseif(empty($var))
     {
     	echo "Your guess is too short";
     }
     elseif(is_numeric($_GET["guess"]))
     {
       if($var < 62)
       {
       	echo "Your guess is too low";
       }
       elseif($var > 62)
       {
       	echo "your guess is too high";
       }
       if($var==62)
       {
       	echo "Congratulations - You are right";
       }
     }
     else
     {
     	echo "Your guess is not a number";
     }
     ?>
 </body></html>