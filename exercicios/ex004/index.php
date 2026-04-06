<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
        //aspas duplas ele interpreta o conteúdo, aspas simples não
        $nome = "jhony";
        echo "olá $nome ";
        echo 'olá $nome';
        //não é possivel colocar aspas duplas dentro de aspas duplas o mesmo comas simples
         $nome2="Jhony";
         $snome="Biro";
         $fnome="Henrique";
         echo "olá $nome2 \"$snome\" $fnome";
         //para usar precisa colocar barra que significa sequência de escape
         // /t tabulação /n nova linha \barra invertida $ sinal de cifrão \u{} unicode codepoint
         $canal= "curso em video";
         $ano= date('y');
         echo <<< TESTE
            olá $canal
            tudo jóia ?
            como esta o ano de $ano de vocês?
            Abraços !!
            TESTE;
            //heredoc permite você escrever várias frases do jeito que você quiser, e tudo será exibido da maneira que vc colocou
        
             $ccanal= "curso em video";
         $ano= date('y');
         echo <<< 'TESTE'
            olá $canal
            tudo jóia ?
            como esta o ano de $ano de vocês?
            Abraços !!
         TESTE;
         //nowdoc é igual heardoc, porém é colocado asps simples e tudo dentro será exibido literalmente sem interpretação.
        ?>
    </main>
    
</body>
</html> 