<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="cab">Curso em Videos PhP</div>

    <div class="cop">
  <?php
     $n = isset($_GET["num"])?$_GET["num"]:0;
     $n1 = isset($_GET["num1"])?$_GET["num1"]:0;

     $o = isset($_GET["op"])?$_GET["op"]:1;
     $f = isset($_GET["fu"])?$_GET["fu"]:1;
     switch ($f) {
        case 'so':
            $r = $n + $n1;
            break;
        case "su":
            $r = $n - $n1;
            break;
        case "mu":
            $r = $n * $n1;
            break;
        case "di":
            $r = $n / $n1;
            break;
        case "mo":
            $r = $n % $n1;
            break;
        
    }
    echo" o valor é $r ";
   ?>
   <a href="operacao1.html">voltar</a>
    </div>
</body>
</html>