<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpguanabara/style.css">
    <title>media Aritimetrica</title>
</head>
<body>
<div class="cab">Curso em Videos PhP</div>

  <div class="cop">
  <?php
    $preco = $_GET["p"];
    echo "O preço do produto é R$ ".number_format($preco,2,",",".");//esta forma é antiga de atribuir
    $preco = $preco + ($preco*10/100);
    echo "<br/>O novo preço com 10% de Aumento será R$ ". number_format($preco,2,",",".");

    #forma nova de atribuição
    $preco = $_GET["p"];
    echo "<br/>O preço do produto é R$ ".number_format($preco,2,",",".");
    $preco = $preco -= $preco*10/100;
    echo "<br/>O preço do produto com 10% de Descontos será R$ ". number_format($preco,2,",",".");#obs: apos o 2 a virgula entre aspas separar casa de milhar  e o ponto é para a casa ficar com ponto em lugar de virgula

   ?>
    </div>  
</body>
</html>