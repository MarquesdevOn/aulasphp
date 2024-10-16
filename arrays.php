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

    </div>

<?php

    // Existe 2 tipos de Arrays
    //Array / Tradicional

$frutas = ["Morango", "Banana", "Uva" , "Laranja"];
$cursos = array("Node.js" , "Design", "Nutriçao");


?>

    <h2>Acessando os dados do array</h2>
    <!-- chamando o array -->
    <p>Frutas da época: <?=$frutas[2]?></p> 
</body>
</html>