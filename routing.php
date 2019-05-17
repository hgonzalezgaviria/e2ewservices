<?php
	/**
	* Archivo que redirecciona al contenido que se va incrustar dentro de la header y el footer
	* Autor: e2ew-hfg
	**/

	if(empty($_GET['menu'])){

	}else{
		if ($_GET['menu']=='mostrar') {
			require_once('Clientes/mostrar.php');
		}

	}

 ?>
