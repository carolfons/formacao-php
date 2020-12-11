<?php

/*
 * Incluir um arquivo externo:
 * include, require, require_once * */
require_once 'functions.php';

//declaração do array de contas
$contasCorrentes = [
    '123.456.789-10' =>[
        'titular' => 'Maria',
        'saldo' => 1000
    ],
    '123.456.789-11'=>[
        'titular'=>'Alberto',
        'saldo' => 2000
    ],
    '123.456.444-12' =>[
        'titular'=>'Vinicius',
        'saldo' =>500
    ]
];

//chamando a função de saque
$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);

//chamando a função de deposito
$contasCorrentes['123.456.444-12'] = depositar($contasCorrentes['123.456.444-12'], 900);


//list
//ATRIBUI VALORES DO ARRAY PARA VARIÁVEIS

foreach ($contasCorrentes as $cpf => $contas){
    //list('titular' => $titular, 'saldo' => $saldo) = $contas;
    //echo "$cpf -> $titular | Saldo: $saldo".PHP_EOL;

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco Online</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta){?>
        <dt>
            <h3><?= $conta['titular'];?> - <?= $cpf;?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo'];?>
        </dd>
        <?php }?>
    </dl>
</body>
</html>
