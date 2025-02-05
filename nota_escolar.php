<?php


// Crie um aplicativo que leia as notas de um aluno nos quatro bimestres 
//e calcule a media e se o aluno teve a média maior ou igual a 7, ele foi aprovado, caso contrário, ele foi reprovado.


$nota1 = 1;
$nota2 = 5;
$nota3 = 1.3;
$nota4 = 8;

$media = number_format((($nota1 + $nota2 + $nota3 + $nota4)/4),2,",",".");

if ($media>= 7)
{echo "O aluno está aprovado, sua média foi de:".$media;}

else if ($media>= 5 && $media < 7)
{echo "O aluno está de recuperação, sua média foi de:".$media;}

else
{echo "O aluno está reprovado, sua média foi de:".$media;}



$cor = "red";
echo '<span style="color: ' . $cor . ';"><BR>Este é um texto vermelho.</span>';



