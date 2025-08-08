<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>

        <p>
            <?php 
            $n = $_GET["num"] ?? 0; //se nao tiver num é zero
            $a = $n - 1;
            $s = $n + 1;
            echo "O número escolhido foi $n";
            echo "<br>O seu antecessor é $a";
            echo "<br>O seu sucessor é $s";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>
</html>