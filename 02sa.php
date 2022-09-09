<?php
function hp_sum()
{
   require('01sa.php');
   ob_end_clean();


   $hp_column = 5;
   $exclude_header = array_slice($Brogrammers, 1);

   return array_sum(array_column($exclude_header, $hp_column));
}

function ave_attack()
{
   require('01sa.php');
   ob_end_clean();

   
   $attack_column = 6;
   $exclude_header = array_slice($Brogrammers, 1);
   $column_count = count($exclude_header);

   return array_sum(array_column($exclude_header, $attack_column)) / $column_count;
}
