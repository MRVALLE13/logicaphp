<?php

$arroba = 15;
$valor_arroba1 = 50;
$valor_arroba2 = 45;
$peso1 = 2;
$peso2 = 345;
$peso_final = $peso1 + $peso2;
$qnt_arrobas = $peso_final / $arroba;

$produtor = "João";

if ($qnt_arrobas>=10)
{
    $valor_arroba = $valor_arroba1;
    $valor_final = number_format( $qnt_arrobas * $valor_arroba,2,",",".");
echo "O valor a ser pago para o produtor: ".$produtor." é de: R$ ". $valor_final;
}

else  
{
    $valor_arroba = $valor_arroba2;
    $valor_final = number_format( $qnt_arrobas * $valor_arroba,2,",",".");
echo "O valor a ser pago para o produtor: ".$produtor." é de: R$ ". $valor_final;
}

