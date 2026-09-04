<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="usuario">Usuário: </label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        <div>
            <label for="senha">Senha: </label>
            <input type="password" id="senha" name="senha" required>
        </div>
        <button type="submit">Entrar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        if ($usuario == "admin" && $senha == "fatec2026") {
            echo "<p>Login realizado com sucesso.</p>";
        } else {
            echo "<p>Usuário ou senha inválidos.</p>";
        }
    }
    ?>
</body>
</html>
