<?php

    if(isset($_GET['ingredientes'])) {
        $ingredientes = $_GET['ingredientes'];
    } else {
        $ingredientes = null;
    }

    if(isset($_GET['qtde'])) {
        $qtde = $_GET['qtde'];
    } else {
        $qtde = null;
    }

    if(isset($_GET['pgto'])) {
        $pgto = $_GET['pgto'];
    } else {
        $pgto = null;
    }

    if(isset($_GET['entrega'])) {
        $entrega = $_GET['entrega'];
    } else {
        $entrega = null;
    }



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de dados</title>
</head>
<body>
    <?php if($ingredientes != null) : ?>
        <?php foreach($ingredientes as $i) : ?>
            <!-- nossa estrutura html se repetira dependendo do numero de itens da lista -->
        <h3 style="font-family: 'Courier New', Courier, monospace;">
            <?= $i ?>
        </h3><hr>
        <?php endforeach ?>
    <?php else : 
        echo "<h3> Sem ingredientes. </h3><hr>"; 
        endif
    ?>

    <h3 style="font-family: 'Courier New', Courier, monospace;">
        <?= $qtde ?>
    </h3><hr>
    <h3 style="font-family: 'Courier New', Courier, monospace;">
        <?= $pgto ?>
    </h3><hr>
    <h3 style="font-family: 'Courier New', Courier, monospace;">
            <?= $entrega ?>
    </h3><hr>

</body>
</html>