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
				<?php // esto son las migas de pan
							$this->pageTitle=Yii::app()->name . ' - Gestión Control de Acceso';
							$this->breadcrumbs=array(
								'Gestión Control de Acceso',
							);
				?>
						<div style="width: 100%; height: 300px;" class="col-lg-12">
			    			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/5.jpg" style="width: 100%; height: 280px;">
			    			<br>
			    		</div>
						<div class="col-lg-12">
			    		<h1>Acción a ejecutar</h1>
			    		<input type="submit" name="acciones" style="display: none;" id="salida" value="Salida Vehiculos" class="insertado btn-primary">
						<input type="submit" name="acciones" value="Ingreso Vehiculos" style="display: block;" id="entrada" class="modificado btn-primary">
			    		</div>
						<div class="main col-lg-12" >
							
							<div id="insertado" style="display: block;" class="col-lg-12">
								<h1>Control salida de Vehículos</h1>
								<!-- Inicio de Formulario con Wigdet-->
								<?php
								  $form=$this->beginWidget('CActiveForm'); //activacion del comando para el form
								  echo $form->errorSummary($controles); // se llama la variablre
								?>	
								<h4>Placa</h4>
								<?php
									echo $form->textField($controles,'vehiculos_placa',array('class'=>'form-control caja','placeholder'=>"Digita Placa")); //
								?>
								<h4>Punto de Parqueo</h4>
								<?php 
								echo $form->dropDownList/*SELECT EN PHP*/($controles,'puntoparqueo_id',//squi va el id de la tabla
				       				 CHtml::listData($consultapuntopar, 'id', 'nombre_punto')//aqui va el id y de seguido lo que se va a mostrar.
				        		,array('class'=>'form-control columnas','id'=>'punto', 'style'=>'width:100%;')); 
								?>
								<h4>Fecha de Ingreso</h4>
								<?php
									echo $form->dateField($controles,'fecha_ingreso',array('class'=>'form-control','readonly'=>'readonly')); //
								?>
								<h4>Fecha de Salida</h4>
								<?php
									echo $form->dateField($controles,'fecha_salida',array('class'=>'form-control ')); //
								?>
								<br>
								 <?php  //esto es un boton en PHP

				                    echo CHtml::submitButton('Insertar',array('class'=>'form-control btn-primary','style'=>'width:100%;','id'=>'insertar','title'=>'Ingreso Registro','name'=>'insertar'));
				                 ?>
								<?php	
									 $this->endWidget();				
								?>
							<!--Fin del Widget-->
							</div>
				</div>
				<div id="modificado" style="display: none;">

					<div class="col-lg-12">

					    <div class="col-lg-12">
					    	<h1>Control Entrada de Vehículos</h1>
					        <label>Buscar Placa (Acción modificar ).</label>
					        <input type="text" name="placa" placeholder="Digita y Enter al terminar" class="form-control" id="placa" style="width: 100%; float: left;"/>  
				 	    </div>
					    <br>
					    <div class="col-lg-12">
						    <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
						<br>
							<div class="registros" id="modificaregistro" placeholder="Buscar" style="overflow: auto; width:100%;height: auto;">
							</div>
							</fieldset>
						</div>
			        </div>
				</div>
						<div class="col-lg-12">
						<h2>Listado Puntos de Parqueo</h2> 
			      		<div class="col-lg-12 table-responsive " id="div2" style="overflow: scroll; width: 100%; height: 50vh;"><!--se nombra la clase columna long tipo 9 bootrap tabla reponsive o adaptable con id2 para el llamdo en el script de ocultar secciones de pagina-->


			                    <table class='table table-hover'>
			                    <thead>
			                    <tr>
			                    <th class=columna>Apartamento</th>
			                    <th class=columna>Torre</th>
			                    <th class=columna>Nombre Usuario</th>
			                    <th class=columna>Punto Parqueo</th>
			                    <th class=columna>Placa</th>
			                    </tr>
			                   	</thead>
			                   	<tbody>
			                   	<tr>
					 			<?php  //finalizacion del comando para la variable this
				                    foreach($consultalistadopunto as $key=>$value) { // se manda a llamar la variable que toma la informacion en este caso informa y hace un recorrido de la informacion en forma de array de lo que esta en el value mostrando datos la inforacion es extraida de la variable informa que esta en el controlador con una query.
				                    //$cedulausuarios=$value["cedula"]; // se asigna la variable que se quiere mostrar
					                $apartamento=$value["apartamento"]; // se asigna la variable que se quiere mostrar
					                $torre=$value["torre"]; // se asigna la variable que se quiere mostrar
					                $nombreuser=$value["nombre"]; // se asigna la variable que se quiere mostrar
					                $puntoparqueo=$value["nombre_punto"]; // se asigna la variable que se quiere mostrar
					                $placas=$value["placa"]; // se asigna la variable que se quiere mostrar
					               
					                  //  $observacionesusuarios=$value["observaciones"];
					             ?>
					               	<td class=columna style='font-weight:normal;'><?php echo $apartamento?></td>
					                <td class=columna style='font-weight:normal;'><?php echo $torre?></td>
					                <td class=columna style='font-weight:normal;'><?php echo $nombreuser?></td>
					                <td class=columna style='font-weight:normal;'><?php echo $puntoparqueo?></td>
					                <td class=columna style='font-weight:normal;'><?php echo $placas?></td>
					            </tr>
			                    <?php
				                    }
					            ?>
					             </tbody>
					             </table>
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
<script type="text/javascript">
	 $(".insertado").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Salida Vehiculos'){
                        $("#insertado").css("display", "block");
                        $("#modificado").css("display", "none");
                        $("#salida").css("display", "none");
                        $("#entrada").css("display", "block");
                       }
        });
         $(".modificado").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Ingreso Vehiculos'){
                        $("#insertado").css("display", "none");
                        $("#modificado").css("display", "block");
                        $("#salida").css("display", "block");
                        $("#entrada").css("display", "none");
                       }
        });
//______________________________________________________________________________________________________//busqueda updat
          if ('#placa'/*id de la caja busquedas*/!='') {
			          function Modificar_registros(modificaringreso/*variable de la accion*/,opcioncontrol,fecha_ingreso,fecha_salida,puntoparqueo_id,placa) // obsterner registro del parametro que es la nueva vista php intermediaria
			          {
			            $.ajax({ // inicio de ajax 
			              url : 'consultacontrol',// se acciona la ubicacion del archivo PHP de consultaclientes
			              type : 'get', // se utilizara el tipo get para traer datos
			              data : { modificaringreso: modificaringreso/*variable de la accion*/,opcioncontrol:opcioncontrol,fecha_ingreso:fecha_ingreso,fecha_salida:fecha_salida,puntoparqueo_id:puntoparqueo_id,placa:placa },//creamos las variables para enviar.
			              success:function(resultado){ // dentro del succes creamos un funcion para el accionar de la variable resultado
			              	if (opcioncontrol==1) {	// en la parte superior creamos una variable para tener diferentes puntos de vista
			              	 $("#modificaregistro").html(resultado); //enviamos la informacion a el id del div o la caja que tengamos
			              	 	$('#modifcarcontrol').click(function(){ //enviamos la funcion de un click e el boton
			              	 		var fecha_ingreso,fecha_salida,puntoparqueo_id,placa; // delcaramos las variables a utilizar
			              	 		fecha_ingreso=$('#fecha_ingreso').val() // el campo del input se evalua y lo que tenga se asigna a la variable
			              	 		fecha_salida=$('#fecha_salida').val()
			              	 		puntoparqueo_id=$('#puntoparqueo_id').val()
									placa=$('#placa').val() // nuestro campo cedula es la caja de buscar la podemos llamar igual

			              	 		Modificar_registros(0/*variable ValorBusquedas en cero*/,2/*Variable Opcion*/,fecha_ingreso,fecha_salida,puntoparqueo_id,placa);
			              	 		})
			              	 	} else if (opcioncontrol==2) {
			              	 	alert("los datos Fueron Modificados Exitosamente"); // mostramos un mensaje de alert para decir que se actualizo
			              	 	document.location.href='controldeacceso';//refrescamos la pagina actual o redirigimos al terminar
			              		}
			            	} 
			            })
							//.done(function(){ 
							//})
			          }
			          $(document).on('keypress', '#placa', function(eventoboton) //se utiliza el campo de la busuqeda con el tipo key ose enter para accionar el campo y asinarlo al evento eventoboton.
			          {
			            if(eventoboton.charCode == 13){//cuando se teclee enter lo cual es de valor 13
			            var valorBusquedas=$(this).val(); //se evalua el valor 
			            if (valorBusquedas!="") 
			            {
			              Modificar_registros(valorBusquedas,1,'','','','');
			                          
			            }
			            else
			              {
			                Modificar_registros('',0,'','','','');
			              }
			              }
			          }); 
				}
</script>
