<?php

// this function assumes that $arrayname will be the same format as $Brogrammers array
// in 01sa.php which has a row header and body
function pokemon_defense($arrayname, $limit_number)
{
    $exclude_header = array_slice($arrayname, 1);
    $defense_column = 7;
    $name_column = 1;

    foreach ($exclude_header as $row) {
        if ($row[$defense_column] >= $limit_number) {
            echo $row[$name_column] . '</br>';
        }
    }
}
