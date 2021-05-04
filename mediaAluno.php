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
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1+$nota2)/2;
    echo "A Média entre $nota1 e $nota2 é $m";
    $sit = ($m<6) ? "Reprovado":"Aprovado";
    echo "<br/>O Aluno com a Média $m está $sit";

   ?>
    </div>  
</body>
</html>