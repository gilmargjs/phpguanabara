<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpguanabara/style.css">
    <title>valoresPersonalisado</title>
</head>
<body>
<div class="cab">Curso em Videos PhP</div>

<div class="cop">
  <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $m = ($n1+$n2)/2;
    echo " <br/> A Média aritimetrica é $m";

   ?>
    </div> 
</body>
</html>

