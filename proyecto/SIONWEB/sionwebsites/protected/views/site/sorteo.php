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
			<div class="col-lg-12"><h1 style="text-align:center;color:#2a7ab8;">SORTEAR</h1>
				<h6>El sistema de sorteo simplemente cuenta con tres funciones las cuales el usuario administrador podrá hacer uso, este sistema consta de los siguiente.</h6>
				<h6><span class="required" style="color: red;">*</span>Botón limpiar: como su nombre lo indica hace una limpieza total de sorteo hasta el nuevo sorteo según lo desee el administrador.</h6>
				<h6><span class="required" style="color: red;">*</span>Botón: sortear: este se encargará de generar un sorteo el cual se reflejará en primera instancia en una tabla l cual será quien asignará los puntos de parqueo a cada apartamento.</h6>
				<h6><span class="required" style="color: red;">*</span>Botón Guardar: este guardará finalmente el sorteo deseado por el administrador en donde los residentes podrán ver la tabla y ubicar su punto de parqueo.</h6>
			<hr style="color: black;width: 100%;">
			<div class="col-lg-4">
				<br>
				<?php echo CHtml::link("LIMPIAR",array("LimpiarSorteo"),array("style"=>"background-color: #3f8a55; color: white; width:150px;","class"=>"btn",'title'=>'Limpiar el sorteo actual para generar uno nuevo.')); ?>
			</div>
			
			<div class="col-lg-4">
				<br>
				<?php echo CHtml::link("SORTEAR",array("GenerarSorteo"),array("style"=>"background-color: #11acc2; color: white; width:150px;","class"=>"btn",'title'=>'Sortear los puntos de parqueo vs apartamentos.'));
				 ?>
			</div>
			
			<div class="col-lg-4">
				<br>
				<?php echo CHtml::link("GUARDAR",array("GuardarSorteo"),array("style"=>"background-color: #0c287e; color: white; width:150px;","class"=>"btn", 'title'=>'Guardar la información actual del sorteo.')); ?>
			</div>
			</div>
				<?php
				  $form=$this->beginWidget('CActiveForm'); //activacion del comando para el form
				  echo $form->errorSummary($modelsorteo); // se llama la variablre
				?>	
				<div class="col-lg-12">
				<hr style="color: black;width: 100%;">	
				<h3>Sorteo Actual:  <?php
				$fecha = date('Y-m-d');
				echo $form->dateField($modelsorteo,'fecha_registro',array('value'=>$fecha,'readonly'=>'readonly','style'=>'border-radius: 10px; border: none;'));
				?>
				</h3>
				</div>
				<?php	
					 $this->endWidget();				
				?>
				
				<div class="col-lg-12 contenedor" style="overflow: auto; height:500px;">
					<table>
					<tr>
					<th>Punto de Parqueo</th>
					<th>Apartemento</th>
					<th>Torre</th>
					</tr>
					<?php
					foreach ($consultagenerador as $key => $valores) {
					?>
					<tbody>
					<tr>
					<td><?= $valores['nombre_punto']; ?></td>
					<td><?= $valores['numero_apartamento']; ?></td>
					<td><?= $valores['torre']; ?></td>
					</tr>
					</tbody>
					<?php 
					}
					?>
					</table>
				</div>	
				<div class=" col-lg-12">
				<br>	
				<h4 style="color: red; text-align: center; ">Sorteo guardado del MES:</h4>
				</div>
				<br>
				<div class="col-lg-12 contenedor" style="overflow: auto; height:500px;">
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
