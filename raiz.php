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
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "A Raiz de $valor é iual $rq";
   ?>
    <a href="raiz.html"> voltar </a>

    </div>  
</body>
</html>