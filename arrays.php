<?php

/// Exercício 1: Manipulação de Arrays Simples

// Crie um array com o nome de 5 frutas e:
// 1- Exiba todos os itens do array usando um foreach
// 2- Adicione uma fruta no final do array
// 3- Remova a primeira fruta do array
// 4- Exiba novamente o array atualizado


$frutas = array("banana", "maçã", "uva", "laranja", "manga");
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

echo " ===========================  <br>";
$frutas[] = "Morango";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";

}


echo " ===========================  <br>";
/// Remove o primeiro elemento do array
array_shift($frutas);

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";

}   


echo " ===========================  <br>";
/// Remove o item selecionado do array, o número 2 é a posição do array
unset($frutas[2]);

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";

}   

