<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="nome">Nome do funcionário: </label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div>
            <label for="idade">Idade: </label>
            <input type="number" id="idade" name="idade" min="0" required>
        </div>
        <button type="submit">Verificar acesso</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $idade = (int) $_POST["idade"];

        if ($idade >= 18) {
            echo "<p>$nome, acesso autorizado.</p>";
        } else {
            echo "<p>$nome, acesso negado.</p>";
        }
    }
    ?>
</body>
</html>
