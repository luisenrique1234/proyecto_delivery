<?php 
  include 'php/admin_pcabesa.php';
  $query=extraerplatoUTD($_GET['id']);
    $row=$query->fetch_assoc();
 ?>
<div class="panel panel-default mt-10">
    <div class="panel-heading">
    <h1>Actualizar Plato</h1>
    </div>
    <div class="panel-body">
        <form action="./php/plato_registro.php?accion=UDT" method="POST">
           
        <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label for="" class="control-label">Codigo <span style="color:red">*</span> </label>
                        <input type="text" name="codigo" require="" placeholder="codigo" class="form-control" readonly="" value="<?php echo $row['id_plato']?>">
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label for="" class="control-label">Estado <span style="color:red">*</span> </label>
                        <select class="form-control" name="estado">
                            <option value="A" <?php if($row['estado']=='A'){echo "selected";} ?>>Activo</option>
                            <option value="I" <?php if($row['estado']=='I'){echo "selected";} ?>>Inactivo</option>
                        </select>
                    </div>
                </div>
            </div>

  	     	 	<div class="row">
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group" class="alert alert-danger" role="alert">
  	     	 		 		<label class="control-label">Nombre<span style="color: Red">*</span></label>
  	     	 		 		<input type="text" name="nombre" required="" placeholder="Nombre" class="form-control" value="<?php echo $row['nombre']?>">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                         <div class="form-group">
                        <label for="" class="control-label">Tipo de Plato <span style="color:red">*</span> </label>
                        <select class="form-control" name="tipo_de_plato">
                            <option value="Almuerzo"<?php if($row['tipo_de_plato']=='Almuerzo'){echo "selected";} ?>>Almuerzo</option>
                            <option value="Desayuno"<?php if($row['tipo_de_plato']=='Desayuno'){echo "selected";} ?>>Desayuno</option>
                            <option value="Ensalada"<?php if($row['tipo_de_plato']=='Ensalada'){echo "selected";} ?>>Ensalada</option>
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
                            <option value="Arroz"<?php if($row['categoria']=='Arroz'){echo "selected";} ?>>Arroz</option>
                            <option value="Postre"<?php if($row['categoria']=='Postre'){echo "selected";} ?>>Postre</option>
                            <option value="Guarnicion"<?php if($row['categoria']=='Guarnicion'){echo "selected";} ?>>Guarnicion</option>
                            <option value="Hamburgesa"<?php if($row['categoria']=='Hamburgesa'){echo "selected";} ?>>Hamburgesa</option>
                            <option value="Pescado"<?php if($row['categoria']=='Pescado'){echo "selected";} ?>>Pescado</option>
                            <option value="TACOS"<?php if($row['categoria']=='TACOS'){echo "selected";} ?>>TACOS</option>
                        </select>
  	     	 		 	</div>
  	     	 		 </div>
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
                             <label class="control-label">Precio<span style="color: Red"></span></label>
  	     	 		 		<input type="precio" name="precio" required="" placeholder="Precio" class="form-control"value="<?php echo $row['precio']?>">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 	</div>

  	     	 	
  	     	 	

  	     	 	<!-- parte que ocupada la pantalla completa -->
  	     	 	<div class="row">
  	     	 		<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 			<div class="form-group">
  	     	 				<a href="lista_plato.php" class="btn btn-danger">Atras</a>
  	     	 				<input type="submit" value="Actualizar" class="btn btn-success">

								
  	     	 			</div>
  	     	 		</div>
  	     	 	</div>

  	     	 </form>
  	     </div>
  </div>


<?php
      include 'php/admin_ppie.php'; 

?>