<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Conversão de Temperatura</title>
</head>
<body>
    <h2>Conversão de Temperatura de Fahrenheit para Celsius</h2>
    <form method="post">
        <label for="temperatura">Insira a temperatura em Fahrenheit:</label><br>
        <input type="number" id="temperatura" name="temperatura" required><br><br>
        <input type="submit" value="Converter">
    </form>

    <?php   
        function converter($fahr) {
            return ($fahr - 32) * 5 / 9;
        }

        $temperatura = $_POST['temperatura'] ?? 100;
        $celsius = converter($temperatura) ?? 0;
       // echo "Temperatura em Fahrenheit: $temperatura °F - Em Celsius: $celsius °C<br>";   
       echo "Temperatura em Fahrenheit: $temperatura °F - Em Celsius: " . round($celsius, 2) . "°C<br>";
    ?>
</body>
</html>
