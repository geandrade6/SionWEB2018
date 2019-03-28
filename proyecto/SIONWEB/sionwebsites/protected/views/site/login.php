<style type="text/css">

  .imagenDos{
          width: 40%;
          height: 30%;

  }
  .videos{
    width: 100%; 
    height: 500px;
  }
  /* Para 600px */  
@media only screen and (max-width: 620px) and (min-width: 301px) {  
  
  .imagenDos{
          width: 80%;
          height: 20%;

  }
   .videos{
    width: 100%; 
    height: 300px;
  }
}
</style>

<div id="container" class="col-lg-8">
  <div id="main">
    <div class="inner">
      <div id="container" class="col-lg-12">
          <?php
          $this->pageTitle=Yii::app()->name . ' - Login';
          $this->breadcrumbs=array(
          	'Login',
          );
          ?>
          <div class="col-lg-12" style="width: 100%;">
              
               <img id="profile-img" class="profile-img-card imagenDos" src="<?php echo Yii::app()->request->baseUrl; ?>/imagenes/login.png" />
              
                <div class="col-lg-12">
            	 <h1 style="text-align: center;color:#2a7ab8;">INICIO DE SESION</h1>
            	 <p >PORFAVOR DILIGENCIAR EL FORMULARIO DE ACCESO A TU PERFIL</p>   
               </div>      
            	<?php $form=$this->beginWidget('CActiveForm', array(
              'id'=>'login-form',
              'enableAjaxValidation'=>true,
              )); ?>
              <div class="row">
                <h3 style="color:#2a7ab8;">TIPO DE USUARIO</h3>
                <?php echo $form->dropDownList($model,'username',array('Seleccionar el Rol'=>'Seleccionar el Rol','Administrador'=>'Administrador','Operador'=>'Operador','Residente'=>'Residente'));?>
                <?php echo $form->error($model,'username',array('class'=>'label-warning')); ?>
                <?php echo $form->error($model,'username'); ?>
              </div>
              <!--?php 
				        echo $form->dropDownList/*SELECT EN PHP*/($model,'estado_usuario',//squi va el id de la tabla
       				  CHtml::listData($consultarl, 'estado_user', 'estado_user')//aqui va el id y de seguido lo que se va a mostrar.
        		    ,array('class'=>'form-control columnas','id'=>'idrol', 'style'=>'width:100%;')); 
				      ?-->
          
              <div class="row">
                <h3 style="color:#2a7ab8;">CORREO</h3>
                <?php echo $form->emailField($model,'correo',array('class'=>'form-control')); ?>
                <?php echo $form->error($model,'correo',array('class'=>'label-warning')); ?>
                <?php echo $form->error($model,'correo'); ?>
              </div>
              <div class="row">
                <h3 style="color:#2a7ab8;">CONTRASEÑA</h3>
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
                <?php echo CHtml::submitButton('Iniciar Sesión',array('class'=>'btn btn-info')); ?>
              </div>

            <?php $this->endWidget(); ?>
          </div>
          
         
      </div>
    </div>
  </div>
  <hr width="100%;">
  
  <div style="" class="col-lg-12 ">
    <h1 style="color:#2a7ab8; text-align: center;">TECNOLOGIA</h1><br>
                <video autoplay src="<?php echo Yii::app()->request->baseUrl; ?>/videos/Version1.mp4" class="videos">
                <br>
  </div>
  <section id="banner" class=" col-lg-12">
                  <div class="content">
                    <header>
                      <h1 style="color:#2a7ab8;">Nuestro Conjunto</h1>
                      <p>CONJUNTO RESIDENCIAL TIMIZA DEL PARQUE</p>
                    </header>
                    <p>Somos un Conjunto Residencial PARQUES DEL TIMIZA, donde le proporcionamos a nuestros copropietarios información y ayuda de todo lo relacionado con nuestro conjunto tal como seguridad, buen ambiente y buena atención en lo que se necesite.
                    Bienvenidos.</p>
                    <ul class="actions">
                      
                    </ul>
                  </div>
                  <span class="image object">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/imagenes/pic013.jpg" style="width: 100%; height: 280px;">
                  
                  </span>
  </section>
</div>
