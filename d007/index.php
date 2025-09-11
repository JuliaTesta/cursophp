<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    
    $salMinimo = 1380.60;
    $salario = $_GET['sal'];
    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário(R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>">

            <p>Considerando o salário mínimo de <strong> R$<?=number_format($salMinimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php 
        //calculos
        $quantidade = intdiv($salario, $salMinimo);
        $dif = $salario % $salMinimo;

        echo "<p>Quem recebe um salario de R\$".number_format($salario,2, ",", ".")." ganha $quantidade salários mínimos + R\$".number_format($dif,2,",", ".")."</p>";
        
        ?>
    </section>
</body>
</html>