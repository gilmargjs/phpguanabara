<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpguanabara/style.css">
    <title>Formulario</title>
</head>
<body>
<div class="cab">Curso em Videos PhP</div>

  <div class="cop">
  <?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:["sem nome"];
    $ano =  isset($_GET["ano"])?$_GET["ano"]:0;
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:["sem sexo"];
    $idade = date("Y") - $ano;
    echo "$nome é $sexo e tem $idade anos";
   ?>
    <a href="form1.html"> voltar </a>

    </div>  
</body>
</html>