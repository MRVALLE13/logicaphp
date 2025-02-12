<?php

$dados = array(
    "nome" => "joao",
    "nascimento" => "01/01/2000",
    "documentos" => array(
        "rg" => "123456",
        "cpf" => "123.456.789-00",
        "cnh" => "123456789",
    ),
    "endereco" => array(
        "tipo" => "Rua",
        "rua" => "Rua A",
        "numero" => "123",
        "complemento" => "apto 123",
        "bairro" => "Centro",
        "cidade" => "São Paulo",
        "estado" => "SP",
    ),
    "filiacao" => array(
        "nome da mae" => "Maria",
        "nome do pai" => "joao",
    ),
    "contatos" => array(
        "email" => "joao@gmail.com",
        "telefone_fixo" => array(
            "ddd" => "11",
            "numero" => "99999-9999",
        ),
        "celular" => array(
            "ddd" => "11",
            "numero" => "99999-9999",
        ),
        
    ),
);

echo "=======================DADOS PESSOAIS=======================" . "<br>";
echo "Nome: " . ($dados['nome']) . "<br>";
echo "Data de nascimento: " . ($dados['nascimento']) . "<br>";
echo "<br>Documentos: ". '<br>';

        foreach ($dados['documentos'] as $key => $value) {
        echo ($key . ": " . $value) . "<br>";
        }
echo "<br>Endereço: ". '<br>';

        foreach ($dados['endereco'] as $key => $value) {
        echo ($key . ": " . $value) . "<br>";
        }

echo "<br>Filiação: ". '<br>';

        foreach ($dados['filiacao'] as $key => $value) {
        echo ($key . ": " . $value) . "<br>";
        }


echo "<br>Contatos: ". '<br>';
        echo "Email: ". ($dados['contatos']['email']). '<br>';
        
        foreach ($dados['contatos']['telefone_fixo'] as $key => $value) {
        echo ($key . ": " . $value) . "<br>";
        }
        foreach ($dados['contatos']['celular'] as $key => $value) {
        echo ($key . ": " . $value) . "<br>";
        }
    
        ;


