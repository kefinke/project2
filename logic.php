<?php
$message = "this test worked";
$image = "images/";
$time = Date().substring(16, 24);
$hour = $time.substring(0, 2);
if($hour > 5 && $hour < 11){
    $image += "morning";
} else if ($hour > 11 && $hour < 16){
    $image += "afternoon";
} else if ($hour > 16 && $hour < 20){
    $image += "evening";
} else if($hour > 20 || $hour < 5){
    $image += "night";
}
$image += ".png";
$newhour = $hour % 12;
if($newhour === 0){
    $newhour = 12;
}
$time = $newhour + $time.substring(2, $time.length);
?>