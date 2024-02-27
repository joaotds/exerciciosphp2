<?php

$primeiro = 1;
$segundo = 1;


echo "$primeiro $segundo ";


for ($i = 3; $i <= 15; $i++) {
    $proximo = $primeiro + $segundo;
    echo "$proximo ";

    $primeiro = $segundo;
    $segundo = $proximo;
}
?>
