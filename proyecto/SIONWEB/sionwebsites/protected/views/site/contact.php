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
			<?php
			$this->pageTitle=Yii::app()->name . ' - Contáctenos';
			$this->breadcrumbs=array(
				'Contáctenos',
			);
			?>

			<h1>Contácto</h1>

			<?php if(Yii::app()->user->hasFlash('contact')): ?>

			<div class="flash-success">
				<?php echo Yii::app()->user->getFlash('contact'); ?>
			</div>

			<?php else: ?>

			<p>
			Sí tiene un Requerimiento u otra Cuetión de intéres, Puede contactarse con nosotros. Gracias.
			</p>

			<div class="form">

			<?php $form=$this->beginWidget('CActiveForm'); ?>

				<p class="note">Los campos con  <span class="required">*</span> son Requeridos.</p>

				<?php echo $form->errorSummary($model); ?>

				<div class="row">
					<label>Nombre</label>
					<?php echo $form->textField($model,'name'); ?>
				</div>

				<div class="row">
					<label>Email</label>
					<?php echo $form->textField($model,'email'); ?>
				</div>

				<div class="row">
					<label>Asunto</label>
					<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
				</div>

				<div class="row">
					<label>Mensaje</label>
					<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
				</div>

				<?php if(CCaptcha::checkRequirements()): ?>
				<div class="row">
					<label>Verificacion del Código</label>
					<div>
					<?php $this->widget('CCaptcha'); ?>
					<?php echo $form->textField($model,'verifyCode'); ?>
					</div>
					<div class="hint">Por favor ingrese la letras que se muetran en la imagen.
					</div>
				</div>
				<?php endif; ?>

				<div class="row submit">
					<?php echo CHtml::submitButton('Enviar'); ?>
				</div>

			<?php $this->endWidget(); ?>

			</div><!-- form -->

			<?php endif; ?>
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