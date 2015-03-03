<?php
$message = "this test worked";
$image;

date_default_timezone_set("America/New_York");
$time = date("h:i:sa");
$hour = date("H");
$image;
$color = "black";
if($hour >= 5 && $hour < 11){
    $image = "morning";
} else if ($hour >= 11 && $hour < 16){
    $image = "afternoon";
} else if ($hour >= 16 && $hour < 20){
    $image = "evening";
} else if($hour >= 20 || $hour < 5){
    $image = "night";
    $color = "#FFFF99";
}
?>