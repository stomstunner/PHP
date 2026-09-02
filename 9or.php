<?php

// here we use the php program for the and or operators 

$temp = 90;

if($temp <= 0 || $temp >= 30 ){
    echo"The weather is bad <br>";
}
elseif($temp >= 16 && $temp <= 30){
    echo"The weather is nice <br>";
}


$cloudy = true;

if(!$cloudy){
    echo"It is sunny";
}
else{
    echo"It is cloudy";
}

?>