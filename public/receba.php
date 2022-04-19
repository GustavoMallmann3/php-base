<?php
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if($email == 'gustavomallmann3@gmail.com' && $pass == '1234') {
        $msg = 'Bem vindo!';
        $redirect = "<meta http-equiv='refresh' content='3; url=htts://www.qi.edu.br'>";
    } else {
        $msg = 'Acesso Negado!';
        $redirect = "<meta http-equiv='refresh' content='3; url=../index.php'>";
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
        <?php echo $msg?>
        <?= $redirect?>
    </h1>
    
</body>
</html>
