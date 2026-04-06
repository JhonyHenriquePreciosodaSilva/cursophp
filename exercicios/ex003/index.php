<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste de tipos primitivos </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>teste de tipos primitivos</h1>
        <?php
        $num = 0x1A;
        $num1=300;
        $v="lelele";
        echo "O valor da variavel é $num1";
        echo "O valor da variavel é $num";
           //var de variavel e dump de despejo
        var_dump($v);
          // pode pedir para considerar outro tipo
          
           $x = (string)34;
           var_dump($x);
           //34 é um tipo de numero mas eu pdi para considerar string
        
        ?>
    </main>
    
</body>
</html>