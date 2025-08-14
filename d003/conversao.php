<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>COnversor de Moedas</h1>
    <?php 

        $cotacao = 5.17;
        $real = $_GET["din"] ?? 0; //nome do formulario entre []
        $dolar = $real / $cotacao;

        $padrao = numfmt_create("pt_BR", NumberFormatter:: CURRENCY);

        echo "Seus ".numfmt_format_currency($padrao,$real, "BRL"). " equivalem a ". numfmt_format_currency($padrao, $dolar, "USD");

    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>

