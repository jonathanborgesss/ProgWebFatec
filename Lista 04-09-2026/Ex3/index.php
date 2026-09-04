<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="nome">Nome do cliente: </label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div>
            <label for="renda">Renda mensal: </label>
            <input type="number" id="renda" name="renda" min="0" step="0.01" required>
        </div>
        <div>
            <label for="valor">Valor solicitado: </label>
            <input type="number" id="valor" name="valor" min="0" step="0.01" required>
        </div>
        <button type="submit">Analisar crédito</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $renda = (float) $_POST["renda"];
        $valor = (float) $_POST["valor"];
        $valorMaximo = $renda * 5;

        if ($valor <= $valorMaximo) {
            echo "<p>$nome, crédito aprovado.</p>";
        } else {
            echo "<p>$nome, crédito negado.</p>";
        }

        echo "<p>Valor máximo permitido: R$ " . number_format($valorMaximo, 2, ",", ".") . ".</p>";
    }
    ?>
</body>
</html>
