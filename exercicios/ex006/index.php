<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
        $res0= 5 + 2 / 2;
        echo "O resultado é $res0";//existe a ordem de precedência, o reseultado é 6 e não 3.5
        // ordem ** * / % + e -
        //para mudar a ordem é só colocar os ()
        $res1= (5 + 2) / 2;
        echo " ,O resultado é $res1";
        ?>
    </main>
</body>
</html>