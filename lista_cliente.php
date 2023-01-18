<?php
include('php/admin_pcabesa.php');
?>

<!--mijas de pan -->
<ol class="breadcrumb">
	
<li><a  href="admin-index.php"> Inicio</a>	</li>
<li class="active">lista de Cliente </li>	

</ol>

<!-- fin de la segunda parte-->
<div class="panel panel-defaul" style="margin top: 10px">
	
	<div class="panel-heading">
		<h1> Listado de Cliente </h1>
		<div class="panel-body"> 
			<p>
				<a href="crea_cliente.php" class="btn btn-success pull-letf">NUEVO</a>
			</p>
			<br>
			<hr>
			<table class="table table-striped" style="text-align: center;">
				<thead>
					<tr> <!-- fila-->
						<th>Codigo</th> <!--th colunma--> 
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Direccion</th>
						<th>Estado</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				

				<tbody>
        <?php
        $query=lista_cursos();
        while ($row= $query->fetch_assoc() ){
            echo"
            <tr>
            <td>".$row["id_cliente"]."</td>
			<td>".$row["nombre"]."</td>
			<td>".$row["apellido"]."</td>
            <td>".$row["domicilio"]."</td>
            <td>".$row["estado"]."</td>
            <td>
            <a href='actualizar_cliente.php?id=".$row["id_cliente"]."' class='btn btn-primary'>Editar</a>
            <a href='php/cliente_registro.php?accion=DLT&id=".$row["id_cliente"]."' class='btn btn-danger'>Eliminar</a>
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
