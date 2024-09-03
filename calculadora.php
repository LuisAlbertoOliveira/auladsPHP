<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <head>
        <h1>Calculadora</h1>
    </head>
    <main>
        <!-- Formulário HTML -->
<form method="post" action="">
    Número 1: <input type="number" name="num1" required>
    Número 2: <input type="number" name="num2" required>
    Operação: 
    <select name="operacao">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="submit" value="Calcular">
</form>

<?php
// Processamento PHP
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    switch ($operacao) {
        case '+':
            echo $num1 + $num2;
            break;
        case '-':
            echo $num1 - $num2;
            break;
        case '*':
            echo $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                echo $num1 / $num2;
            } else {
                echo "Erro: Divisão por zero.";
            }
            break;
        default:
            echo "Operação inválida.";
    }
?>

    </main>
    
</body>
</html>