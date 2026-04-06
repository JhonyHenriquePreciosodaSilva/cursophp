<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    //área do candidato
    $numero = $_GET['num']??1;

    ?>

    <main>
        <h1>informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero ?>">
            <input type="submit" value="Calcular raizes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
            <?php 
            $rq = $numero ** (1/2);
            $rc = $numero ** (1/3);
            echo "<P>Analisando o <strong>número $numero</strong>, temos:";
            echo "<ul> <li> A sua raiz quadrada é ". number_format($rq,2,",",".") ."</li>";
            echo "<li>A raiz cúbica é ". number_format($rc,2,",",".") ." </li></ul>";

             ?>
    </section>
  
    
</body>
</html>