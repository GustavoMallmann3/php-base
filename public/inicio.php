<?php require_once "../src/views/header.php"; ?>

<div class="login-center">
    <h1>::: Login :::</h1>
    <form action="receba.php" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col-lg2 col-md-8 col-sm-12">
                    <input type="email" class="form-control" name="email" placeholder="Digite seu email" required>
                    <br>
                    <input type="password" class="form-control" name="pass" placeholder="Digite sua senha" required>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-6 offset-3"> -->
                    <input type="submit" value="Enviar dados" class="btn btn-success col-5 offset-1">
                    <input type="reset" value="Limpar dados" class="btn btn-warning col-5 offset-1">
                    <br><br>
                    <a href="receba.php">Entrar como Visitante</a>
                <!-- </div> -->
            </div>
        </div>
    </form>
</div>

<?php require_once "../src/views/footer.php"; ?>