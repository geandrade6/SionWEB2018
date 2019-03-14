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
			<div class="col-lg-12" style="text-align:center;color:blue;"><h1>SORTEAR</h1></div>
			<input type="submit" value="Sortear">
			<input type="submit" value="Guardar">
			<input type="submit" value="Limpiar">
			
				<?php
				  $form=$this->beginWidget('CActiveForm'); //activacion del comando para el form
				  echo $form->errorSummary($modelsorteo); // se llama la variablre
				?>	
				<div class="col-lg-12"><h3>Sorteo Actual:  <?php
					$fecha = date('Y-m-d');
					echo $form->dateField($modelsorteo,'fecha_registro',array('value'=>$fecha,'readonly'=>'readonly','style'=>'border-radius: 10px; border: none;'));
				?>
				</h3>
				
					
				</div>
				<?php	
					 $this->endWidget();				
				?>
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
	
</script>