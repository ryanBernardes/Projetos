<?php
if(isset( $_POST['fah'])){
 $fah = 0;
 $cel = 0;

 $fah = (double) $_POST['fah'];
 $cel = ($fah - 32)/1.8;
 

}




?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Idade</title>
    
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="background-color: #5a189a;">
          <a class="navbar-brand"><img src="./img/icon.png" width="120px" height="120px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" 
          aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
    
              
              <a class="nav-link active" aria-current="page" style="margin-right: 20px;" href="imc.php"><h5 style="color: rgb(255, 255, 255);">IMC</h5></a>
              <a class="nav-link active" aria-current="page" style="margin-right: 20px;"  href="idade.php"><h5 style="color: rgb(255, 255, 255);">Idade</h5></a>
              <a class="nav-link active" aria-current="page" style="margin-right: 20px;"  href="triangulo.php"><h5 style="color: rgb(255, 255, 255);">Triângulo</h5></a>
              <a class="nav-link active" aria-current="page" style="margin-right: 20px;"  href="grau.php"><h5 style="color: rgb(255, 255, 255);">Temperatura </h5></a>
              
            
          
          </div>
        </div>
      </nav>

    <div class="site">
        <div class="container-t">
            <div class="metade">
            <h1 style="margin-top: 60px; color:white" >Converter Temperatura</h1>
            <form method="post" action="grau.php">
                <div class="form-group">
                    <label  for="nome"  style="margin-top: 50px; color:white" >Temperatura em Fahrenheit :</label>
                    <input  style="margin-top: 20px;"  placeholder="Temperatura em Fahrenheit" type="text" id="fah" name="fah" >
                </div>
                <div class="form-group">
                    <button style="margin-top: 20px;"  type="submit">Converter </button>
                </div>
            </form>
            </div>
            <div class="o"></div>
        </div>
        <div class="php">
            <?php 
            
            if(!empty($fah)){
            echo '<span> <p  style="margin-top: 60px; color:white" >'.'A temperatura <br> em Celcius é: ' .number_format($cel, 2).'°C</p> </span>';
            if ($cel>=22){
                echo '<span> <p style="margin-top: 50px; color:white">'."Calor"."</p> </span>";
                echo '<img class="grau" src="./img/calor.png">';
            }else if ($cel>=15){
                echo '<span> <p style="margin-top: 50px; color:white" >'."Ameno"."</p> </span>";
                echo '<img class="grau" src="./img/ameno.png">';
            }else{
                echo '<span> <p style="margin-top: 50px; color:white" >'."Frio"."</p> </span>";
                echo '<img class="grau" src="./img/frio.png">';
            }
             }
            ?>
                
        </div>
    </div>
            
    <footer
      class="bg-body-tertiary text-center text-lg-start"
      style="margin-top: 0px"
    >
      <div
        class="text-center p-3"
        style="background-color: #5a189a; color:white;">

      Geovana Fernandes Ryan Bernardes ©
      </div>
    </footer>

</body>
</html>
