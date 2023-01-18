<?php
include('php/admin_pcabesa.php');
?>

<!--mijas de pan -->
<ol class="breadcrumb">
	
<li><a href="admin-index.php"> Inicio</a>	</li>
<li class="active">lista de Platos </li>	

</ol>

<!-- fin de la segunda parte-->
<div class="panel panel-defaul" style="margin top: 10px">
	
	<div class="panel-heading">
		<h1> Listado de Platos</h1>
		<div class="panel-body"> 
			<p>
				<a href="crear_plato.php" class="btn btn-success pull-letf">NUEVO</a>
			</p>
			<br>
			<hr>
			<table class="table table-striped" style="text-align: center;">
				<thead>
                    <tr> <!-- fila-->
                    
						<th>Codigo</th> <!--th colunma--> 
                        <th>Nombre</th>
						<th>Tipo</th>
                        <th>Categoria</th>
                        <th>Precio</th>
						<th>Estado</th>
						<th></th>
                        <th></th>
                        
					</tr>
				</thead>
				

				<tbody>
        <?php
        $query=lista_plato();
        while ($row= $query->fetch_assoc() ){
            echo"
            <tr>
            <td>".$row["id_plato"]."</td>
			<td>".$row["nombre"]."</td>
			<td>".$row["tipo_de_plato"]."</td>
            <td>".$row["categoria"]."</td>
            <td>".$row["precio"]."</td>
            <td>".$row["estado"]."</td>
            <td>
            <a href='actualizar_plato.php?id=".$row["id_plato"]."' class='btn btn-primary'>Editar</a>
            <a href='php/plato_registro.php?accion=DLT&id=".$row["id_plato"]."' class='btn btn-danger'>Eliminar</a>
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