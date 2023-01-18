<?php 
  include('php/admin_pcabesa.php');
  
 ?>

 <!-- segunda parte -->
    <ol class="breadcrumb">
         <li><a href="admin-index.php">Inicio</a></li>
         <li><a href="lista_plato.php">Listado de Plato</a></li>
         <li class="active">Nuevo Plato</li>
    </ol>

  <div class="panel-dafault" style="margin-top: 10px"> <!--panel de crear --> 
  	   <div class="panel-heading">
  	    	<h1>Nuevo Plato</h1>
  	   </div>
  	     <div class="panel-body">
		   <form action="php/plato_registro.php?accion=INS" method="POST">
  	     	 	<div class="row">
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group" class="alert alert-danger" role="alert">
  	     	 		 		<label class="control-label">Nombre<span style="color: Red">*</span></label>
  	     	 		 		<input type="text" name="nombre" required="" placeholder="Nombre" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                         <div class="form-group">
                        <label for="" class="control-label">Tipo de Plato <span style="color:red">*</span> </label>
                        <select class="form-control" name="tipo_de_plato">
                            <option>Almuerzo</option>
                            <option>Desayuno</option>
                            <option>Ensalada</option>
                        </select>
                        </div>
  	     	 		 </div>
  	     	 	</div>

  	     	 	<!-- tercera parte--> 
  	     	 	<div class="row">
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
                             <label for="" class="control-label">Categoria de Plato <span style="color:red">*</span> </label>
                        <select class="form-control" name="categoria">
                            <option>Arroz</option>
                            <option>Postre</option>
                            <option>Guarnicion</option>
							<option>Hamburgesa</option>
							<option>Pescado</option>
							<option>TACOS</option>
                        </select>
  	     	 		 	</div>
  	     	 		 </div>
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
                             <label class="control-label">Precio<span style="color: Red">*</span></label>
  	     	 		 		<input type="precio" name="precio" required="" placeholder="Precio" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 	</div>

  	     	 	
  	     	 	

  	     	 	<!-- parte que ocupada la pantalla completa -->
  	     	 	<div class="row">
  	     	 		<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 			<div class="form-group">
  	     	 				<a href="lista_plato.php" class="btn btn-danger">Atras</a>
  	     	 				<input type="submit" value="Guardar" class="btn btn-success">

								
  	     	 			</div>
  	     	 		</div>
  	     	 	</div>

  	     	 </form>
  	     </div>
  </div>


<?php
include('php/admin_ppie.php');
?>