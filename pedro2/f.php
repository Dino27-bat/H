<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
    content="IE=edge">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
   <?php
        echo "O seu console é: " . $_GET["Console"];
        echo "<br>Voce pagou: " . $_GET["custo"];
        $custo = $_GET["custo"];
        $Console = $_GET["Console"];
        if ($Console == Nintendo && $custo > 1)
        echo "<br>";
        echo "uj"
    ?>
</body>
</html>