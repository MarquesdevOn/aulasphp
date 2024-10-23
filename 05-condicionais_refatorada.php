<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="text-align: center; background-color:antiquewhite">
    <div class="container">
        <h1 style="background-color: gray;">Comandos condicionais no php</h1>
        <p style="background-color: yellow;"><i>(Versão refatorada)</i></p>
        <hr>


        <h2 style="background-color: aqua;">Condicional Simples</h2>
<?php
$numero = 500;
// O comando echo em PHP é utilizado para imprimir ou exibir texto e variáveis na saída padrão, que geralmente é o navegador quando estamos desenvolvendo aplicações web. É uma das maneiras mais comuns de enviar dados para a tela.


if($numero >= 100){

?>  
    <p>O valor da variável é <?=$numero?></p>

<?php
}

?>

    <hr style="color: blue;">

    <h2 style="background-color: beige;">Concicional Composta</h2>
    <!-- composta pq tem 2 condicionais -->

<?php
//Controle de estoque

$produto = "TV";
$qtd_estoque = 5; // o que temos no estoque
$qtd_critica = 2; // minimo necessario


?>


    <h3>Produto: <?=$produto?></h3>
    <p><b>Estoque: </b> <?=$qtd_estoque?></p>

<?php
// Se a quantidade em estoque for abaixo da quantidade, o sistema deve avisar e pedir para repor
if($qtd_estoque < $qtd_critica){
?>
    <p style='color:red'>É necessário repor! </p>
<?php

}else{
?>
 <!-- Caso contrário, simplesmente avisar que o estoque está normal -->

    <p style="color: blue;">Estoque normal</p>
<?php // abre php
}
// fecha php
?>  

    <hr style="color: blue;">
    <h2 style="background-color: beige;">Condicional Encadeado</h2>

<?php
// Verificando o produto e determinando diferentes periodos de garantia (em anos)

// NAO PRECISA DECLARAR A VARIAVEL ANTES DA CONDICIONAL NO PHP
//PODE DECLARAR NA CONDICIONAL TBM
if($produto == "Ultrabook"){
    $garantia= 5;
}
else if ($produto == "Geladeira"){
    $garantia = 3;
}
else if($produto == "TV"){
    $garantia = 2;
}
else {
    $garantia = 1;
}

?>

<p><?=$produto?> tem garantia de <b> <?=$garantia?> anos </b></p>

    <hr>

    <h2 style="background-color: beige;">Condicional Encadeada usando SWITCH/CASE</h2>

<?php
    //switch analise/ verique
    switch($produto){
        case "Ultrabook": $garantiaB = 5; break;
        case "Geladeira": $garantiaB = 3; break;
        case "TV" : $garantiaB = 2; break;
        default: $garantiaB = 1; break;
    }
?>

<p>Garantia de  <?=$garantiaB?> anos.</p>

    </div>
</body>
</html>