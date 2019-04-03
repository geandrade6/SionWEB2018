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

				<h1 style="color:#2a7ab8;">Insertar PQRS</h1>
				<!-- Inicio de Formulario con Wigdet-->
				<h6>Los campos con <span class="required" style="color: red;">*</span> son requeridos.</h6>
				 <?php
							  $form=$this->beginWidget('CActiveForm',array('htmlOptions'=>array('enctype'=>'multipart/form-data'),
					)); //activacion del comando para el form
				  echo $form->errorSummary($modelpqrs); // se llama la variablre
					?>	
				<h4>Codigo PQRS</h4>
				<?php
				foreach ($mostrarpqrs as $key => $value) {
					# code...
					$ver =  $value['idpqrs'];
				}
				
					echo $form->textField($modelpqrs,'idpqrs',array('class'=>'form-control caja','placeholder'=>"COD-$ver",'readonly'=>'readonly')); //
				
				?>
				<br>
				<h4><span class="required" style="color: red;">*</span>Asunto</h4>
				<?php
					echo $form->textField($modelpqrs,'asunto',array('class'=>'form-control  ','placeholder'=>"Digita el Asunto Principal")); //
				?>
				<br>
				<h4><span class="required" style="color: red;">*</span>Mensaje</h4>
				<?php
					echo $form->textarea($modelpqrs,'mensaje',array('class'=>'form-control caja ','placeholder'=>"Digita el Mensaje Principal")); //
				?>
				<br>
				<h4><span class="required" style="color: red;">*</span>Correo</h4>
				<?php
					echo $form->emailField($modelpqrs,'correo',array('class'=>'form-control  ','placeholder'=>"Digita tu Correo")); //
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
				<h4><span class="required" style="color: red;">*</span>Identificación usuario</h4>
				<?php
					echo $form->textField($modelpqrs,'idusuario',array('class'=>'form-control  ','placeholder'=>"Digita cedula de usuario")); //
				?>			
				<h4>Fecha Creacion PQRS</h4>
				<?php
					$fecha_registro = date('Y-m-d');
					echo $form->textField($modelpqrs,'fecha_crea',array('value'=>$fecha_registro,'readonly'=>'readonly'));
				?>
				<br>
				<div class="col-lg-4">
				 <?php  //esto es un boton en PHP
                    echo CHtml::submitButton('Enviar Información',array('class'=>'form-control btn-primary','style'=>'width:100%;;','id'=>'insertar','title'=>'Ingreso Registro','name'=>'insertar','title'=>'Ingresar Solicitud.'));
                 ?>
             	</div>

				<?php	
					 $this->endWidget();				
				?>
				</div>
				<br>
			
		</section>
		<section>
			<div id="solicitaruser">
			    <div class="col-lg-12">
			        <div class="col-lg-8">
			                <label style="color: orange;">Consulta Tú PQRS(Cedula de usuario).</label>
			                <h6><span class="required" style="color: red;">*</span>Aquí realizamos la búsqueda de nuestros PQRS con nuestra identificación.</h6>
			                <input type="text" name="cedulas" class="form-control" id="cedulas" style="width: 100%; float: left;"/> 
	 		        </div>
	 		        <div class="col-lg-12">
	                	 <br>
						<input type="button" name="buscarcedulapqrs" id="buscarcedulapqrs" value="Buscar" >
						 <br>
					</div>
				    <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="busquedaporcedulasolicitud" placeholder="Buscar" style="overflow: auto; width:100%;height: auto;">
					    			<div class="col-lg-6">
						      			<h1>Historia</h1>
						      			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						      			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						      			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						      			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						      			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						      			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						      		</div>
						      		<div class="col-lg-6">
						      			<h1>Ideas</h1>
						      			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						      			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						      			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						      			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						      			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						      			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						      		</div>
						      		<div style="width: 100%; height: 300px;" class="col-lg-12">
						    			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/5.jpg" style="width: 100%; height: 280px;">
						    			<br>
						    		</div>	
					    		</div>
					        </fieldset>
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

				 if ('#cedulas') {
	          function obtener_registros_ocho(cedulas) // inicio de la funcion obtener registros de la tabla clientes
	          {
	            $.ajax({ // inicio de ajax 
	              url :'consultausuariopqrs', // se acciona la ubicacion del archivo de consulta
	              type : 'get', // se indica que tipo de metodo sera
	              data : {cedulas:cedulas}, // se indica la base a la cual va dirigida la extraccion
	              })
	            .done(function(resultadosA){ // estrae la informacion valida y la envia a la tabla resultados del div
	              $("#busquedaporcedulasolicitud").html(resultadosA);
	            })
	          }
	         $('#buscarcedulapqrs').click(function(){ //enviamos la funcion de un click e el boton
				var cedulas;
				cedulas=$('#cedulas').val()
	   	 		obtener_registros_ocho(cedulas);
	   	 		});
	     }
	  
</script>