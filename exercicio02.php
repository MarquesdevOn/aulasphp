<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="text-align: center; background-color:antiquewhite">
    <div>


<?php
$salario_antigo = 1000;
$aumento = 0;

if($salario_antigo < 500) {
    $aumento = $salario_antigo * 0.15; 
} 
elseif ($salario_antigo <= 1000) {
    $aumento = $salario_antigo * 0.10; 
} 
else {
    $aumento = $salario_antigo * 0.05; 
}

$salario_reajustado = $salario_antigo + $aumento;

// formatar numero , 2, ',', '.'
$salario_antigo = number_format($salario_antigo, 2, ',', '.');
$salario_reajustado = number_format($salario_reajustado, 2, ',', '.');

?>

    <h1 style="background-color: brown;">Salário</h1>
    <p>Salário antigo: <?=$salario_antigo?></p>
    <p>Salário reajustado: <?=$salario_reajustado?></p>






    </div>
</body>
</html>