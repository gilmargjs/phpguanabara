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
    $ano = $_GET["aa"];
    echo "$ano é o ano atual ,enquanto que o ano passado foi " .--$ano;
   ?>
    </div>  
</body>
</html>