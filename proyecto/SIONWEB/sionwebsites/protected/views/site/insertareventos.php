<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="es" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- blueprint CSS framework -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
			<header class="main">
				<?php // esto son las migas de pan
				$this->pageTitle=Yii::app()->name . ' - Nuevos Eventos';
				$this->breadcrumbs=array(
					'Insertar Nuevo Envento',
				);
				?>
				<h1>Insertar Eventos</h1>
				<!-- Inicio de Formulario con Wigdet-->

				 <?php
				  $form=$this->beginWidget('CActiveForm',array('htmlOptions'=>array('enctype'=>'multipart/form-data'),
					)); //activacion del comando para el form
				  echo $form->errorSummary($modelEventos); // se llama la variablre
					?>	
				<h4>Título del Evento</h4>
				<?php
					echo $form->textField($modelEventos,'titulo',array('class'=>'form-control ','placeholder'=>"Digita Título")); //
				?>
				<br>
				<h4>Mensaje principal del Evento</h4>
				<?php
					echo $form->textarea($modelEventos,'mensaje',array('class'=>'form-control ','placeholder'=>"Digita Mensaje Principal")); //
				?>
				<br>
				<h4>Sub-Título del Evento</h4>
				<?php
					echo $form->textField($modelEventos,'subtitulo',array('class'=>'form-control ','placeholder'=>"Digita Sub-Título")); //
				?>
				<br>
				<h4>Sub-Mensaje del Evento</h4>
				<?php
					echo $form->textarea($modelEventos,'submensaje',array('class'=>'form-control ','placeholder'=>"Digita Sub-Mensaje Principal")); //
				?>
				<br>
				<h4>Subir Imagen</h4>
        		<?php echo CHtml::activeFileField($modelEventos,'imagenes'); //reclectamos la imagen?>  
        		<?php echo $form->error($modelEventos,'imagenes');//error de si no  es imagen ?>
				<!--?php
					echo $form->textField($modelEventos,'imagenes',array('class'=>'form-control')); //
					//echo CHtml::activeFileField($modelEventos,'imagenes');
				?-->
				<br>
				<h4>Estado Eventos</h4>
				<?php
					echo $form->dropDownList/*SELECT EN PHP*/($modelEventos,'idestadoeventos',//squi va el id de la tabla
       				 CHtml::listData($consultaesteventos, 'idestadoeventos', 'nombre_estado_eventos')//aqui va el id y de seguido lo que se va a mostrar.
        			,array('class'=>'form-control columnas','style'=>'width:100%;')); 
				?>
				<br>
				 <?php  //esto es un boton en PHP
                    echo CHtml::submitButton('Insertar',array('class'=>'form-control btn-primary','style'=>'width:100%;;','id'=>'insertar','title'=>'Ingreso Registro','name'=>'insertar'));
                 ?>

				<?php	
					 $this->endWidget();				
				?>
			<!--Fin del Widget-->
			<h1>Eventos destacados</h1>
			</header>

			<div class="col-lg-12">
				<div class="row">
						<?php
						foreach($consultaeventos as $key=>$value) { 
						$titulo=$value["titulo"]; // se asigna la variable que se quiere mostrar
						$mensaje=$value["mensaje"]; // se asigna la variable que se quiere mostrar
						$subtitulo=$value["subtitulo"]; // se asigna la variable que se quiere mostrar
						$submensaje=$value["submensaje"]; // se asigna la variable que se 
						$imagenes=$value["imagenes"]; // se asigna la variable que se 
						?>	
					<div class="col-lg-12">
						<!-- titulos y subtitulos -->
						<div class="col-lg-12">
							<h2 id="content"><?php echo  $titulo; ?></h2>
							<p><?php echo  $mensaje; ?>	</p>
						</div>
						<div class="col-lg-6">
							<h2 id="content"><?php echo $subtitulo; ?></h2>
							<p><?php echo  $submensaje; ?><p>
						</div>
						<div class="col-lg-6" style="width: 200px; height: 200px;">
							<p>
							<img src='<?php echo Yii::app()->request->baseUrl;?>/<?php echo $imagenes?>' style="width: 250px; height: 200px;">
							</p>
						</div>
					</div>
					<?php }?>
				</div>
					<hr class="major" />
					<!-- Elements -->
					<h2 id="elements">Historial Eventos</h2>
				<div class="col-lg-12">
					<?php
					foreach($consultaeventosDos as $key=>$value) { 
					$titulo=$value["titulo"]; // se asigna la variable que se quiere mostrar
					$mensaje=$value["mensaje"]; // se asigna la variable que se quiere mostrar
					$subtitulo=$value["subtitulo"]; // se asigna la variable que se quiere mostrar
					$submensaje=$value["submensaje"]; // se asigna la variable que se 
					?>	
					<!-- Text stuff -->
					<div class="col-lg-6" style="float: left; padding: 1%;">
					<h3><?php echo $titulo;?></h3>
					<p><?php echo $mensaje;?></p>
					<h3><?php echo $subtitulo;?></h3>
					<p><?php echo $submensaje;?></p>
					<hr />
					</div>
					<?php }?>
					<div class="col-lg-12">
						<h3>Informacion General</h3>
						<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac aipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.</p>
					</div>			
				</div>
				<!-- Blockquote -->
				<br>
				<div class="col-lg-12">
					<h3>Informacion General</h3>
					<p>
					<blockquote>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis olutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.</blockquote>
					</p>
				</div>
				<div class="col-lg-12">
						<h3>Listado de Eventos</h3>
						<h4>Listado Eventos Realizados Durante el Año</h4>
					<div class="table-wrapper">
						<div class="table-responsive" style="height: 300px; overflow: scroll;">
							<table class="table table-small-font table-bordered table-striped table-responsive" >
								<thead>
								<tr>
								<th class=columna>titulo</th>
								<th class=columna>mensaje</th>
								<th class=columna>subtitulo</th>
								<th class=columna>submensaje</th>
								</tr>
								</thead>
								<tbody>
									<?php
									foreach($consultaeventosDos as $key=>$value) { // se manda a llamar la variable que toma la informacion en este caso informa y hace un recorrido de la informacion en forma de array de lo que esta en el value mostrando datos la inforacion es extraida de la variable informa que esta en el controlador con una query.
									$titulo=$value["titulo"]; // se asigna la variable que se quiere mostrar
									$mensaje=$value["mensaje"]; // se asigna la variable que se quiere mostrar
									$subtitulo=$value["subtitulo"]; // se asigna la variable que se quiere mostrar
									$submensaje=$value["submensaje"]; // se asigna la variable que se quiere mostrar
									?>
									<tr>
									<td class=columna style='font-weight:normal;'><?php echo $titulo; ?></td>
									<td class=columna style='font-weight:normal;'><?php echo $mensaje; ?></td>
									<td class=columna style='font-weight:normal;'><?php echo $subtitulo; ?></td>
									<td class=columna style='font-weight:normal;'><?php echo $submensaje; ?></td>
									</tr>
									<?php
									 }
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		</div>
	</div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/java.js""></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/skel.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/util.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
