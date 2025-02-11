<?php

// Crie um array com números aleatórios e:
// 1- Exiba os números na ordem original
// 2- Ordene o array em ordem crescente e exiba novamente.
// 3- Ordene o array em ordem decrescente e exiba novamente.


$numeros = array(15,10,35,20,18,30,5,60,45,40);

foreach ($numeros as $numero) {
    echo $numero . "<br>";
}
echo "--------------------------------<br>";

/// outra forma de listar os números
echo "<br>";
$nun_seq = implode (",",$numeros);
echo $nun_seq;
echo "<br>--------------------------------<br>";

// Ordenando o array em ordem crescente
sort($numeros);

// Exibindo o array ordenado
foreach ($numeros as $numero) {
    echo $numero . "<br>";
};

echo "--------------------------------<br>";

// Ordenando em ordem decrescente
rsort($numeros);
// Imprimindo o array ordenado
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}