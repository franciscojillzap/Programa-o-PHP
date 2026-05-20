<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma 2 números</title>
</head>
<body>
    <?php
    $num1 = $_POST("numero1");
    $num2 = $_POST("numero2");
    
    $soma = $num1 + $num2;
    
    echo ("A soma de $num1 e $num2 é igual a $soma");
    ?>    
</body>
</html>
