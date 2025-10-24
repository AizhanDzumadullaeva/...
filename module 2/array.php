<?php

//$fruits = array ("Apple", "Banana", "Orange");

//echo $fruits[1];

//$age = array("Peter"=>"35",
            // "Ben"=>"37",
             //"Joe"=>"43");
      //  echo "Ben is " . $age['Ben'] . " years old.";

//$colors = array("red", "green", "blue", "yellow");
//asort($colors);
//print_r($colors);

//$colors = array("red", "green", "blue", "yellow");

//rsort($colors);

//print_r($colors);
$age = array("Peter"=>"65",
             "Ben"=>"37",
             "Joe"=>"43");
sort($age);

var_dump($age);