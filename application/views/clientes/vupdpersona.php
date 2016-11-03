<div class="row">
	<div class="col-md-12">
	  <!-- Horizontal Form -->
	  <div class="box box-info">
	    <div class="box-header with-border">
	      <h3 class="box-title">Modificar sus datos personales</h3>
	    </div>
	    <!-- /.box-header -->
	    <!-- form start -->
	    <form action="<?php echo base_url();?>cpersona/actualizarDatos" method="POST"  class="form-horizontal">
	      <div class="box-body">

	        <div class="form-group">
	          <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtNombre" id="inputEmail3" placeholder="Ingrese su nombre">
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputEmail3" class="col-sm-2 control-label">Apellido</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtApPaterno" id="inputEmail3" placeholder="Ingrese su apellido">
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputEmail3" class="col-sm-2 control-label">Teléfono</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="txtApMaterno" id="inputEmail3" placeholder="Ingrese su teléfono">
	          </div>
	        </div>

	        <div class="form-group">
	          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
	          <div class="col-sm-10">
	            <input type="email" class="form-control" name="txtEmail" id="inputEmail3" placeholder="Escriba su Email">
	          </div>
	        </div>

	        <div class="form-group">
	        	<div class="col-sm-10 pull-right">
		        	<button type="submit" class="btn btn-primary">Actualizar</button>
		        </div>
		    </div>

		    </div>

	    </form>

	    <form action="<?php echo base_url();?>cpersona/eliminarPersona" method="POST"  class="form-horizontal">
	      <div class="box-body">

	        <div class="form-group">
	          <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
	          <div class="col-sm-10">
	            <input type="Password" class="form-control" name="txtIdPersona" id="inputEmail3" placeholder="Password">
	          </div>
	        </div>

	        <div class="form-group">
	        	<div class="col-sm-10 pull-right">
		        	<button type="submit" class="btn btn-danger">Eliminar Cuenta</button>
		        </div>
		    </div>
		    </div>
		  
	    </form>

	  </div>
	  <!-- /.box -->
	</div>
</div>

<script type="text/javascript">
	
</script>