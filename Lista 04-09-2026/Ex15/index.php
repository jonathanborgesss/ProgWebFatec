<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 15</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="senhaCorreta">Senha correta: </label>
            <input type="password" id="senhaCorreta" name="senhaCorreta" required>
        </div>

        <p>Digite até cinco tentativas:</p>

        <div>
            <label for="tentativa1">Tentativa 1: </label>
            <input type="password" id="tentativa1" name="tentativas[]" required>
        </div>
        <div>
            <label for="tentativa2">Tentativa 2: </label>
            <input type="password" id="tentativa2" name="tentativas[]" required>
        </div>
        <div>
            <label for="tentativa3">Tentativa 3: </label>
            <input type="password" id="tentativa3" name="tentativas[]" required>
        </div>
        <div>
            <label for="tentativa4">Tentativa 4: </label>
            <input type="password" id="tentativa4" name="tentativas[]" required>
        </div>
        <div>
            <label for="tentativa5">Tentativa 5: </label>
            <input type="password" id="tentativa5" name="tentativas[]" required>
        </div>

        <button type="submit">Verificar tentativas</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $senhaCorreta = $_POST["senhaCorreta"];
        $tentativas = $_POST["tentativas"];
        $indice = 0;
        $acessoConcedido = false;

        while ($indice < 5 && $acessoConcedido == false) {
            if ($tentativas[$indice] == $senhaCorreta) {
                $acessoConcedido = true;
            } else {
                $numeroTentativa = $indice + 1;
                echo "<p>Senha incorreta na tentativa $numeroTentativa.</p>";
            }

            $indice++;
        }

        if ($acessoConcedido) {
            echo "<p>Acesso concedido.</p>";
        } else {
            echo "<p>Limite excedido. Conta bloqueada.</p>";
        }
    }
    ?>
</body>
</html>
