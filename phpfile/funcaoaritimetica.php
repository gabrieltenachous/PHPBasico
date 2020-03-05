<!DOCTYPE HTML>
<html lang=”pt-br”>
<head>
    <meta charset=”UTF-8”>
    <title></title>
</head>
<body>
<div>
    <?php
        $val1 = $_GET["a"];
        $val2 = $_GET["b"];
        echo "valor absoluto:".abs($val1);
        echo "</br>valor potenciação:".pow($val1, $val2);
        echo "</br>valor sqrt:".sqrt($val1);
        echo "</br>valor arredondamento:".round($val1);
        echo "</br>valor Formatação de numero:".number_format($val1,2);

    ?>
</div>

</body>
</html>