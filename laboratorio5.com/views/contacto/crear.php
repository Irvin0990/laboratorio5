<div class="container">
    <div class="row">
        <h1 class="text-center">Ingrese los datos</h1>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

        <form action="<?php echo "index.php?c=".seguridad::codificar("contacto")."&m=".seguridad::codificar("mostrar")?>" method="post">
    <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtnombre_contacto" value="<?php echo isset($nombre)?$nombre:""?>">
        <div id="textHelp" class="form-text"><?php echo isset($error[0])?$error[0]:"" ?></div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="txtcorreo_contacto" value="<?php echo isset($correo)?$correo:""?>">
        <div id="emailHelp" class="form-text"><?php echo isset($error[1])?$error[1]:"" ?></div>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtcomentario_contacto"></textarea>
        <div id="emailHelp" class="form-text"></div>
    </div>

    <input type="hidden" value="<?php echo seguridad::getToken()?>" name="token">

    <button type="submit" class="btn btn-warning">Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar datos</button>



    </form>
         </div>

    </div>
    
</div>