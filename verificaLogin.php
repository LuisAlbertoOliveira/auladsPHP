<!-- Formulário HTML -->
<form method="post" action="">
    Usuário: <input type="text" name="usuario" required>
    Senha: <input type="password" name="senha" required>
    <input type="submit" value="Login">
</form>

<?php
// Processamento PHP
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == "admin" && $senha == "1234") {
        echo "Login bem-sucedido.";
    } else {
        echo "Login ou senha incorretos.";
    }
?>
