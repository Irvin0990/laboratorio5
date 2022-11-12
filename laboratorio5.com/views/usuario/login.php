<div class="container">
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <form action="<?php echo "index.php?c=".seguridad::codificar("usuario")."&m=".seguridad::codificar("validar")?>" method="post">
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="txtusuario" id="exampleInputText1" aria-describedby="textHelp">
                    <div id="textHelp" class="form-text"></div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" name="txtpassword" id="exampleInputText1" aria-describedby="textHelp">
                    <div id="textHelp" class="form-text"></div>
                </div>
                <input type="hidden" value="<?php echo seguridad::getToken()?>" name="token">
                <button type="submit" class="btn btn-success">Entrar</button>
            </form>
        </div>
    </div>
    
</div>