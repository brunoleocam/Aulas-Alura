<?php

$conta1 = ['titular' => 'Bruno',
            'Saldo' => 1000];

$conta2 = ['titular' => 'Vinicius',
            'Saldo' => 10000];

$conta3 = ['titular' => 'Alberto',
            'Saldo' => 300];


$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'].PHP_EOL;
}