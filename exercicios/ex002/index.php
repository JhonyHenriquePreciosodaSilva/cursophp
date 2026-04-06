<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>exemplo de php</h1>
        
        <?php
        //mostrando o horario oficial da região de são paulo Brasil.
        date_default_timezone_set("America/sao_paulo");
        echo "hoje é dia" . date("d/m/y");
        echo "e a hora atual é " . date("g:i:s");
        //-------------------------------------------------
        //declarando variaveis $, constante é algo que não muda e para declarar é so escrever const
        $nome= "Jhony";
        $sobrenome= "Henrique";
        const pais = "Brasil";
        echo "Muito prazer, $nome $sobrenome! você mora no ". pais;
         $canal = "Curso em video";
         $ano = date('y');
        
        ?>
    </main>
</body>
</html>