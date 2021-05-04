<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="/phpguanabara/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        span.texto{

            color: red;
        }
    </style>
</head>
<body>



<div class="cab">Curso em Videos PhP</div>

  <div class="cop">
  <?php
     $n1 = isset($_GET["n1"])?$_GET["n1"]:"Sem Nota";
     $n2 = isset($_GET["n2"])?$_GET["n2"]:"Sem Nota";
     $media = ($n1 + $n2) / 2;

     echo "A Média Entre $n1 e $n2 é igual a $media <br/>";
    
     if($media>=7){
        $a = " Aprovado ";
     }

    elseif($media>5 && $media<7){
            $a =" Recuperção ";
    }

    else{
            $a = " Reprovado ";
    
     }

    ?>
  <?php   
    echo "Situação do Aluno: <span class='texto'>$a</span>";
    
   ?>
    <a href="ifaninhado3.html"> voltar </a>

    </div>  
</body>
</html>