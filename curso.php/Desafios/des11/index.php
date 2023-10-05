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
    $valor = $_GET['val'] ?? '0';
    $porcent = $_GET['porc'] ?? '1';
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="val">Preço deo produto (R$):</label>
            <input type="number" name="val" id="val" required>
            <label for="porc">Qual sera o percentual de reajuste <strong>(<?=$porcent?>%)</strong></label>
            <input type="range" value="0.0" min="0" max="100" name="porc" id="porc">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
            $valor = 100;
            $calc = $valor / $porcent;
            $resut = $valor + $porcent; 
        ?>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($valor, 1,".",",")?> vai passar a custar R$ <strong><?=number_format($calc, 1, ".",",")?></strong> apartir de agora.</p>
    </section>

    
</body>
</html>