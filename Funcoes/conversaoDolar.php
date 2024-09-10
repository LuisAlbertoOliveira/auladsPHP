<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Conversão de Moeda</title>
</head>
<body>
    <h1>Conversão de Dólar para Real</h1>
    <form method="POST">
        <label for="dolar">Valor em Dólares:</label><br>
        <input type="number" step="0.01" id="dolar" name="dolar" required><br><br>
        <input type="submit" value="Converter">
    </form>
    <br>
    <?php
    define('COTACAO_DOLAR', 1.81);

        function dolarParaReal($valorDolar) {
            return round($valorDolar * COTACAO_DOLAR, 2);
        }

        $valorEmDolar = $_POST['dolar'] ?? 1;
        $result = dolarParaReal($valorEmDolar);
        echo "$valorEmDolar dólares em reais: R$ $result <br>";
        
        //echo "$valorEmDolar dólares em reais: R$ " . dolarParaReal($valorEmDolar) . "<br>";
   
    ?>
</body>
</html>
