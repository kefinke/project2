<!DOCTYPE html>
<html>
    <head>
       <?php require "logic.php"; ?>
       <link href='fonts/AmaticSC-Bold.ttf' rel='stylesheet' type='text/css'>
       <link rel="stylesheet" type="text/css" href="css\style.css"/>
       <title>Clock</title>
    </head>
    <body id="<?php echo $image; ?>">
        <h1 id="<?php echo $image; ?>h"><?php echo $time; ?></h1>
        <br/>
        <h2>Good <?php echo $image; ?>!</h2>
    </body>
</html>