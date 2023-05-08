<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Resultado</title>
</head>
<body>
    <?php
    $numero1 = floatval($_GET["numero1"]);
    $numero2 = floatval($_GET["numero2"]);
    $soma = $numero1 + $numero2;
    echo "a soma é"$soma;
    ?>
</body>
</html>