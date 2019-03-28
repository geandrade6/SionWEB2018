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
			<?php
			$this->pageTitle=Yii::app()->name . ' - Contáctenos';
			$this->breadcrumbs=array(
				'Contáctenos',
			);
			?>
			<div class="col-lg-12">
			<div class="col-lg-12">
				<h1 style="color:#2a7ab8;">Contácto</h1>
			</div>
			<div class="col-lg-12">
			<?php if(Yii::app()->user->hasFlash('contact')): ?>

			<div class="flash-success">
				<?php echo Yii::app()->user->getFlash('contact'); ?>
			</div>

			<?php else: ?>

			<p>
			Sí tiene un Requerimiento u otra Cuetión de intéres, Puede contactarse con nosotros. Gracias.
			</p>
			</div>
			</div>
			<div class="form col-lg-12">

			<?php $form=$this->beginWidget('CActiveForm'); ?>
				<div class="col-lg-12">
				<p class="note">Los campos con  <span class="required">*</span> son Requeridos.</p>
				</div>
				<?php echo $form->errorSummary($model); ?>

				<div class="row col-lg-6">
					<label><span class="required">*</span>Nombre</label>
					<?php echo $form->textField($model,'name'); ?>
				</div>

				<div class="row col-lg-6">
					<label><span class="required">*</span>Email</label>
					<?php echo $form->textField($model,'email'); ?>
				</div>

				<div class="row col-lg-12">
					<label><span class="required">*</span>Asunto</label>
					<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
				</div>

				<div class="row col-lg-12">
					<label><span class="required">*</span>Mensaje</label>
					<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
				</div>

				<?php if(CCaptcha::checkRequirements()): ?>
				<div class="row col-lg-12">
					<label><span class="required">*</span>Verificacion del Código</label>
					<br>
					<div class="hint col-lg-6">Por favor ingrese la letras que se muetran en la imagen.
					</div>
					<div class="col-lg-6">
					<?php $this->widget('CCaptcha'); ?>
					<?php echo $form->textField($model,'verifyCode'); ?>
					</div><br>

					
				</div>
				<?php endif; ?>

				<div class="row submit col-lg-6">
					<?php echo CHtml::submitButton('Enviar'); ?>
				</div>

			<?php $this->endWidget(); ?>

			</div><!-- form -->

			<?php endif; ?>
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