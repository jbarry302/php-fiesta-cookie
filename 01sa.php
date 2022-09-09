<?php
 //use output buffer end clean after improting this file
 ob_start();

   $Brogrammers = array(
      array("id", "species", "type1", "type2", "ability", "hp", "attack", "defense"),
      array("1", "Bulbasaur", "Grass", "Poison", "Overgrow", "45", "49", "49"),
      array("2", "Ivysaur", "Grass", "Poison", "Overgrow", "60", "62", "63"),
      array("3", "Venusaur", "Grass", "Poison", "Overgrow", "80", "82", "83"),
      array("4", "Charmander", "Fire", "N/A", "Blaze", "39", "52", "43"),
      array("5", "Charmeleon", "Fire", "N/A", "Blaze", "58", "64", "58"),
      array("6", "Charizard", "Fire", "Flying", "Blaze", "78", "84", "78"),
      array("7", "Squirtle", "Water", "N/A", "Torrent", "44", "48", "65"),
      array("8", "Wartortle", "Water", "N/A", "Torrent", "59", "63", "80"),
      array("9", "Blastoise", "Water", "N/A", "Torrent", "79", "83", "100"),
      array("10", "Caterpie", "Bug", "N/A", "Shield Dust", "50", "20", "55"),
   );

   echo '$Brogrammers array = ' . print_r($Brogrammers, true);
   echo '</br></br>number of elements in the $Brogrammers array: ' . count($Brogrammers, COUNT_RECURSIVE) . '</br>';
   $favorite = $Brogrammers[6];

   foreach ($Brogrammers as $row => $arr) {
      foreach ($arr as $index => $value) {
         if ($row > 0 && $index == 1) {
            echo $value;
            break;
         }
      }
      echo '</br>';
   }
   // custom arr print function
   // function pretty_print($arr)
   // {
   //    foreach ($arr as $key => $value) {
   //       foreach ($value as $key2 => $value2) {
   //          $length = strlen($value2);
   //          $offset = 12 - $length;
   //          $start = floor($offset / 2);
   //          $end = $offset - $start;
   //          if ($key == 0) {
   //             echo str_repeat(" ", $start) . $value2 . str_repeat(" ", $end);
   //          } else {
   //             echo str_repeat(" ", $end) . $value2 . str_repeat(" ", $start);
   //          }
   //       }
   //       echo "\n";
   //    }
   // }
   ?>
