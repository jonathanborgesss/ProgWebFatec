<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="estoqueAtual">Estoque atual: </label>
            <input type="number" id="estoqueAtual" name="estoqueAtual" min="0" required>
        </div>
        <div>
            <label for="retirada">Quantidade retirada por operação: </label>
            <input type="number" id="retirada" name="retirada" min="1" required>
        </div>
        <div>
            <label for="estoqueMinimo">Estoque mínimo: </label>
            <input type="number" id="estoqueMinimo" name="estoqueMinimo" min="0" required>
        </div>
        <button type="submit">Simular retiradas</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $estoqueAtual = (int) $_POST["estoqueAtual"];
        $retirada = (int) $_POST["retirada"];
        $estoqueMinimo = (int) $_POST["estoqueMinimo"];
        $operacao = 0;

        if ($estoqueAtual <= $estoqueMinimo) {
            echo "<p>O estoque já está no nível mínimo.</p>";
        } else {
            while ($estoqueAtual > $estoqueMinimo) {
                $estoqueAtual = $estoqueAtual - $retirada;

                if ($estoqueAtual < $estoqueMinimo) {
                    $estoqueAtual = $estoqueMinimo;
                }

                $operacao++;
                echo "<p>Operação $operacao: estoque atual = $estoqueAtual.</p>";
            }
        }
    }
    ?>
</body>
</html>
