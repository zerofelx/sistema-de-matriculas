<?php
    require ("includes/header.php");
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-7">
            test
        </div>
        <div class="col-md-5">
            <?php include ("includes/views/status_message.php"); ?>
            <h3 class="text-center">INICIA SESIÓN</h3>
            <div class="card card-body">
                <form action="includes/controllers/login.php" method="post">
                    <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control" placeholder="Usuario" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Iniciar Sesión" class="btn btn-success btn-block" name="login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>















<?php
    require ("includes/footer.php");
?>