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
					<th>wsdl</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>EIC</td>
					<td><?php echo $estado;?></td>
					<td><?php echo $estEICEAI;?></td>
					<td><a href="<?php echo $enlace_actual;?>/EICW/services/servicesEIC?wsdl" target="_blank">View</td>
						<!--<td> <button type="button" class="btn btn-primary">Actualizar</button></td>
							<td><button type="button" class="btn btn-primary" >Eliminar</button></td>
						-->
				</tr>
				<tr>
					<td>E2DI</td>
					<td><?php echo $este2di;?></td>
					<td><?php echo $estEAIe2di;?></td>
					<td><a href="<?php echo $enlace_actual;?>/e2di_web/services/servicesNCVP?wsdl" target="_blank">View</td>
				</tr>
				<tr>
					<td>BMI</td>
					<td><?php echo $estbmi;?></td>
					<td><?php echo $estEAIbmi;?></td>
					<td><a href="<?php echo $enlace_actual;?>/bmi/services/servicesBMI?wsdl" target="_blank">View</td>
				</tr>
				<tr>
					<td>MBANK</td>
					<td><?php echo $estmbank;?></td>
					<td><?php echo $estEAImbank;?></td>
					<td><a href="<?php echo $enlace_actual;?>/mBank/services/servicesMB?wsdl" target="_blank">View</td>
				</tr>
			</tbody>
		</table>
	</div>
	 </div>
</div>
	</div>
		</div>
</div>
