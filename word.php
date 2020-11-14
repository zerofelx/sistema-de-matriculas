<?php
    require ("includes/header.php");
?>




<div class="container pt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="docs/word_writer.php" method="post">
                    <div class="form-group">
                        <input type="number" name="cc" id="cc" placeholder="Cédula" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Crear Word" placeholder="Probar" class="form-control btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





<?php
    require ("includes/footer.php");
?>