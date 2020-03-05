<!DOCTYPE HTML>
<html lang=”pt-br”>
<head>
    <meta charset=”UTF-8”>
    <title></title>
</head>
<body>
<div>
    <?php
    $valor1 = $_GET["a"];
    $valor2 = $_GET["b"];
    echo " <h2>Valor:  $valor1 e $valor2 </h2></br>";

    echo "</br> A soma ".($valor1+$valor2);
    echo  "</br>A subtração ".($valor1-$valor2);
    echo "</br> A divisao ".($valor1/$valor2);
    echo  "</br>A multiplicação ".($valor1*$valor2);
    echo  "</br>A resto da divisao ".($valor1%$valor2);
    ?>
</div>

</body>
</html>