<?php

$nome = "Maria";
$sobrenome = "Joaquina";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01</title>
    <style type="text/css">
        .format {
            color: blue;
            font-family: arial;
            font-size:22px;
            font-weight: bold;

        }

    </style>
</head>
<body>
    <h1> Primeira Aula</h1>
    <p><?php echo "<span class='format'>Nome: </span><br>". $nome . " " . $sobrenome; ?></p>
<form method= "post" action="condicionais.php">
    <label for="nome">Nome Completo:</label>
    <input type="text" placeholder="Digite seu nome completo" name="nome">
    <input type="submit" name="Enviar" value="Enviar nome"><br>
    <input type="text" placeholder="Digite sua idade" name="idade">
    <input type="submit" name="Enviar" value="Enviar idade ">
</form>
</body>
</html>