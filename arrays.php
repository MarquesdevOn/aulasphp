<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <h1>Arrays no PHP</h1>
        <hr>

    

<?php

    // Existe 2 tipos de Arrays
    //Array númerico / indexado

$frutas = ["Morango", "Banana", "Uva" , "Laranja"];
$cursos = array("Node.js" , "Design", "Nutriçao");


?>

    <h2>Acessando os dados do array</h2>
    <!-- chamando o array -->
    <p>Frutas da época: <?=$frutas[2]?></p> 
    <p>Ontem estivemos com a turma de <?=$cursos[2]?></p>


    <hr>
<?php
//Array associativo

$filme = [
    // chave associativa
    "titulo" => "Senhor dos Anéis",
    "Autor" => "J.R.R Tolkien",
    "lancamento" => 2001,
    "genero" => "Fantasia"

];

?>

    <h2>Acessando os dados do Array Associativo</h2>
    <p>O filme <span class="bg-success"><?=$filme["titulo"]?></span> foi lançado 
    em <span class="bg-danger"><?=$filme["lancamento"]?></span>. </p>

    <h2>Comandos úteis (para programador)para análise de arrays</h2>

    <!-- Como se fosse no console log -->
    <h3>print_r(nomeArray)</h3>
    <pre><?=print_r($frutas)?></pre>

    <!-- tag <pre> melhora a identação pra visualizar os arrays -->
    <h3>var_dump(nomeArray)</h3>
    <pre><?=var_dump($frutas)?></pre>


    </div>
</body>
</html>