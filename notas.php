<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <main>

    <!-- Formulário HTML -->
<form method="post" action="">
    Nota: <input type="number" name="nota" min="0" max="10" step="0.1" required>
    <input type="submit" value="Ver Nota">
</form>

<?php
// Processamento PHP
    $nota = $_POST['nota'] ?? 10;

    switch (true) {
        case ($nota >= 0 && $nota <= 4):
            echo "F";
            break;
        case ($nota == 5 || $nota == 6):
            echo "D";
            break;
        case ($nota == 7 || $nota == 8):
            echo "C";
            break;
        case ($nota == 9):
            echo "B";
            break;
        case ($nota == 10):
            echo "A";
            break;
        default:
            echo "Nota inválida.";
    }
?>
    </main>    
</body>
</html>