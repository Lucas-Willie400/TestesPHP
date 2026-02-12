<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <h1>Formulário com php</h1>
    <form action="" method="get">
        <label for="nome">Nome</label>
        <input type="text" name="Nome">

        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="Sobrenome">

        <input type="submit" value="Enviar">
    </form>
    <?php
    $nome = $_GET["Nome"];
    $sobrenome = $_GET["Sobrenome"];
    echo $nome . " " . $sobrenome;
    ?>
</body>

</html>