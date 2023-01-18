<?php
    include './php/admin_pcabesa.php';
    $query=extraerrestaurantesUTD($_GET['id']);
    $row=$query->fetch_assoc();

?>

<div class="panel panel-default mt-10">
    <div class="panel-heading">
    <h1>Actualizar Plato</h1>
    </div>
    <div class="panel-body">
        <form action="./php/restaurantes_registro.php?accion=UDT" method="POST">
           
        <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label for="" class="control-label">Codigo <span style="color:red">*</span> </label>
                        <input type="text" name="codigo" require="" placeholder="codigo" class="form-control" readonly="" value="<?php echo $row['id_restaurante']?>">
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
  	     	 		 		<label class="control-label">Restaurantes<span style="color: Red"></span></label>
  	     	 		 		<input type="text" name="Restaurantes" required="" placeholder="Restaurantes" class="form-control" value="<?php echo $row['nombre_restaurante']?>">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
  	     	 		 		<label class="control-label">Direccion<span style="color: Red"></span></label>
  	     	 		 		<input type="text" name="dir" required="" placeholder="Direccion" class="form-control"value=" <?php echo $row['direccion']?>">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 	</div>

  	     	 	<!-- tercera parte--> 
  	     	 	<div class="row">
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
  	     	 		 		<label class="control-label">Telefono<span style="color: Red"></span></label>
  	     	 		 		<input type="tel" name="tel" required="" placeholder="Telefono" class="form-control" value="<?php echo $row['telefono']?>">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 		


                   	<!-- mas partes debajo --> 
  	     	 	<div class="row">
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
  	     	 		 		<label class="control-label">Correo<span style="color: Red"></span></label>
  	     	 		 		<input type="tel" name="correo" required="" placeholder="Correo" class="form-control" value="<?php echo $row['correo']?>">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
  	     	 		 		<label class="control-label">RNC<span style="color: Red"></span></label>
  	     	 		 		<input type="domiciolio" name="rnc" required="" placeholder="RNC" class="form-control" value="<?php echo $row['rnc']?>">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 	
						 

            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">      
                    <div class="form-group">
                    <a href="lista_restaurantes.php" class="btn btn-danger">Atrás</a>
                    <input type="submit" value="Actualizar" class="btn btn-success">

                    </div>
                </div>
            </div>

        </form>
    </div>

</div>


<?php  
    include './php/admin_ppie.php';
?>