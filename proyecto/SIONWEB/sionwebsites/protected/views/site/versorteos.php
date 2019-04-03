<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="es" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- blueprint CSS framework -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/estilos.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>assets/fonts/fontawesome-webfont.ttf" media="print" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />


<div id="wrapper">
	<div id="main">
		<div class="inner">
			<section>
			<div class="col-lg-12"><h1 style="text-align:center;color:#2a7ab8;">SORTEO CONJUNTO RESIDENCIAL</h1>
			<hr style="color: black;width: 100%;">
			
			</div>
				<?php
				  $form=$this->beginWidget('CActiveForm'); //activacion del comando para el form
				  echo $form->errorSummary($modelsorteo); // se llama la variablre
				?>	
				<div class="col-lg-12">
				<hr style="color: black;width: 100%;">	
				<h3>Fecha Actual:  <?php
				$fecha = date('Y-m-d');
				echo $form->dateField($modelsorteo,'fecha_registro',array('value'=>$fecha,'readonly'=>'readonly','style'=>'border-radius: 10px; border: none;'));
				?>
				</h3>
				</div>
				<?php	
					 $this->endWidget();				
				?>
				<div id="plaquear" style="display: block;">
			    <div class="col-lg-12">
			        <div class="col-lg-12">
						<h2>Vehículos</h2>
			        	<h3>Digitar el número del Apartamento</h3>
			        	<h6> <span class="required" style="color: red;">*</span>Aquí realizamos la búsqueda por apartamento para verificar el punto de parqueo.</h6>
			                <label style="color: orange;">Consulta por número apartamento (Acción Búsqueda).</label>
			                <input type="text" name="apart" class="form-control caja" id="apart" style="width: 100%; float: left;"/> 
	 		        </div>
		 		    <div class="col-lg-12">
						<br>
						<input type="button" name="buscarapart" id="buscarapart" value="Buscar" title="Buscar Registro de PLACA">

					</div>

						<br>
				</div>
				<div class="col-lg-12">
				    <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
				       	<br>
				 		<div class="registros" id="busquedaporplacas"  placeholder="Buscar" style="overflow:auto; width:100%;height: 100vh;">
				 		<div class=" col-lg-12">
							<br>	
							<h4 style="color: red; text-align: center; ">Sorteo del MES:</h4>
							</div>
							<br>
							<div class="col-lg-12" style="overflow: auto; height:500px;">
								<table>
								<tr>
								<th>Apartamento</th>
								<th>Torre</th>
								<th>Punto de Parqueo</th>
								<th>Fecha Sorteo</th>
								</tr>
								<?php
								foreach ($consultasorteo as $key => $valor) {
								?>
								<tbody>
								<tr>
								<td><?= $valor['apartamento']; ?></td>
								<td><?= $valor['torre']; ?></td>
								<td><?= $valor['nombre_punto']; ?></td>
								<td><?= $valor['fecha_sorteo']; ?></td>
								</tr>
								</tbody>
								<?php 
								}
								?>
								</table>
							</div>
					    </div>
				    </fieldset>
			    </div>
			</div>
			
				
			</section>
		</div>
	</div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/java.js""></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/skel.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/util.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
<script type="text/javascript">
	 //-------------------------------------- ajax consultas Dos ---------------------------------
	    if ('#apart'!='') {
	          function obtener_registros_dos(apart) // inicio de la funcion obtener registros de la tabla clientes
	          {
	            $.ajax({ // inicio de ajax 
	              url :'Consultapart', // se acciona la ubicacion del archivo de consulta
	              type : 'get', // se indica que tipo de metodo sera
	              data : { apart:apart }, // se indica la base a la cual va dirigida la extraccion
	              })
	            .done(function(resultadosA){ // estrae la informacion valida y la envia a la tabla resultados del div
	              $("#busquedaporplacas").html(resultadosA);
	            })
	          }
	         $('#buscarapart').click(function(){ //enviamos la funcion de un click e el boton
				var apart; // delcaramos las variables a utilizar
				apart=$('#apart').val() // el campo del input se evalua y lo que tenga se asigna a la variable
				
	   	 		obtener_registros_dos(apart);
	   	 		});
	    }

</script>