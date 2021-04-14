<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpguanabara/style.css">
    <title>Document</title>
</head>
<body>
<div class="cab">Curso em Videos PhP</div>

    <div class="cop">
  <?php
    $n1 = 3;
    $n2 = 2;
    echo "A soma Vale ".($n1+$n2);
    echo "<br/>A subtração Vale ". ($n1-$n2);
    echo "<br/>A Multiplicação Vale ". ($n1*$n2);
    echo "<br/>A Divisão Vale ". ($n1/$n2);
    echo "<br/>O Modulo Vale ". ($n1%$n2);
   ?>
    </div>
</body>
</html>