<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpguanabara/style.css">
    <title>Funções Aritimetrica</title>
</head>
<body>
    <div class="cab">Curso em Videos PhP</div>
    <div class="cop">
    <?php
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2>Valores Recebidos: $v1 e $v2</h2>";
    echo "<br/>abs() = valor absoluto / POw() = potênciação / sqrt() = Raiz quadrada / round() = arredondar";
    echo "<br/><br/>O valor absoluto de  $v2 é ". abs($v2);
    echo "<br/>O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2);
    echo "<br/> A Raiz Quadrada de $v1 é ". sqrt($v1);
    echo "<br/> O valor de $v2 arredondado é ". round($v2);//cell e floor = outras formas de arredondar 
    echo "<br/>A parte inteira de $v2 é " . intval($v2);
    echo "<br/> O valor de $v1 em Moedas é ". number_format($v1,2,",",".");
    ?>
    </div>
</body>
</html>