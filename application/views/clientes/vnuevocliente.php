<html>
    <head>
        <title>Insertar</title>
    </head>
    <body>
        <form method="post" action="<?php echo base_url();?>con_cliente/guardar">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Formulario de registro</h3>
            </div>
             <div class="box-body">
                <h4>Datos personales</h4>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input name="nombre_cliente" type="text" maxlength="10" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Apellido</label>
                    <input name="apellido" type="text" maxlength="20" class="form-control" id="exampleInputPassword1" placeholder="Apellido">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Teléfono</label>
                    <input name="telefono" type="number" max="999999999" class="form-control" id="exampleInputPassword1" placeholder="Teléfono">
                </div>
        
                <h4>Cuenta de Usuario:</h4>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input name="nombre_usuario" type="usuario" maxlength="10" class="form-control" placeholder="Usuario">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input name="correo" type="correo" maxlength="30" class="form-control" placeholder="Correo">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input name="password" type="password" class="form-control" placeholder="Contraseña">
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
             </div>
        
       
            
        </form>
        
        
    </body>
</html>
