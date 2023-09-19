<?php
/*$idade = 15;
if($idade >= 18){
    echo "Maior que 18";
}else {
    echo "Menor que 18";
}*/

$nome = $_POST['nome'];
$idade = $_POST['idade'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "<h1>seu nome completo é:" . $nome . "</h1>";
if($idade >=18)
echo "<h2>voce tem:" . $idade . "anos de idade e pode avessar o site </h2>";
  ?>
</body>
</html>