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
        //cotação do dolar
            $inicio = date("m-d-Y", strtotime("-7 days")); 
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            if (isset($dados["value"][0]["cotacaoCompra"])) {
                $cotacao = $dados["value"][0]["cotacaoCompra"];
                echo "A cotação foi $cotacao";
            } else {
                echo "Erro ao obter cotação";
                var_dump($dados);
            }
            

                //quantos $$ você tem?
                $real = $_REQUEST["din"] ?? 0;

                ///equivalência em dolar
                $dólar = $real/$cotacao;
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
