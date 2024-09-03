<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior Idade</title>
   
</head>
<body>
    <main>
        
<!-- Formulário HTML -->
<form method="post" action="">
    Idade: <input type="number" name="idade" required>
    <input type="submit" value="Verificar Cadastro">
</form>

<section>
<?php
// Processamento PHP

    $idade = $_POST['idade'] ?? 18;

    if ($idade < 18) {
        echo "Você não pode se cadastrar, pois é menor de idade.";
    } else {
        echo "Cadastro permitido!";
    }

?>
</section>
    </main>
    
</body>
</html>

