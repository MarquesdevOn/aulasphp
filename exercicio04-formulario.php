<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (formulário)</title>
    <style>
        .container{
            border: 5px solid palevioletred;
            padding: 10px;
            margin: 20px;
            background-color: antiquewhite;
        }
    </style>
</head>

<body style="text-align: center;">
    <div class="container">
        <hr>
        <h1 style="color: purple;">Exercício 04 (formulário)</h1>
        <hr style="color: brown;">
        <form autocomplete="off" action="exercicio04-processamento.php" method="post">
            <p>
                <label style="color: white; background-color:blueviolet" required for="produto">Produto:</label>
                <input required type="text" name="produto" id="produto" placeholder="Digite o nome do produto">
            </p>

            <p>
                <label style="color: white; background-color:blueviolet" for="fabricante">Fabricante:</label>
                <select name="fabricante" id="fabricante" placeholder="Digite o fabricante">
                    <!-- não apague este <option> vazio -->
                    <option value=""></option>
                    <?php
                    $fabricantes = ["HP", "Microsoft", "Samsung", "LG"];
                    /*
				<!-- Faça aqui a programação necessária para obter os dados de um array (criado por você) e colocá-los (cada um) dentro de uma tag <option>. 
                <!-- foreach */

                    foreach ($fabricantes as $fabricante) {
                        echo ("<option value='$fabricante'>$fabricante</option>");
                    }


                    ?>

                </select>
            </p>

            <p>
                <label style="color: white; background-color:blueviolet" required for="preco">Preço:</label>
                <input required type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
            </p>

            <p>
                <label style="color: white; background-color:blueviolet" for="descricao">Descrição:</label><br>
                <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
            </p>

            <button style="color: white; background-color:blueviolet" type="submit" name="enviar">Enviar dados</button>
        </form>
    </div>
</body>

</html>