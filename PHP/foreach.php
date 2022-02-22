<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'Saldo' => 10000],
    '123.456.489-11' => [
        'titular' => 'Alberto',
        'Saldo' => 300],
    '123.256.789-10' => [
        'titular' => 'Alberto',
        'Saldo' => 100]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf." ".$conta['titular'].PHP_EOL;
}