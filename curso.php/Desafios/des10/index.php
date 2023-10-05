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
    $ano1 = $_GET['ano'] ?? '0';
    $ano2 = $_GET['anocalc'] ?? '2023';
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="data de nasc">em que ano você nasceu?</label>
            <input type="number" name="ano" id="ano" required>
            <label for="idade">Quer saber sua idade em que ano?<strong>(Atualmente estamos no ano de 2023)</strong></label>
            <input type="number" name="anocalc" id="anocalc">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
        $nasc = $ano2 - $ano1;
        
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$ano1?> tera <strong><?=$nasc?> anos</strong> em <?=$ano2?>!</p>
    </section>
</body>
</html>