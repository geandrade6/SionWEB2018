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
		
			<header class="main">
				<?php // esto son las migas de pan
				$this->pageTitle=Yii::app()->name . ' - Insertar PQRS';
				$this->breadcrumbs=array(
					'Insertar PQRS',
				);
				?>
				<div id="insertado" style="display: block;">

				<h1>Insertar PQRS</h1>
				<!-- Inicio de Formulario con Wigdet-->

				 <?php
				  $form=$this->beginWidget('CActiveForm',array('htmlOptions'=>array('enctype'=>'multipart/form-data'),
					)); //activacion del comando para el form
				  echo $form->errorSummary($modelpqrs); // se llama la variablre
					?>	
				<h4>Codigo PQRS</h4>
				<?php
					echo $form->textField($modelpqrs,'idpqrs',array('class'=>'form-control caja','placeholder'=>"Digita Título")); //
				?>
				<br>
				<h4>Asunto</h4>
				<?php
					echo $form->textField($modelpqrs,'asunto',array('class'=>'form-control  ','placeholder'=>"Digita Mensaje Principal")); //
				?>
				<br>
				<h4>Mensaje</h4>
				<?php
					echo $form->textarea($modelpqrs,'mensaje',array('class'=>'form-control caja ','placeholder'=>"Digita Sub-Título")); //
				?>
				<br>
				<h4>Correo</h4>
				<?php
					echo $form->emailField($modelpqrs,'correo',array('class'=>'form-control  ','placeholder'=>"Digita Sub-Mensaje Principal")); //
				?>
				<br>
				<h4>Subir Archivo</h4>
        		<?php echo CHtml::activeFileField($modelpqrs,'adjunto'); //reclectamos la imagen?>  
        		<?php echo $form->error($modelpqrs,'adjunto');//error de si no  es imagen ?>
				
				<br>
				<h4>Estados PQRS</h4>
				<?php
					echo $form->textField($modelpqrs,'idestadopqrs',array('value'=>'EN PROCESO','class'=>'form-control  ','placeholder'=>"Digita Sub-Mensaje Principal",'readonly'=>'readonly')); //
				?>
				<br>
				<h4>Identificacion usuario</h4>
				<?php
					echo $form->textField($modelpqrs,'idusuario',array('class'=>'form-control  ','placeholder'=>"Digita Sub-Mensaje Principal")); //
				?>			
				<h4>Fecha Creacion PQRS</h4>
				<?php
					$fecha_registro = date('Y-m-d');
					echo $form->textField($modelpqrs,'fecha_crea',array('value'=>$fecha_registro,'readonly'=>'readonly'));
				?>
				<br>
				 <?php  //esto es un boton en PHP
                    echo CHtml::submitButton('Enviar Información',array('class'=>'form-control btn-primary','style'=>'width:100%;;','id'=>'insertar','title'=>'Ingreso Registro','name'=>'insertar'));
                 ?>

				<?php	
					 $this->endWidget();				
				?>
				</div>
				<br>
				<!--div id="modificado" style="display: none;">
			        <div class="col-lg-12">
			            <div class="col-lg-6">
			                <label>Buscar Cliente por Identificación (Acción modificar ).</label>
			                <input type="number" name="ideventos" placeholder="Digita y Enter al terminar" class="form-control" id="ideventos" style="width: 100%; float: left;"/>  
	 		            </div>
					            <br>
				        <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="eventosregistros" placeholder="Buscar" style="overflow: auto; width:100%;height: auto;">
					    		</div>
					        </fieldset>
				        </div>
			        </div>
				</div-->
			<!--Fin del Widget-->

				<!--div class="col-lg-12">
						<h4 style="text-align: center;">Listado de PQRS</h4>
					<div class="table-wrapper">
						<div class="table-responsive contenedor" style="height: 300px; overflow: scroll;">
							<table class="table table-small-font table-bordered table-striped table-responsive" >
								<thead>
								<tr>
								<th style="background: orange; color: black;" class=columna>Asunto</th>
								<th style="background: orange; color: black;" class=columna>Descripción</th>
								</tr>
								</thead>
								<tbody>
									<-?php
									foreach($consultpqrs as $key=>$value) { // se manda a llamar la variable que toma la informacion en este caso informa y hace un recorrido de la informacion en forma de array de lo que esta en el value mostrando datos la inforacion es extraida de la variable informa que esta en el controlador con una query.
									$asunto=$value["asunto"]; // se asigna la variable que se quiere mostrar
									$mensaje=$value["mensaje"]; // se asigna la variable que se quiere mostrar
								
									?>
									<tr>
									<td class=columna style='font-weight:normal;'><-?php echo $asunto; ?></td>
									<td class=columna style='font-weight:normal;'><-?php echo $mensaje; ?></td>
									</tr>
									<-?php
									 }
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div-->
		</section>
		</div>
	</div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/java.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/skel.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/util.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
<script>//este script es para ocultar campos por medio de botones
//______________________________________________________________________________________________________//botones ocult
         $(".insertados").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Insertar'){
                        $("#insertado").css("display", "block");
                        $("#modificado").css("display", "none");
                        
                       }
        });
         $(".modificados").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Modificar'){
                        $("#insertado").css("display", "none");
                        $("#modificado").css("display", "block");
                       }
        });
     
     	 if ('#ideventos'/*id de la caja busquedas*/!='') {
			          function Modificar_registros(modificareventos/*variable de la accion*/,opcionevento,titulo,mensaje,subtitulo,submensaje,estado,imagenes,ideventos) // obsterner registro del parametro que es la nueva vista php intermediaria
			          {
			            $.ajax({ // inicio de ajax 
			              url : 'consultaeventos',// se acciona la ubicacion del archivo PHP 
			              type : 'get', // se utilizara el tipo get para traer datos
			              data : { modificareventos:modificareventos/*variable de la accion*/,opcionevento:opcionevento,titulo:titulo,mensaje:mensaje,subtitulo:subtitulo,submensaje:submensaje,estado:estado,imagenes:imagenes,ideventos:ideventos },//creamos las variables para enviar.
			              success:function(resultado){ // dentro del succes creamos un funcion para el accionar de la variable resultado
			              	if (opcionevento==1) {	// en la parte superior creamos una variable para tener diferentes puntos de vista
			              	 $("#eventosregistros").html(resultado); //enviamos la informacion a el id del div o la caja que tengamos
			              	 	$('#modifcar').click(function(){ //enviamos la funcion de un click e el boton
			              	 		var titulo,mensaje,subtitulo,submensaje,estado,imagenes,ideventos; // delcaramos las variables a utilizar
			              	 		titulo=$('#titulo').val() // el campo del input se evalua y lo que tenga se asigna a la variable
			              	 		mensaje=$('#mensaje').val()
			              	 		subtitulo=$('#subtitulo').val()
			              	 		submensaje=$('#submensaje').val()
			              	 		estado=$('#estado').val()
			              	 		imagenes=$('#imagenes').val()
									ideventos=$('#ideventos').val() // nuestro campo cedula es la caja de buscar la podemos llamar igual

			              	 		Modificar_registros(0/*variable ValorBusquedas en cero*/,2/*Variable Opcion*/,titulo,mensaje,subtitulo,submensaje,estado,imagenes,ideventos);
			              	 		})
			              	 	} else if (opcionevento==2) {
			              	 	alert("los datos Fueron Modificados Exitosamente"); // mostramos un mensaje de alert para decir que se actualizo
			              	 	document.location.href='insertareventos';//refrescamos la pagina actual o redirigimos al terminar
			              		}
			            	} 
			            })
							//.done(function(){ 
							//})
			          }
			          $(document).on('keypress', '#ideventos', function(eventoboton) //se utiliza el campo de la busuqeda con el tipo key ose enter para accionar el campo y asinarlo al evento eventoboton.
			          {
			            if(eventoboton.charCode == 13){//cuando se teclee enter lo cual es de valor 13
			            var valorBusquedas=$(this).val(); //se evalua el valor 
			            if (valorBusquedas!="") 
			            {
			              Modificar_registros(valorBusquedas,1,'','','','','','','');
			                          
			            }
			            else
			              {
			                Modificar_registros('',0,'','','','','','','');
			              }
			              }
			          }); 
				}
</script>