<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - Loops</title>

    <style>
        /* cores alternadas com css */
        li:nth-child(odd){
            color:red;
        }
        li:nth-child(even){
            color:blue
        }
    </style>
</head>
<body>
    <div class="container">
<ol>
<?php
    $meses = ["Janeiro","Fevereiro", "Março", "Abril", "Maio",
    "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

for($i = 0; $i < count($meses); $i++){

?>



    
    <li><?=$meses[$i]?></li>
    
    

<?php
}
?>
</ol>

    </div>
</body>
</html>