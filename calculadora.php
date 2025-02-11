<?php

/// Exercício 2: Soma de valores de um array

// crie um array contendo os seguintes números: 5, 10, 15, 20, 25.
// * Some todos os valores do array e exiba o resultado


$valores = array(5, 10, 15, 20, 25);
$soma = 0;

foreach ($valores as $valor){
    $soma = $soma + $valor;
    //$soma += $valor;  // outra forma de fazer a soma  
    
}
echo $soma;



