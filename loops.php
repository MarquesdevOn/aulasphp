<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - php</title>
</head>
<body style="text-align: center">
    <div style="text-align: center" class="container">

    <h1 style="color: plum;">Loops (ou laços de repetição)</h1>
    <hr style="color: blueviolet;">

    <h2 style="color: plum;">Tradicionais: while, for, do/while</h2>

    <h3 style="color: plum;">While: </h3>
    </div>

<?php

//variavel de controle da repetição
$i = 1;

while($i <= 3){
?>
    <p>Senac Penha - <?=$i?></p>
<?php

    // atualizando/incrementando a variavel
    $i++;
}
?>

    <h3>for</h3>

<?php
// vai rpdar 5 vezes
for($i = 1; $i <= 5; $i++){
?>
    <div style="text-align: center">
        <h4 style="color: blueviolet;">Título <?=$i?></h4>
        <img src="https://picsum.photos/id/237/200/300" alt="">
    </div>
<?php
}
?>

    <h3 style="color: plum;">Loop  tradicional para acessar Arrays</h3>
<?php
$alunos = ["Roney", "Adriano", "Maria", "Silas"];
// mostrar os nomes pode usar qualquer dos 3 loops
//count contador
//loop aqui começa com zero e vai repetir de acordo com a quantidade de alunos 
for($i = 0; $i < count($alunos); $i++){

?>
    <p>
        <?=$alunos[$i]?>
    </p>

<?php
}
?>


    <hr style="color: blueviolet;">
    <h2 style="color: plum;">Específico: foreach</h2>

<?php
foreach($alunos as $aluno){
?>

    <p>
        <?=$aluno?>
    </p>
<?php
}
?>



    </div>

</body>
</html>