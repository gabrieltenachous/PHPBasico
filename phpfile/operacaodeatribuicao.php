<!DOCTYPE HTML>
<html lang=”pt-br”>
<head>
    <meta charset=”UTF-8”>
    <title></title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        echo "Preço sem desconto: $n1";
        $n1 -= $n1*10/100;
        echo "</br> Preço com desconto de 10%: $n1"
    ?>
</div>

</body>
</html>