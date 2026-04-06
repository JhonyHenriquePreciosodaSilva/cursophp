<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas do PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        
            <?php
            //abs() retorna o valor absoluto de um número
            //base_convert() converte para decimal, binário etc
            //ceila(arredonda para cima) floor(para baixo) round(arredondamento normal)
            //hypot(calcula a hipotenusa)
            //intdiv(divisão inteira)
            //min() e max() valor minímo e máximo
            //pi() calcula o pi
            //pow(calcula a potencia mas perde a ordem de procedencia)
            // sin( seno) cos(coseno) tan(tangente)
            //sqrt(calcula a raiz quadrada)
            $r= abs (50);
            $r1= abs (-2000);
            $r2 = base_convert(254, 10, 2);
            $r3 = intdiv (5,2);
            $r4=min(5,2) ;
            $r5= max(5,5,7,8,9);
            $r6 = sqrt(81);
              echo "o valor absoluto de 50 é $r ";
              echo " O valor abosoluto de -2000 é $r1";
              echo " O valor é  $r3";
              echo " \ O valor é $r4";
              echo " O valor é $r5";
              echo " O valor é $r6";
        
            ?>
    </main>
    
</body>
</html>