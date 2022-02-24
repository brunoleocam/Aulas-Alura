<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000],
    '123.456.489-11' => [
        'titular' => 'Alberto',
        'saldo' => 300],
    '123.256.789-10' => [
        'titular' => 'Alberto',
        'saldo' => 100]
];

function sacar($conta, $valorASacar){
    if( $valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem($mensagem) {
    echo $mensagem.PHP_EOL;
}

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'],500);
$contasCorrentes['123.256.789-10'] = sacar($contasCorrentes['123.256.789-10'],500);


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf." ".$conta['titular']." ".$conta['saldo']);
}