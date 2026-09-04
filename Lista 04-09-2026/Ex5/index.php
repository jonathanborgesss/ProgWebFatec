<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="chamado">Número do chamado: </label>
            <input type="number" id="chamado" name="chamado" min="1" required>
        </div>
        <div>
            <label for="tempo">Tempo de indisponibilidade em horas: </label>
            <input type="number" id="tempo" name="tempo" min="0" step="0.1" required>
        </div>
        <button type="submit">Classificar chamado</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chamado = (int) $_POST["chamado"];
        $tempo = (float) $_POST["tempo"];

        if ($tempo <= 2) {
            $prioridade = "Baixa prioridade";
        } elseif ($tempo <= 8) {
            $prioridade = "Média prioridade";
        } else {
            $prioridade = "Alta prioridade";
        }

        echo "<p>Chamado número $chamado: $prioridade.</p>";
    }
    ?>
</body>
</html>
