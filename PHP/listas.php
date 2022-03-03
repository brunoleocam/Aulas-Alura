<?php

$idadeList = [21,23,19,25,30,41,18];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;
//unset($idadeList[4]);

$idadeList[7] = 20;

foreach ($idadeList as $idade) {
    echo $idade.PHP_EOL;
}
?>