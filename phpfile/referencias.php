
<!DOCTYPE HTML>
<html lang=”pt-br”>
<head>
    <meta charset=”UTF-8”>
    <title></title>
</head>
<body>
<div>
    <?php
    $a = 3;
    $b = $a;
    $b = 8;
    echo "A: $a B: $b";
    $a = 3;
    $b = &$a;
    $b = 8;
    echo " com referencia A:$a B:$b";
    ?>
</div>

</body>
</html>