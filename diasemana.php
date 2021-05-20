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
<div class="cab"><h2>DIA DA SEMANA</h2></div>

    <div class="cop">
  <?php
     $d = isset($_GET["ds"])?$_GET["ds"]:0;
   switch ($d){
       case 1:
       case 2:
       case 3:
       case 4:
       case 5:
    echo "Levanta é Dia de Estudar !";
        break;
       case 6:
        echo" Hoje é Sabado dia de Descanso";
        break;
       case 7:
    echo" Hoje é Domingo, Bom descanso";
        break;
       case 0:
        echo"Digite um Numero Valido!";
        default;
        echo" Dia da Semana Invalido !";
   }
 
   ?>
   <a href="javascript:history.go(-1)">voltar</a>
    </div>
</body>
</html>