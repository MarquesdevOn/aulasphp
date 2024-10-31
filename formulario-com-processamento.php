<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario com PHP</title>
</head>
<body style="text-align:center">
    <h1>Formulário e Processamento juntos</h1>
    <hr>
    
<!-- A função isset() em PHP é usada para verificar se uma variável está definida e não é null. Aqui estão algumas características e exemplos de uso
 Se o botao continuar foi acionado: -->
<?php if( isset($_POST['continuar'])) {
    //pegamos o nome digitado
    $nome = $_POST['nome'];

?>

    <!-- aqui vai aparecer depois que o user colocar os dados --> 
    <h2 style="color: brown;">Bem-vindo(a) <?=$nome?></h2>

<?php
} else{
?>

    <form action="" method="post">
        <label for="nome">Qual o seu nome?</label>
        <!-- required serve para deixar o campo obrigatorio!!! -->
        <input required type="text" name="nome" id="nome" placeholder="Digite o seu nome">
        <button name="continuar" type="submit">Continuar</button>
    </form>
<?php
}
?>

</body>
</html>