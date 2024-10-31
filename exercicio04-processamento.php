<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (Dados)</title>
</head>
<body>
<h1>Exercício 04 (dados/processamento)</h1>
<hr>

<!-- Faça a partir daqui a programação
necessária para obter os dados vindos do formulário
e mostrá-los usando elementos HTML (da forma que você quiser). -->
<!-- usar POST -->

<?php
$produto = ($_POST['produto']);
$fabricante = ($_POST['fabricante']);
$preco = ($_POST['preco']);
$descricao = ($_POST['descricao']);



// Se um dos campos obrigátorios estiver vazio
if( empty ($produto) || empty($fabricante) || empty($preco)
 || empty($descricao)){
?>

    <!-- mostramos um alerta para o usuário -->
    <p style="color: red;">VOCÊ DEVE PREENCHER TODOS OS CAMPOS DO FORMULÁRIO
<?php
} else{
?>

    <!-- mostrar os dados -->
    <h1>Dados do Produto: </h1>
    <ol>
        <?php if( !empty($produto)){ ?>
        <li>Produto: <?=$produto?></li>
        <?php }?>

        <?php if( !empty($fabricante)){ ?>
        <li>Fabricante: <?=$fabricante?></li>
        <?php } ?>

        <?php if( !empty($preco)){ ?>
        <li>Preço: <?=$preco?></li>
        <?php } ?>

        <?php if( !empty($descricao)){ ?>
        <li>Descrição: <?=$descricao?></li>
        <?php } ?>

        
    </ol>
<?php } ?>
</body>
</html>