<?php
$A = $_POST['lado_a']
$B = $_POST['lado_b']
$C = $_POST['lado_c']

function classificar_triangulo_lado($lado1, $lado2, $lado3) {
    //Cria uma lista com os valores dos LADOS
    $lados = [$lado1, $lado2, $lado3];

    //Ordena os valores do MENOR para o MAIOR
    sort($lados);

    //Pega-se os dois lados (lados MENORES) e efetua a soma, 
    //Caso sejam maiores que o terceiro lado (lado MAIOR)...
    //Temos um TRIÂNGULO!
    if ($lados[0] + $lados[1] <= $lados[2]) {
        return "Os lados informados NÃO FORMAM um triângulo."
    }

    if ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        return "Os lados formam um triângulo ISÓSCELES (possui 2 lados iguais)!"
    } elseif ($lado1 == $lado2 && $lado2 == $lado3) {
        return "Os lados formam um triângulo EQUILÁTERO (possui 3 lados iguais)!"
    } else {
        return "Os lados formam um triângulo ESCALENO (possui 3 lados diferentes)!"
    }
}

echo classificar_triangulo_lado($A, $B, $C);
?>