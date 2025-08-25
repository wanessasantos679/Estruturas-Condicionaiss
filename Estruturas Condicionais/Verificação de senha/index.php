<?php
$senha = 1234; // senha correta
$entrada = readline("Digite a senha: "); // entrada do usuário

if ($entrada == $senha) {
    echo "ACESSO PERMITIDO\n";
} else {
    echo "ACESSO NEGADO\n";
}
?>
