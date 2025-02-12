<?php


// Crie um array onde deve conter o boletim escolar de 05 alunos
// Este boletim deve conter 03 matérias e com cada matéria as notas dos 04 bimestres
// Exiba o boletim de cada aluno informando a média de cada matéria


$boletim = array(
    array(
        "nome" => "Lucas",
        "materias" => array(
            "Matemática" => array(7, 8, 6, 9),
            "Português" => array(6, 7, 8, 7),
            "História" => array(8, 9, 7, 6)
        )
    ),
    array(
        "nome" => "Ana",
        "materias" => array(
            "Matemática" => array(5, 6, 7, 8),
            "Português" => array(7, 8, 6, 5),
            "História" => array(6, 7, 8, 9)
        )
    ),
    array(
        "nome" => "Joao",
        "materias" => array(
            "Matemática" => array(9, 8, 7, 6),
            "Português" => array(8, 7, 6, 5),
            "História" => array(7, 6, 5, 4)
        )
    ),
    array(
        "nome" => "Carlos",
        "materias" => array(
            "Matemática" => array(6, 5, 4, 3),
            "Português" => array(5, 4, 3, 2),
            "História" => array(4, 3, 2, 1)
        )
    ),
    array(
        "nome" => "Luiz",
        "materias" => array(
            "Matemática" => array(10, 9, 8, 7),
            "Português" => array(9, 8, 7, 6),
            "História" => array(8, 7, 6, 5)
        )
    )
);

foreach ($boletim as $aluno) {
    echo "Nome: " . $aluno["nome"]."<br>";
    foreach ($aluno["materias"] as $materia => $notas) {
        $media = array_sum($notas) / count($notas);
        echo $materia . " - Média: " . $media . "\n".'<br>';
    }
    echo "<br>";
}
?>