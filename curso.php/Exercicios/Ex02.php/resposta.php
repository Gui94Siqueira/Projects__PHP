<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["num"] ?? "sem numero";
            $a = $n - 1;
            $s = $n + 1;
            echo "<p>O numero digitado foi, <strong>$n</strong>!</p>";
            echo "<P>O numero antecesor é <strong>$a</strong>";
            echo "<P>O numero sucessor é <strong>$s</strong>";

        ?>
        <button onclick="javascript:window.location.href='index.html'">&#X2b05;Voltar</button>
    </main>
</body>
</html>