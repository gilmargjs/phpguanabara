<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="/phpguanabara/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>



<div class="cab">Curso em Videos PhP</div>

  <div class="cop">
  <?php
     $ano = isset($_GET["num"])?$_GET["num"]:"oi";
     $idade = date("Y") - $ano;

     echo " Você Nasceu Em $ano e Tem $idade Anos <br/>";
    
     if($idade<16){
        $v = " Não pode votar ";
     }

    elseif($idade>=16 && $idade<18 || $idade>65){
             $v ="Seu Voto é Opcional ";
    }

    else{
             $v = " Seu Voto é Obrigatório ";
    
     }
    echo "$v";

    ?>
    <a href="ifaninhado1.html"> voltar </a>

    </div>  
</body>
</html>