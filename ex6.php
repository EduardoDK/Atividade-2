
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quitanda do Pudim</title>
</head>
<style>
img{
    width:500px;
    height:500px;
}
</style>
<body>
    
      <?php

    $valor1 = $_GET["pepino"];
    $valor2 = $_GET["goiaba"];
    $valor3 = $_GET["batata"];


    if($valor1 == "pepino" || $valor2 == "goiaba" || $valor3 == "batata"){
       echo  "<img src='img/pepino.jpg'>";
       echo  "<img src='img/goiaba.jpg'>";
       echo  "<img src='img/batata.jpg'>";

    }
    else{
    echo "<h1>Insira pelo menos um dos valores corretos : Pepino , Batata ou Goiaba</h1>";

    }
    ?>


    
</body>
</html>








