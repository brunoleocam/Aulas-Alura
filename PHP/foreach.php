<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Bruno',
        'Saldo' => 1000],
    12345648911 => [
        'titular' => 'Vinicius',
        'Saldo' => 10000],
    12325678910 => [
        'titular' => 'Alberto',
        'Saldo' => 300]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf.PHP_EOL;
}