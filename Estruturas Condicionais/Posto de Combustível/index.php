<?php
$tipo = readline("Digite o tipo de combustível (A-álcool / G-gasolina): ");
$litros = readline("Digite a quantidade de litros: ");

if ($tipo == "A" || $tipo == "a") {
    $precoLitro = 4.90; // valor base do álcool
    if ($litros <= 20) {
        $desconto = 0.03; // 3%
    } else {
        $desconto = 0.05; // 5%
    }
} elseif ($tipo == "G" || $tipo == "g") {
    $precoLitro = 5.80; // valor base da gasolina
    if ($litros <= 20) {
        $desconto = 0.04; // 4%
    } else {
        $desconto = 0.06; // 6%
    }
} else {
    echo "Tipo de combustível inválido!\n";
    exit; // encerra o programa
}

$precoSemDesconto = $litros * $precoLitro;
$valorDesconto = $precoSemDesconto * $desconto;
$total = $precoSemDesconto - $valorDesconto;

echo "Valor a ser pago: R$ " . number_format($total, 2, ",", ".") . "\n";
?>
