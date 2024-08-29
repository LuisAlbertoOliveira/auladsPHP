<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do formulário</h1>
    </header>
    <main>
    <?php 
            $n = $_GET["nome"];
            $s = $_GET["sobrenome"];

            echo"É um prazer ter você aqui $n $s !";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>    

</body>
</html>