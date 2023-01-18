<?php
include('php/admin_pcabesa.php');
?>

<!--mijas de pan -->
<ol class="breadcrumb">
	
<li><a href="admin-index.php"> Inicio</a>	</li>
<li class="active">lista de Restaurantes </li>	

</ol>

<!-- fin de la segunda parte-->
<div class="panel panel-defaul">
	
	<div class="panel-heading">
		<h1> Listado de Restaurantes</h1>
		<div class="panel-body"> 

			<p>
				<a href="crea_restaurante.php" class="btn btn-success pull-letf">NUEVO</a>
			</p>
			<br>
			<hr>
			<table class="table table-striped" style="text-align: center;">
				<thead>
                    <tr> <!-- fila-->
                    
						<th>Codigo</th> <!--th colunma--> 
                        <th>Restaurante</th>
						<th>Dirrecion</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>RNC</th>
                        <th>Estado</th>
						<th></th>
                        <th></th>
                        
					</tr>
				</thead>
				

				<tbody>
        <?php
        $query=lista_restaurantes();
        while ($row= $query->fetch_assoc() ){
            echo"
            <tr>
            <td>".$row["id_restaurante"]."</td>
			<td>".$row["nombre_restaurante"]."</td>
			<td>".$row["direccion"]."</td>
            <td>".$row["telefono"]."</td>
            <td>".$row["correo"]."</td>
            <td>".$row["rnc"]."</td>
            <td>".$row["estado"]."</td>
            <td>
            <a href='actualizar_restaurantes.php?id=".$row["id_restaurante"]."' class='btn btn-primary'>Editar</a>
            <a href='php/restaurantes_registro.php?accion=DLT&id=".$row["id_restaurante"]."' class='btn btn-danger'>Eliminar</a>
            </td>
            </tr>
            ";
        }
        ?>
    </tbody>
			</table>


		</div>
		
	</div>
</div>

<?php
include('php/admin_ppie.php');
?>