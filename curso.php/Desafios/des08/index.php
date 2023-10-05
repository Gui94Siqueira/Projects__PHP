<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <?php
    $number = $_GET['n1'] ?? 0;
    
    ?>

    <main>
        <h1>Infome um número</h1>
        <form action="" method="get">
            <label for="n1">Número:</label>
            <input type="number" name="n1" id="n1">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
    <h2>Resultado Final</h2>
        <?php
        $valor = sqrt($number);
        $cubo = $number ** (1/3);

        echo "<p>Analisando o <strong>numero " . $number . "</strong> temos:</p>";
        echo "<ul><li>A sua raiz quadrada é " . number_format($valor, 2, ",",".") . "</li><li>A sua raiz cúbica " . number_format($cubo, 2, ",",".") . "</li></ul><p></P>"
        
        ?>
    </section>
</body>
</html>