<?php
$quantidade = readline("Digite o número de maçãs compradas: ");

if ($quantidade < 12) {
    $preco = 0.30;
} else {
    $preco = 0.25;
}

$total = $quantidade * $preco;
echo "O valor total da compra é R$ " . number_format($total, 2, ",", ".") . "\n";
?>
