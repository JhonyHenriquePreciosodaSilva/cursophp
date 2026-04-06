<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $atual = date("Y");
    $nasc = $_GET['nasc'] ?? 2000;
    $ano = $_GET['ano'] ?? $atual;

    // 🔒 VALIDAÇÃO
    if ($ano < $nasc) {
        $erro = "O ano informado não pode ser menor que o ano de nascimento!";
    } else {
        $idade = $ano - $nasc;
    }

    // 🧠 FUNÇÃO PLURAL
    function plural($num, $singular, $plural) {
        return ($num == 1) ? $singular : $plural;
    }
    ?>
    
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?= $atual ?>" value="<?= $nasc ?>">

            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?= $atual ?></strong>)</label>
            <input type="number" name="ano" id="ano" min="<?= $nasc ?>" value="<?= $ano ?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>

        <?php if (isset($erro)): ?>
            <p style="color:red;"><?= $erro ?></p>
        <?php else: ?>
            <p>
                Quem nasceu em <?= $nasc ?> vai ter 
                <strong><?= $idade . " " . plural($idade, "ano", "anos") ?></strong> 
                em <?= $ano ?>!
            </p>
        <?php endif; ?>
    </section>
</body>
</html>
