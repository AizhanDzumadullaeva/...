<?php

$colors = array ("red", "green", "blue", "yellow");

//$colors = [
  //  'red' - 'қызыл' ,
  //  'green' - 'жасыл' ,
  // 'blue' - 'көк' ,
  //  'yellow' -  'сары',

//];

//foreach ($colors as $value)  {
   // echo $value . "\n";
//}

foreach ($colors as $key => $value) {
      if ($value === 'red') {
        echo 'қызыл' . "\n";
      } elseif  ($value === 'blue') {
          echo 'көк' . "\n";
      } elseif  ($value === 'green') {
          echo 'жасыл'  . "\n";
      } elseif ($value ===  'yellow') {
          echo 'сары'.  "\n";
      }
}