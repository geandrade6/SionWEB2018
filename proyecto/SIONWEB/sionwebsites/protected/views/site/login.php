
<div id="container" class="col-lg-9 col-md-offs  
et-1">

        <!-- Main -->
          <div id="main">
            <div class="inner">

<div id="container" class="col-lg-12 col-md-offs  
et-2">
 <?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
 
  
 
<div class="col-lg-4 col-md-offs  
et-2" style="width: 100%;">
     <img id="profile-img" class="profile-img-card" src="<?php echo Yii::app()->request->baseUrl; ?>/imagenes/login.png" />
  	 <h1 style="text-align: center;">LOGIN</h1>
  	 <p >PORFAVOR DILIGENCIAR EL FORMULARIO DE ACCESO A TU PERFIL</p>         
	<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'login-form',
  'enableAjaxValidation'=>true,
)); ?>

  

  <div class="row">
  <div class="row">
   

	</div>

    <h3>USUARIO</h3>
    <?php echo $form->textField($model,'username',array('class'=>'form-control')); ?>
    <?php echo $form->error($model,'username',array('class'=>'label-warning')); ?>
    <?php echo $form->error($model,'username'); ?>
  </div>

  <div class="row">
    <h3>CONTRASEÑA</h3>
    <?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?>
    <?php echo $form->error($model,'password',array('class'=>'label-warning')); ?>
    <?php echo $form->error($model,'paswword'); ?>
  </div>
<br>
  <div class="row rememberMe">
    <?php echo $form->checkBox($model,'rememberMe'); ?>
    <?php echo $form->label($model,'rememberMe'); ?>
    <?php echo $form->error($model,'rememberMe'); ?>
  </div>
<br>

  <div class="row submit">
    <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-info')); ?>
  </div>

<?php $this->endWidget(); ?>
</div>
</div>
</div>
</div>
</div>