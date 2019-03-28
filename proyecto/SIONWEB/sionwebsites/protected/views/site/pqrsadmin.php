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

				<div class="col-lg-12">
					<h1 style="color:#2a7ab8;">Insertar PQRS</h1>

					<h4 style="color:#2a7ab8;">Seleccionar (actualizar o ingresar) PQRS</h4>
				<div class="col-lg-3">
			    	
			    	<input type="submit" name="acciones" style="display: none;" id="ingresamos" value="Insertar" class="ingresamos btn-primary" title="Ingresar Nuevo PQRS">
					<input type="submit" name="acciones" value="Actualizar" style="display: block;" id="actualizamos" class="actualizamos btn-primary" title="Modificar el estado de un PQRS">
			    </div>
				</div>
				
				<div class="col-lg-12" id="ingresar" style="display: block;">
					<h6>Los campos con <span class="required" style="color: red;">*</span> son requeridos.</h6>
				 <?php
				  $form=$this->beginWidget('CActiveForm',array('htmlOptions'=>array('enctype'=>'multipart/form-data'),
					)); //activacion del comando para el form
				  echo $form->errorSummary($modelpqrs); // se llama la variablre
					?>	
				
				<h4><span class="required" style="color: red;">*</span>Asunto</h4>
				<?php
					echo $form->textField($modelpqrs,'asunto',array('class'=>'form-control  ','placeholder'=>"Digita Mensaje Principal")); //
				?>
				<br>
				<h4><span class="required" style="color: red;">*</span>Mensaje</h4>
				<?php
					echo $form->textarea($modelpqrs,'mensaje',array('class'=>'form-control caja ','placeholder'=>"Digita Sub-Título")); //
				?>
				<br>
				<h4><span class="required" style="color: red;">*</span>Correo</h4>
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
					echo $form->dropDownList/*SELECT EN PHP*/($modelpqrs,'idestadopqrs',//squi va el id de la tabla
       				 CHtml::listData($consultestadopqrs, 'idestadopqrs', 'nombre_estado_pqr')//aqui va el id y de seguido lo que se va a mostrar.
        			,array('class'=>'form-control columnas','style'=>'width:100%;')); 
				?>
				<br>
				<h4><span class="required" style="color: red;">*</span>Identificacion usuario</h4>
				<?php
					echo $form->textField($modelpqrs,'idusuario',array('class'=>'form-control  ','placeholder'=>"Digita Sub-Mensaje Principal")); //
				?>			
				<h4>Fecha Creacion PQRS</h4>
				<?php
					$fecha_registro = date('Y-m-d');
					echo $form->textField($modelpqrs,'fecha_crea',array('value'=>$fecha_registro,'readonly'=>'readonly'));
				?>
				<br>
				<div class="col-lg-4">
				 <?php  //esto es un boton en PHP
                    echo CHtml::submitButton('Enviar Información',array('class'=>'form-control btn-primary','style'=>'width:100%;;','id'=>'insertar','title'=>'Ingreso Registro','name'=>'insertar','title'=>'Ingresar Solicitud'));
                 ?>
                 </div>
				<?php	
					 $this->endWidget();				
				?>
				</div>
				<br>
				<div id="actualizar" style="display: none;">
			        <div class="col-lg-12">
			            <div class="col-lg-6">
			            	<br>
			                <label>Buscar PQRS por Identificación (Acción modificar ).</label>
			                <input type="number" name="idpqrs" placeholder="Digita y Enter al terminar" class="form-control" id="idpqrs" style="width: 100%; float: left;"/>  
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
				</div>
			<!--Fin del Widget-->

				<div class="col-lg-12">
						<h4 style="text-align: center;color:#2a7ab8;">Listado de PQRS</h4>
					<div class="table-wrapper">
						<div class="table-responsive contenedor" style="height: 300px; overflow: scroll;">
							<table class="table table-small-font table-bordered table-striped table-responsive" >
								<thead>
								<tr>
								<th style="background: orange; color: black;" class=columna>Asunto</th>
								<th style="background: orange; color: black;" class=columna>Descripción</th>
								<th style="background: orange; color: black;" class=columna>Nombre Usuario</th>
								<th style="background: orange; color: black;" class=columna>Estado</th>
								
								</tr>
								</thead>
								<tbody>
									<?php
									foreach($consultapqrs as $key=>$value) { // se manda a llamar la variable que toma la informacion en este caso informa y hace un recorrido de la informacion en forma de array de lo que esta en el value mostrando datos la inforacion es extraida de la variable informa que esta en el controlador con una query.
									$asunto=$value['asunto']; // se asigna la variable que se quiere mostrar
									$mensaje=$value['mensaje']; // se asigna la variable que se quiere mostrar
									$nombre = $value['nombre'];
									$estadopqrs=$value['nombre_estado_pqr']; // se asigna la variable que se quiere mostrar
								
									?>
									<tr>
									<td class=columna style='font-weight:normal;'><?php echo $asunto; ?></td>
									<td class=columna style='font-weight:normal;'><?php echo $mensaje; ?></td>
									<td class=columna style='font-weight:normal;'><?php echo $nombre; ?></td>
									<td class=columna style='font-weight:normal;'><?php echo $estadopqrs; ?></td>
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

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/java.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/skel.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/util.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
<script>//este script es para ocultar campos por medio de botones
//______________________________________________________________________________________________________//botones ocult
         $(".ingresamos").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Insertar'){
                        $("#ingresar").css("display", "block");
                        $("#actualizar").css("display", "none");
                        $("#ingresamos").css("display", "none");
                        $("#actualizamos").css("display", "block");
                        
                       }
        });
         $(".actualizamos").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Actualizar'){
                        $("#ingresar").css("display", "none");
                        $("#actualizar").css("display", "block");
                        $("#ingresamos").css("display", "block");
                        $("#actualizamos").css("display", "none");
                        
                       }
        });
     
     	 if ('#idpqrs'/*id de la caja busquedas*/!='') {
			function Modificar_registros(modificarpqrs/*variable de la accion*/,opcionpqrs,asunto,mensaje,correo,idestadopqrs,idusuario,fecha_crea,idpqrs) // obsterner registro del parametro que es la nueva vista php intermediaria
			{
			   $.ajax({ // inicio de ajax 
			    url : 'consultapq',// se acciona la ubicacion del archivo PHP 
			    type : 'get', // se utilizara el tipo get para traer datos
				data : { modificarpqrs:modificarpqrs/*variable de la accion*/,opcionpqrs:opcionpqrs,asunto:asunto,mensaje:mensaje,correo:correo,idestadopqrs:idestadopqrs,idusuario:idusuario,fecha_crea:fecha_crea,idpqrs:idpqrs },//creamos las variables para enviar.
			    success:function(resultado){ // dentro del succes creamos un funcion para el accionar de la variable resultado
			    if (opcionpqrs==1) {	// en la parte superior creamos una variable para tener diferentes puntos de vista
			    	$("#eventosregistros").html(resultado); //enviamos la informacion a el id del div o la caja que tengamos
			        $('#modifcar').click(function(){ //enviamos la funcion de un click e el boton
			        var asunto,mensaje,correo,idestadopqrs,idusuario,fecha_crea,idpqrs; // delcaramos las variables a utilizar
			        	asunto=$('#asunto').val() // el campo del input se evalua y lo que tenga se asigna a la variable
			            mensaje=$('#mensaje').val()
			            correo=$('#correo').val()
		              	idestadopqrs=$('#idestadopqrs').val()
		            	idusuario=$('#idusuario').val()
		          	 	fecha_crea=$('#fecha_crea').val()
		          	 	idpqrs=$('#idpqrs').val() 
				 		Modificar_registros(0/*variable ValorBusquedas en cero*/,2/*Variable Opcion*/,asunto,mensaje,correo,idestadopqrs,idusuario,fecha_crea,idpqrs);
			           	})
			    	} else if (opcionpqrs==2) {
			         	alert("los datos Fueron Modificados Exitosamente"); // mostramos un mensaje de alert para decir que se actualizo
			        	document.location.href='pqrsadmin';//refrescamos la pagina actual o redirigimos al terminar
			        }
			       } 
			  	})
				.done(function(){ 
				})
			}
				$(document).on('keypress', '#idpqrs', function(eventoboton) //se utiliza el campo de la busuqeda con el tipo key ose enter para accionar el campo y asinarlo al evento eventoboton.
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