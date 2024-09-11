<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Peso Ideal</title>
</head>
<body>
    <h2>Cálculo do Peso Ideal</h2>
    <form method="POST">
        <label for="sexo">Sexo:</label><br>
        <select id="sexo" name="sexo" required>
            <option value="feminino">Feminino</option>
            <option value="masculino">Masculino</option>
        </select><br><br>

        <label for="altura">Altura (em metros):</label><br>
        <input type="number" step="0.1" id="altura" name="altura" required><br><br>

        <input type="submit" value="Calcular Peso Ideal">
    </form>

    <?php   
        function pesoIdeal($sexo, $altura) {
            if (strtolower($sexo) == 'feminino') {
                return round((62.1 * $altura) - 44.7, 2);
            } elseif (strtolower($sexo) == 'masculino') {
                return round((72.2 * $altura) - 58, 2);
            } else {
                return "Sexo inválido. Use 'feminino' ou 'masculino'.";
            }
        }

        $sexo = $_POST['sexo']??'masculino';
        $altura = $_POST['altura']?? 1.70;

        echo "Peso ideal para $sexo com altura $altura m: " . pesoIdeal($sexo, $altura) . " kg<br>";   
    ?>
</body>
</html>
