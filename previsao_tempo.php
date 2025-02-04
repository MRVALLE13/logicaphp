<?php

// Crie uma lógica que a partir da temperatura me diga se o dia está ensolarado, nublado ou chuvoso.

// Se a temperatura for maior ou igual a 30 graus, o dia está ensolarado.
// se a temperatura for maior ou igual a 20 e menor que 30 graus, o dia está nublado.
// se a temperatura for menor que 20 graus, o dia está chuvoso.

$temperatura = 25;

if( $temperatura >= 30)
{echo "O dia está ensolarado";}

elseif ($temperatura >= 20 && $temperatura <30)
{echo "O dia está nublado";}

else
{echo "O dia está chuvoso";}


