<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>numeros aleatorios</title>
</head>
<body>
    <header>
        <h1>bem vindo a numeros aleatorios</h1>
    </header>
    <section>
        <h2>Trabalhando com numeros aleatorios</h2>
        <div>
            <?php
                $min = 0;
                $max = 100;
                $num = mt_rand($min, $max);
                echo "<p>Gerando um numero aleatorio entre $min e $max...
                <br>O valor gerado foi:<strong>$num</stron>";
            ?>
        </div>

        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>

    </section>
</body>
</html>