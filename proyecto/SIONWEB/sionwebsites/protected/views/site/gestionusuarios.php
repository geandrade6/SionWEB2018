

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
			<div class="main">
				<?php // esto son las migas de pan
				$this->pageTitle=Yii::app()->name . ' - Gestión Usuarios';
				$this->breadcrumbs=array(
					'Gestión Usuarios',
					
				);
				?>
			<h1>Insertar Usuarios</h1>
			<!-- Inicio de Formulario con Wigdet-->
				 <?php
				  $form=$this->beginWidget('CActiveForm'); //activacion del comando para el form
				  echo $form->errorSummary($modelocrearusuario); // se llama la variablre
				?>	
				<h4>Cedula</h4>
				<?php
					echo $form->textField($modelocrearusuario,'cedula',array('class'=>'form-control ','placeholder'=>"Digita Cedula")); //
				?>
				
				<h4>Nombre</h4>
				<?php
					echo $form->textField($modelocrearusuario,'nombre',array('class'=>'form-control ','placeholder'=>"Digita Nombre")); //
				?>
				<h4>Apellido</h4>
				<?php
					echo $form->textField($modelocrearusuario,'apellido',array('class'=>'form-control ','placeholder'=>"Digita el apellido")); //
				?>
				<h4>Telefono</h4>
				<?php
					echo $form->textField($modelocrearusuario,'telefono',array('class'=>'form-control ','placeholder'=>"Digita el telefono")); //
				?>
				<h4>Celular</h4>
				<?php
					echo $form->textField($modelocrearusuario,'celular',array('class'=>'form-control ','placeholder'=>"Digita el celular")); //
				?>
				<h4>Correo</h4>
				<?php
					echo $form->textField($modelocrearusuario,'correo',array('class'=>'form-control ','placeholder'=>"Digita el Correo")); //
				?>	
				<h4>Conraseña</h4>
				<?php
					echo $form->textField($modelocrearusuario,'contrasena',array('class'=>'form-control ','placeholder'=>"Digita la Contraseña")); //
				?>
				<h4>Etsado usuario - ACTIVO o INACTIVO</h4>
				<?php
					echo $form->textField($modelocrearusuario,'estado_usuario',array('class'=>'form-control ','placeholder'=>"Digita Estado (ACTIVO O INACTIVO)")); //
				?>
				<h4>Observaciones</h4>
				<?php
					echo $form->textarea($modelocrearusuario,'estado_usuario',array('class'=>'form-control ','placeholder'=>"Digita mensaje")); //
				?>
				<h4>Roles</h4>
				<?php 
				echo $form->dropDownList/*SELECT EN PHP*/($modelocrearusuario,'id',//squi va el id de la tabla
       				 CHtml::listData($consultaRol, 'id', 'nombre_rol')//aqui va el id y de seguido lo que se va a mostrar.
        		,array('class'=>'form-control columnas','id'=>'idrol', 'style'=>'width:100%;')); 
				?>
				<h4>Tipo de parqueadero</h4>
				<?php 
				echo $form->dropDownList/*SELECT EN PHP*/($modelocrearusuario,'id',//squi va el id de la tabla
       				 CHtml::listData($consultatipoparqueo, 'id', 'tipo')//aqui va el id y de seguido lo que se va a mostrar.
        		,array('class'=>'form-control columnas','id'=>'idrol', 'style'=>'width:100%;')); 
				?>
				<h4>Fecha Registro</h4>
				<?php
					$fecha = date('Y-m-d');
					echo $form->textField($modelocrearusuario,'fecha',array('value'=>$fecha, 'disabled'=>'disabled'));
				?>
				<h4>Activacion User</h4>
				<?php
					echo $form->textField($modelocrearusuario,'activar_user',array('value'=>0, 'disabled'=>'disabled')); //
				?>
				<br>

				 <?php  //esto es un boton en PHP

                    echo CHtml::submitButton('Insertar',array('class'=>'form-control btn-primary','style'=>'width:100%;;','id'=>'insertar','title'=>'Ingreso Registro','name'=>'insertar'));
                           
                 ?>

				<?php	
					 $this->endWidget();				
				?>
			<!--Fin del Widget-->
			
			</div>

			<div class="col-lg-12">
		
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