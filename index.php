<!DOCTYPE html>
<html>
    <head>
       <?php require "logic.php"; ?>
       <link href='http://fonts.googleapis.com/css?family=Comfortaa|Raleway:700|Amatic+SC:700' rel='stylesheet' type='text/css'>
       <link rel="stylesheet" type="text/css" href="css\style.css"/>
       <title>Clock</title>
    </head>
    <body>
        <h1 id="time"><?php echo $time; ?></h1>
        <img src="images\<?php echo $image; ?>.png"/>
    </body>
</html>