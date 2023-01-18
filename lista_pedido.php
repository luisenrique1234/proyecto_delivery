<?php
include('php/admin_pcabesa.php');
?>

<!--mijas de pan -->
<ol class="breadcrumb">
	
<li><a href="admin-index.php"> Inicio</a>	</li>
<li class="active">lista de Pedidos </li>	

</ol>

<!-- fin de la segunda parte-->
<div class="panel panel-defaul">
	
	<div class="panel-heading">
		<h1> Listado de Pedidos</h1>
		<div class="panel-body"> 

			<!--<p>
				<a href="crear_pedido.php" class="btn btn-success pull-letf">NUEVO</a>
			</p>-->
			<br>
			<hr>
			<table class="table table-striped" style="text-align: center;">
				<thead>
                    <tr> <!-- fila-->
                    
						<th>Codigo</th> <!--th colunma--> 
                        <th>Nombre Cliente</th>
						<th>Plato</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Fecha</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Estado</th>
						<th></th>
                        <th></th>
                        
					</tr>
				</thead>
				

				<tbody>
        <?php
        $query=lista_pedido();
        while ($row= $query->fetch_assoc() ){
            echo"
            <tr>
            <td>".$row["id_pedido"]."</td>
			<td>".$row["nombre_cliente"]."</td>
			<td>".$row["plato"]."</td>
            <td>".$row["cantidad"]."</td>
            <td>".$row["precio"]."</td>
            <td>".$row["fecha"]."</td>
            <td>".$row["direccion"]."</td>
            <td>".$row["correo"]."</td>
            <td>".$row["estado"]."</td>
            <td>
            <a href='actualizar_pedido.php?id=".$row["id_pedido"]."' class='btn btn-primary'>Editar</a>
            <a href='php/pedido_registro.php?accion=DLT&id=".$row["id_pedido"]."' class='btn btn-danger'>Eliminar</a>
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