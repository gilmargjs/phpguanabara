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
<div class="cab"><h2> Regiões Brasileira</h2></div>

<div class="cop">
  <?php
     $e = isset($_GET["es"])?$_GET["es"]:0;
   switch ($e) {
       case "no":       
        echo "Vocẽ mora na Região Norte";
        break;
       case "nd":
        echo "Vocẽ mora na Região Nordeste";
        break;
       case "ce":
        echo "Vocẽ mora na Região Centro Oeste";
        break;
       case  "su":
        echo "Vocẽ mora na Região Sudeste";
        break;
        case "sl";
        echo "Vocẽ mora na Região Sul";
        default;
   }
 
   ?><br>
   <a href="javascript:history.go(-1)">voltar</a>
</div>
</body>
</html>