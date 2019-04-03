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
			<div class="col-lg-12">
				<h5 style=" color: red;">Al dar click tendrá dos Opciones.</h5>
				<h6>* Modificar Evento donde podrá modificar solo el texto y la posición de publicación.</h6>
				<h6>* Registrar Nuevo evento, "donde ingresamos un nuevo evento".</h6>
				<div class="col-lg-3">	
				<input type="submit" name="acciones" value="Insertar" class="insertados btn-primary" title="Ingresar nuevo evento" style="display: none;">
				<input type="submit" name="acciones" value="Modificar" class="modificados btn-primary" title="Modificar algun evento debe tener en cuenta al número de ID" style="display: block;">
				</div>
			</div>
			<header class="main">
				<?php // esto son las migas de pan
				$this->pageTitle=Yii::app()->name . ' - Nuevos Eventos';
				$this->breadcrumbs=array(
					'Insertar Nuevo Envento',
				);
				?>
				<div id="insertado" style="display: block;">

				<h1>Insertar Eventos</h1>
				<!-- Inicio de Formulario con Wigdet-->

				 <?php
				  $form=$this->beginWidget('CActiveForm',array('htmlOptions'=>array('enctype'=>'multipart/form-data'),
					)); //activacion del comando para el form
				  echo $form->errorSummary($modelEventos); // se llama la variablre
					?>	
				<h4>Título del Evento</h4>
				<?php
					echo $form->textField($modelEventos,'titulo',array('class'=>'form-control caja','placeholder'=>"Digita Título")); //
				?>
				<br>
				<h4>Mensaje principal del Evento</h4>
				<?php
					echo $form->textarea($modelEventos,'mensaje',array('class'=>'form-control  ','placeholder'=>"Digita Mensaje Principal")); //
				?>
				<br>
				<h4>Sub-Título del Evento</h4>
				<?php
					echo $form->textField($modelEventos,'subtitulo',array('class'=>'form-control caja ','placeholder'=>"Digita Sub-Título")); //
				?>
				<br>
				<h4>Sub-Mensaje del Evento</h4>
				<?php
					echo $form->textarea($modelEventos,'submensaje',array('class'=>'form-control  ','placeholder'=>"Digita Sub-Mensaje Principal")); //
				?>
				<br>
				<h4>Estado Eventos</h4>
				<?php
					echo $form->dropDownList/*SELECT EN PHP*/($modelEventos,'idestadoeventos',//squi va el id de la tabla
       				 CHtml::listData($consultaesteventos, 'idestadoeventos', 'nombre_estado_eventos')//aqui va el id y de seguido lo que se va a mostrar.
        			,array('class'=>'form-control columnas','style'=>'width:100%;')); 
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
			
				<h4>Fecha Registro</h4>
				<?php
					$fecha_registro = date('Y-m-d');
					echo $form->textField($modelEventos,'fecha_registro',array('value'=>$fecha_registro,'readonly'=>'readonly'));
				?>
				<br>
				 <?php  //esto es un boton en PHP
                    echo CHtml::submitButton('Insertar',array('class'=>'form-control btn-primary','style'=>'width:100%;;','id'=>'insertar','title'=>'Ingreso Registro','name'=>'insertar'));
                 ?>

				<?php	
					 $this->endWidget();				
				?>
				</div>
				<br>
				<div id="modificado" style="display: none;">
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
				</div>
			<!--Fin del Widget-->
			<h1>Evento Principal</h1>
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
							<h3 id="content"><?php echo $subtitulo; ?></h3>
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
					<h2 id="elements">Historial de Eventos</h2>
				<div class="col-lg-12">
					<?php
					foreach($consultaeventosDos as $key=>$value) { 
					$titulo=$value["titulo"]; // se asigna la variable que se quiere mostrar
					$mensaje=$value["mensaje"]; // se asigna la variable que se quiere mostrar
					$subtitulo=$value["subtitulo"]; // se asigna la variable que se quiere mostrar
					$submensaje=$value["submensaje"]; // se asigna la variable que se 
					$imagenes=$value["imagenes"]; // se asigna la variable que se 
					?>	
					<!-- Text stuff -->
					<div class="col-lg-6" style="float: left; padding: 1%;">
					<h3><?php echo $titulo;?></h3>
					<p><?php echo $mensaje;?></p>
					<h4><?php echo $subtitulo;?></h4>
					<p><?php echo $submensaje;?></p>
					<img src='<?php echo Yii::app()->request->baseUrl;?>/<?php echo $imagenes?>' style="width: 150px; height: 100px;">
					<hr />
					</div>
					<?php }?>
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
						<h4 style="text-align: center;">Listado Eventos Realizados Durante el Año</h4>
					<div class="table-wrapper">
						<div class="table-responsive contenedor" style="height: 300px; overflow: scroll;">
							<table class="table table-small-font table-bordered table-striped table-responsive" >
								<thead>
								<tr>
								<th style="background: orange; color: black;" class=columna>Modificaciones</th>
								<th style="background: orange; color: black;" class=columna>titulo</th>
								<th style="background: orange; color: black;" class=columna>mensaje</th>
								<th style="background: orange; color: black;" class=columna>subtitulo</th>
								<th style="background: orange; color: black;" class=columna>submensaje</th>
								</tr>
								</thead>
								<tbody>
									<?php
									foreach($consultaeventosTres as $key=>$value) { // se manda a llamar la variable que toma la informacion en este caso informa y hace un recorrido de la informacion en forma de array de lo que esta en el value mostrando datos la inforacion es extraida de la variable informa que esta en el controlador con una query.
									$iddelevento=$value["id"];
									$titulo=$value["titulo"]; // se asigna la variable que se quiere mostrar
									$mensaje=$value["mensaje"]; // se asigna la variable que se quiere mostrar
									$subtitulo=$value["subtitulo"]; // se asigna la variable que se quiere mostrar
									$submensaje=$value["submensaje"]; // se asigna la variable que se quiere mostrar
									?>
									<tr>
									<td class=columna style='font-weight:normal;'><?php echo $iddelevento; ?></td>
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

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/java.js""></script>
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
                        $(".insertados").css("display", "none");
                        $(".modificados").css("display", "block");
                       }
        });
         $(".modificados").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Modificar'){
                        $("#insertado").css("display", "none");
                        $("#modificado").css("display", "block");
                        $(".insertados").css("display", "block");
                        $(".modificados").css("display", "none");
                       }
        });
     
     	 if ('#ideventos'/*id de la caja busquedas*/!='') {
			          function Modificar_registros(modificareventos/*variable de la accion*/,opcionevento,titulo,mensaje,subtitulo,submensaje,estado,imagenes,ideventos) // obsterner registro del parametro que es la nueva vista php intermediaria
			          {
			            $.ajax({ // inicio de ajax 
			              url : 'consultaeventos',// se acciona la ubicacion del archivo PHP de consultaclientes
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