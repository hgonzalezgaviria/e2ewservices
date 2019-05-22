<script type="text/javascript">
		$(document).ready(function() {
				$('#seccionRecargar').click(function() {
						// Recargo la página
						location.reload();
				});
		});
//alert(URLdomain);
 //var URLdomain = window.location.host;
 //document.getElementById('resultado').innerHTML = URLdomain;
 //window.onload = function what(){
//document.getElementById('resultado').innerHTML = URLdomain;
//};
</script>

<?php

	require_once('estados/eic.php');
	require_once('estados/e2di.php');
	require_once('estados/bmi.php');
	require_once('estados/mbank.php');	
?>
<h1>Estado de Aplicaciones</h1>
<div class="container">

		    		<div class="col-md-12 col-md-offset-2">						
						<table>						
						<tr>
						<th>IP: <?php echo $ip;?></th>
						<th>|---|</th>
						<th>IP pub: <?php echo $ippub;?></th>
						<th>|---|</th>
						<th>Zona: <?php echo $zone;?></th>
						<!--th id="resultado"></th-->												
						</tr>						
						</table>
					</div>
	
			<div class="row">			
	<div class="col-md-8 col-md-offset-2">
				<div class="card">
				<div class="card-body d-flex justify-content-between align-items-center">
	<a id="seccionRecargar" class="btn btn-primary btn-sm" style="float:right;"><span class="glyphicon glyphicon-refresh"></span></a>
	<br>
		<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Aplicación</th>
					<th>Estado Ping</th>
					<th>Estado EAI</th>
					<th>status</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>EIC</td>
					<td><?php echo $estado;?></td>
					<td><?php echo $estEICEAI;?></td>
					<!--td><a href="<?php //echo $enlace_actual;?>/EICW/services/servicesEIC?wsdl" target="_blank">View</td-->
					<td><a href="javascript:myModal('<?php echo $enlace_actual;?>/EICW/servlet/StateEIC');">View</td>
					<!--td><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal">
					Abrir modal</button></td-->				
					<!--td><a data-toggle="modal" data-target="#miModal" id="searchBtn_views" >Logs</a></td-->
						<!--<td> <button type="button" class="btn btn-primary">Actualizar</button></td>
							<td><button type="button" class="btn btn-primary" >Eliminar</button></td-->
				</tr>
				<tr>
					<td>E2DI</td>
					<td><?php echo $este2di;?></td>
					<td><?php echo $estEAIe2di;?></td>
					<td><a href="javascript:myModal('<?php echo $enlace_actual;?>/e2di_web/servlet/Status');">View</td>					
				</tr>
				<tr>
					<td>BMI</td>
					<td><?php echo $estbmi;?></td>
					<td><?php echo $estEAIbmi;?></td>
					<td><a href="javascript:myModal('<?php echo $enlace_actual;?>/bmi/servlet/State');">View</td>					
				</tr>
				<tr>
					<td>MBANK</td>
					<td><?php echo $estmbank;?></td>
					<td><?php echo $estEAImbank;?></td>
					<td><a href="javascript:myModal('<?php echo $enlace_actual;?>/mBank/servlet/Status');">View</td>					
				</tr>
			</tbody>
		</table>
	</div>
	 </div>
</div>
	</div>
		</div>
</div>

<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:1000px;" id='myModalDialog1' role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Estados</h4>
			</div>
			<div class="modal-body">				
				<iframe id="modalContent1" frameborder="0" style="width: 100%; min-height: 30rem;"></iframe>
			</div>
		</div>
	</div>
</div>
