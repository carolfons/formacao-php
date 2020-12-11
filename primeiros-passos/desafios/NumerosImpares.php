<?php

echo "Numeos ímpares: \n";

for($i = 0; $i<=100; $i++){
    if($i%2==1){
        echo "O número $i é ímpar!".PHP_EOL;
    }
    else
        continue;
}