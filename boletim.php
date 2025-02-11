<?php

// Exercício 4: Manioulação de Arrays Associativos
// Crie um array associativo com os seguintes dados:
// Nome
// Matéria
// Nota
// Utilize um loop de foreach para exibir as informações de cada aluno.
// Baseado na nota, exiba uma mensagem de aprovação ou reprovação.
// Se a nota for maior ou igual a 7, o aluno está aprovado.
// Se a nota for menor que 7, e maior ou igual a 5, o aluno está de recuperação.
// Se a nota for menor que 5, o aluno está reprovado.


$alunos = array(
    array(
        "nome" => "João",
        "materia" => "Português",
        "nota" => 6.5
    ),
    array(
        "nome" => "Maria",
        "materia" => "Matemática",
        "nota" => 8.0
    ),
    array(
        "nome" => "Pedro",
        "materia" => "História",
        "nota" => 4.0
    )
);

foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno["nome"] . "<br>";
    echo "Matéria: " . $aluno["materia"] . "<br>";
    echo "Nota: " . $aluno["nota"] . "<br>";
  

    if ($aluno["nota"] >= 7) {
        echo "O aluno está aprovado\n";
    } elseif ($aluno["nota"] >= 5 && $aluno["nota"] < 7) {
        echo "O aluno está de recuperação\n";
    } else {
        echo "O aluno está reprovado\n";
    }
    echo "<br> ----------------------- <br>";
}