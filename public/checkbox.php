<?php
    if(isset($_GET['ingredientes'])) {
        $ingredientes = $_GET['ingredientes'];
    } else {
        $ingredientes = null;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de dados</title>
</head>
<body>
    <?php foreach($ingredientes as $i) : ?>
        <!-- nossa estrutura html se repetira dependendo do numero de itens da lista -->
    <h3 style="font-family: 'Courier New', Courier, monospace;">
        <?= $i ?>
    </h3><hr>
    <?php endforeach ?>
    
</body>
</html>