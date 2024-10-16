
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
    <!-- 
    /*
Crie um novo arquivo chamado exercicio01.php e nele faça um array (numérico OU associativo) chamado dados contendo as seguintes informações:
 
 - Nome de usuário (exemplo: chapolin.colorado)
 - Senha (exemplo: 123teste)
 - Idade (exemplo: 30)
 - Cidade (exemplo: São Paulo)
 - Telefones (exemplo: 11-2135-0300 e 11-91234-5678)
  
 Obs.: no caso dos telefones, use um Array para guardar os dois valores.
  
 Em seguida, mostre somente os valores de nome de usuário, idade, cidade e um dos telefones em uma lista ordenada HTML.
*/
 -->
</head>
<body>
    <div class="container">

<?php

    $user=[

        "nome" => "Capolin Colorado",
        "senha" => "123teste",
        "idade" => 30,
        "cidade" => "São paulo",
        "telefones" => [
            "11-2135-0300",
            "11-91234-5678"


        ]

    ]

?>

    <h1>User:</h1>
    <ol>
        <li>Nome do user: <?=$user["nome"]?></li>
        <li>Idade: <?=$user["idade"]?></li>
        <li>Cidade: <?=$user["cidade"]?></li>
        <li>Telefone: <?=$user["telefones"][0]?></li>
    </ol>



    </div>
</body>
</html>