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
        $dividendo = $_GET['d1'] ?? 0;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="" method="get">
            <label for="d1">Salário R$</label>
            <input type="number" name="d1" id="d1" value="<?=$dividendo?>">
            <label for="d2">Considedarando o salário minimo de R$1.380,00</label>
            <input type="submit" value="Analizar">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php
            //Cálculos
           $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); 
           $quociente = intdiv($dividendo, 1380);    
           $resto = $dividendo % 1380;
           echo "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $dividendo, "BRL") . " ganha " . $quociente . "<strong> salários minimos + </strong>" . numfmt_format_currency($padrao, $resto, "BRL") . "</P>"
        ?>
        
        
    </section>
</body>
</html>