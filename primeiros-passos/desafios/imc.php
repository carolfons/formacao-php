<?php

$altura = 1.70;
$peso = 70;

$imc = $peso/($altura**2);
echo "Seu imc é de: ". $imc.PHP_EOL;
if ($imc<18.5)
    echo "Abaixo do peso!";
elseif ($imc<25)
    echo "Peso Ideal";
elseif($imc<30)
    echo "Levemente acima do Peso";
elseif($imc<35)
    echo "Obesidade I";
elseif($imc<40)
    echo "Obesidade II";
else
    echo "Obesidade III";