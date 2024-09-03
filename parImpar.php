<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par e Impar</title>
</head>
<body>
    <head>
        <h1>Par e Impar</h1>
    </head>
    <!-- Formulário HTML -->
<form method="post" action="">
    Número: <input type="number" name="numero" required>
    <input type="submit" value="Verificar Paridade">
</form>

<?php
// Processamento PHP
    $numero = $_POST['numero'];

    if ($numero % 2 == 0) {
        echo "O número $numero é par.";
    } else {
        echo "O número $numero é ímpar.";
    }

?>

    
</body>
</html>