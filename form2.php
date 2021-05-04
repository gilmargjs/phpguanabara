<!DOCTYPE html>
<html lang="en">
<head>
    <?php
     $texto = isset($_GET["t"])?$_GET["t"]:"sem texto";
     $tamanho =  isset($_GET["tam"])?$_GET["tam"]:0;
     $cor = isset($_GET["cor"])?$_GET["cor"]:"#40000";
    ?>
    <link rel="stylesheet" href="/phpguanabara/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        span.texto{
            font-size: <?php  echo $tamanho; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div class="cab">Curso em Videos PhP</div>

  <div class="cop">
  <?php   
    echo "<span class='texto'>$texto</span>";
    
   ?>
    <a href="form2.html"> voltar </a>

    </div>  
</body>
</html>