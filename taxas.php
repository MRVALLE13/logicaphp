<?php

// Exercício 5: Conversão de moedas
// crie um array associativo com as taxas de conversão de diferentes moedas para reais (R$):
// Dólar (USD) - 5.10
// Euro (EUR) - 5.50
// Libra (GBP) - 6.30
// Peso Argentino (ARS) - 0.05

$taxas = array(
    "USD" => 5.10,
    "EUR" => 5.50,
    "GBP" => 6.30,
    "ARS" => 0.05
);

$valor = 100;

echo "valor em Dolar: US$". number_format($valor/$taxas['USD'],2,",",".")."<br>";
echo "valor em Euro: EU$". number_format($valor/$taxas['EUR'],2,",",".")."<br>";
echo "valor em Libra: L$". number_format($valor/$taxas['GBP'],2,",",".")."<br>";
echo "valor em Peso Argentino: P$". number_format($valor/$taxas['ARS'],2,",",".")."<br>";

