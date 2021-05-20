<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylo1.css">
    <title>Document</title>
</head>
<body>
<div class="cab"><h3>Calculadora</h3></div>

    <div class="cop">
  <?php
     $n = isset($_GET["num"])?$_GET["num"]:0;
     $n1 = isset($_GET["num1"])?$_GET["num1"]:0;
     $f = isset($_GET["fu"])?$_GET["fu"]:1;
     switch ($f) {
        case '+':
            $r = $n + $n1;
            break;
        case "-":
            $r = $n - $n1;
            break;
        case "*":
            $r = $n * $n1;
            break;
        case "/":
            $r = $n / $n1;
            break;
        case "%":
            $r = $n % $n1;
            break;
        
    }
    echo" o valor é $r "
   ?>
   <a href="calculadora1.html">voltar</a>
    </div>
</body>
</html>