<?php

//function to withdraw money in the account
function sacar(array $conta, float $valorASacar): array 
{
    if( $valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

//function to deposit money in the account
function depositar(array $conta, float $valorADepositar): array 
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

//function to show message
function exibeMensagem(string $mensagem) 
{
    echo $mensagem.PHP_EOL;
}

function titularComLetrasMaiusculas(array &$conta) 
{
    $conta['titular'] =  mb_strtoupper($conta['titular']);
}

?>