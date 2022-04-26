<?php
    if( isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = null;
    }
    if(isset($_POST['pass'])) {
        $pass = $_POST['pass'];
    } else {
        $pass = null;
    }
    // o if faz com que, caso nao receba nenhum dado post, no caso cliclando como visitante, ele trata o post como nulo
    
    
    
    if($email != null && $pass != null) {
        if($email == 'gustavomallmann3@gmail.com' && $pass == '1234') {
            $msg = 'Bem vindo!';
            $redirect = "<meta http-equiv='refresh' content='3; url=htts://www.qi.edu.br'>";
        } else {
            $msg = 'Acesso Negado!';
            $redirect = "<meta http-equiv='refresh' content='3; url=../index.php'>";
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de dados</title>
</head>
<body>
    <h1>
        <?= (isset($msg) ? $msg : "Visitante")?>
    </h1>
    <?= (isset($redirect) ? $redirect : "<hr>")?>
    
    <form action="checkbox.php" method="get">
        <input type="checkbox" name="ingredientes[]" value="Pão">Pão<br>
        <input type="checkbox" name="ingredientes[]" value="Queijo">Queijo<br>
        <input type="checkbox" name="ingredientes[]" value="Hamburguer">Hamburguer<br>
        <input type="checkbox" name="ingredientes[]" value="Molho">Molho<br>
        <input type="checkbox" name="ingredientes[]" value="Alface">Alface<br>
        <input type="checkbox" name="ingredientes[]" value="Picles">Picles<br>

        <hr>
        Quantidade:
        <input type="number" name="qtde" value="1" min="1">
        <hr>
        Pagamento:
        <input type="radio" name="pgto" value="Dinheiro"> Dinheiro
        <input type="radio" name="pgto" value="Pix"> Pix
        <input type="radio" name="pgto" value="Cartão"> Cartão
        <hr>
        Entrega:
        <select name="entrega" require>
            <option value="">Selecione...</option>
            <option value="Viamão">Viamão</option>
            <option value="Gravatai">Gravatai</option>
            <option value="Alvorada">lvorada</option>
            <option value="Canoas">Canoas</option>
            <option value="Porto Alegre">Porto Alegre</option>

        </select>

        <br><br>
        <input type="submit" value="Fazer Pedido">
        <input type="reset" value="Reiniciar">
    </form>
    
</body>
</html>