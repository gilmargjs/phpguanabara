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
    $ano = $_GET["an"];
    $idade = 2021 - $ano;
    echo "Quem Nasceu em $ano tem $idade Anos";
    $vota = ($idade >= 16 && $idade < 65)? "Obrigatório":"Não Obrigatório";
    echo "<br/>Com $idade o seu voto é $vota";
    ?>
    </div>  
</body>
</html>