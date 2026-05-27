<?php
$A = $_POST["lado_a"];
$B = $_POST['lado_b'];
$C = $_POST['lado_c'];

//Calcula a SOMA dos valores dos lados
$total = $A + $B + $C;

//Verifica se o total é 180°, se for o caso, aplica uma das três situações:
//O objeto é um triângulo e é classificado como Acutângulo, Retângulo ou Obtusângulo.
if ($total != 180) {
    echo "Este sólido possui a soma dos ângulos inferior OU superior a 180°, logo não é um triângulo.";
} elseif ($A < 90 && $B < 90 && $C < 90) {
    echo "Este é um triângulo ACUTÂNGULO (ângulos menores que 90°)";
} elseif ($A == 90 || $B == 90 || $C == 90) {
    echo "Este é um triângulo RETÂNGULO (um ângulo igual a 90°)";
} else {
    echo "Este é um triângulo OBTUSÂNGULO (um ângulo maior que 90°)";
}
?>