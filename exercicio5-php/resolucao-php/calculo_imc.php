<?php
$A = $_POST["altura"];
$P = $_POST["peso"];

$imc = $P / ($A*$A);

function tipo_peso($valor) {
    if ($valor < 25) {
        return "Você é classificado como NORMAL"
    } elseif ($valor >= 25 && $valor <= 30) {
        return "Você é classificado como OBESO"
    } else {
        return "Você é classificado com OBESIDADE MÓRBIDA. Quantos pães você come por dia? DOZE?"
    }
}

//Ao final, escreva se a pessoa está com 
//peso normal (IMC abaixo de 25),
//obeso (IMC entre 25 e 30)
//obesidade mórbida (IMC acima de 30).