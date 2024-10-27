<?php

$saldo = 1_000;
$nomeConta = "Alice Lavínia";

do {
    switch ($opcao) {
        case 1:
            echo "Saldo atual: R$" . number_format($saldo, 2) . "\n";
            break;
        case 2:
            echo "Digite o valor a sacar: ";
            $valorSacar = (float) fgets(STDIN);
            if ($valorSacar > $saldo) {
                echo "Saldo insuficiente!\n";
            } else {
                $saldo -= $valorSacar;
                echo "Saque realizado com sucesso!\n";
            }
            break;
        case 3:
            echo "Digite o valor a depositar: ";
            $valorDepositar = (float) fgets(STDIN);
            $saldo += $valorDepositar;
            echo "Depósito realizado com sucesso!\n";
            break;
        case 4:
            echo "Adeus!\n";
            break;
        default:
            echo "Opção inválida!\n";
            break;
    }
} while ($opcao != 4);

?>
