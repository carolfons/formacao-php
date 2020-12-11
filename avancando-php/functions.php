<?php
//função saque
function sacar(array $conta, float $valorSaque): array
{

    if($valorSaque>$conta['saldo']){
        echo ("Você não pode sacar esse valor!");
        echo PHP.EOL;
    }
    else{
        $conta['saldo'] -= $valorSaque;
    }
    return $conta;
}

//função depósito
function depositar(array $conta, float $valorDeposito):array
{
    if($valorDeposito>0){
        $conta['saldo'] += $valorDeposito;
    }
    else{
        echo 'Depósitos precisam ser positivos!'.PHP_EOL;
        echo PHP.PHP_EOL;
    }

    return $conta;
}

//função para exibir conta na WEB
/*function exibeConta(array $contas)
{
    //list
    ['titular' =>$titular, 'saldo'=>$saldo] = $contas;

    $html = "<li>Titular: $titular. Saldo: $saldo</li>";
}
*/