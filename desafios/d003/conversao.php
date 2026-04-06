<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas</h1>

        <?php 
        //cotação do goole do dolar
        $cotação=5.26;

        //quantos $$ você tem?
        $real = $_REQUEST["din"] ?? 0;

        ///equivalência em dolar
        $dólar = $real/$cotação;
        // mostrar resultado
        ///echo  "Seus R\$" . number_format($real,2,",","."). " equivalem a US\$" . number_format($dólar,2, ",",".");
        //está é uma maneira comum
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        //NUMFMT_CREATE é a moeda do país selecionado
        echo"<p>Seus ".numfmt_format_currency($padrão,$real,"BRL")." equivalem a <strong>".numfmt_format_currency($padrão,$dólar,"USD")."</strong></p>";



        ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    
    </main>
</body>
</html>
