<?php

$tabela_cores = array(
    1 => 'yellow',
    2 => 'blue',
    3 => 'black',
    4 => 'green',
    5 => 'red',
    6 => 'purple',
    7 => 'gray',
    8 => 'brown'
);


for ($i = 1; $i <= 8; $i++) {
    
    $cor = $tabela_cores[$i];
    
    echo "<div style=\"background-color: $cor; width: 100px; height: 100px;\"></div>\n";
}
?>
