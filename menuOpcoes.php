<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Opções</title>
</head>
<body>
    <head>
        <h1>
            Menu Banco
        </h1>
    </head>
    <main>
        <!-- Formulário HTML -->
<form method="post" action="">
    Escolha uma Opção: 
    <select name="opcao">
        <option value="1">Ver Saldo</option>
        <option value="2">Depositar</option>
        <option value="3">Sacar</option>
        <option value="4">Sair</option>
    </select>
    <input type="submit" value="Selecionar">
</form>

<?php
// Processamento PHP
 $opcao = $_POST['opcao'];

    switch ($opcao) {
        case 1:
            echo "Seu saldo é R$ 1000,00.";
            break;
        case 2:
            echo "Você escolheu depositar. Depósito realizado com sucesso.";
            break;
        case 3:
            echo "Você escolheu sacar. Saque realizado com sucesso.";
            break;
        case 4:
            echo "Você escolheu sair. Até logo!";
            break;
        default:
            echo "Opção inválida.";
    }
?>
    </main>
    </body>
</html>