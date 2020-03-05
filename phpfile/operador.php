<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <title>nem</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="" method="post">
    <h2>Calculadora</h2>
    Nota 1: <input name="num1" type="text"><br>
    Nota 2: <input name="num2" type="text"><br>
    <input name="resultado" type="submit" value="Ver nota">

</form>

<?php
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$op = $_POST['resultado'];
$notafinal = ($n1+$n2)/2;
if (!empty($op)){

    if($notafinal>=6){
        echo "Aprovado";
    }else{
        echo "Reprovado";
    }
}
?>
</body>
</html>