
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
				// esto son las migas de pan
		$this->pageTitle=Yii::app()->name . ' - Gestión Vehiculos';
		$this->breadcrumbs=array(
		'Gestión Vehiculos',
    );
    ?>
    		<div style="width: 100%; height: 300px; margin-bottom: 10%;" class="col-lg-12">
    			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/7.jpg" style="width: 100%; height: 400px;">
    			<br>
    		</div>

    		<div class="col-lg-12">
    		<br>
    		<h1 style="color:#2a7ab8">Funciones a Realizar</h1>
    		<h5 style=" color: red;">Opciones de Acción.</h5>
			<h6>* Insertar: Nuevo vehículo donde el operador o administrador tienen acceso.</h6>
			<h6>* Modificar: aquí podemos realizar los cambios pertinentes o actualizaciones de vehículos.</h6>
			<h6>* Eliminar: se aplica cunando un residente no está habitando en el conjunto.</h6>
			<input type="submit" name="acciones" value="Insertar" class="insertados btn-primary" title="Ingreso nuevo Registro">
			<input type="submit" name="acciones" value="Modificar" class="modificados btn-primary" title="Modificacion de Parametros del Vehiculo">
			<input type="submit" name="acciones" value="Eliminar" class="eliminados btn-primary" title="Eliminar Vehiculos del Sistema">
			</div>
	<div id="insertado" style="display: block;" class="col-lg-12">
	<h1 style="color:#2a7ab8">Insertar Vehículos</h1>
	<h6>Los campos con <span class="required" style="color: red;">*</span> son requeridos.</h6>
		<!-- Inicio de Formulario con Wigdet-->  
			 <?php              
			$form=$this->beginWidget('CActiveForm'); //activacion del comando para el form
			echo $form->errorSummary($modelocrearvehiculo); // se llama la variablre

			?>              
			<div class="col-lg-12">
				<div class="col-lg-4">
				<h4><span class="required" style="color: red;">*</span>Placa</h4>                 
				<?php
				echo $form->textField($modelocrearvehiculo,'placa',array('class'=>'form-control caja','placeholder'=>"Digita placa")); //
				?>
				</div>
				<div class="col-lg-4">
				<h4><span class="required" style="color: red;">*</span>Marca</h4>
				<?php
					echo $form->textField($modelocrearvehiculo,'marca',array('class'=>'form-control caja ','placeholder'=>"Digita marca")); //
				?>
				</div>
				<div class="col-lg-4">
				<h4><span class="required" style="color: red;">*</span>Color</h4>
				<?php
					echo $form->textField($modelocrearvehiculo,'color',array('class'=>'form-control caja','placeholder'=>"Digita el color")); //
				?>
				</div>
				<div class="col-lg-6">
				<h4><span class="required" style="color: red;">*</span>Modelo</h4>
				<?php
					echo $form->numberField($modelocrearvehiculo,'modelo',array('class'=>'form-control ','placeholder'=>"Digita el modelo")); //
				?>
				</div>
				<div class="col-lg-6">
				<h4>Categoría de Vehículo</h4>
				<?php 
				echo $form->dropDownList/*SELECT EN PHP*/($modelocrearvehiculo,'tipo_de_vehiculo',//squi va el id de la tabla
       				 CHtml::listData($consultatiposve, 'id', 'tipo')//aqui va el id y de seguido lo que se va a mostrar.
        		,array('class'=>'form-control columnas','id'=>'idrol', 'style'=>'width:100%;')); 
				?>
				</div>
				<div class="col-lg-6">
				<h4><span class="required" style="color: red;">*</span>Cedula cliente</h4>
				<?php
					echo $form->textField($modelocrearvehiculo,'usuarios_cedula',array('class'=>'form-control ','placeholder'=>"Digita cedula del usuario")); //
				?>
				</div>
				<div class="col-lg-6">
				<h4>Fecha Registro</h4>
				<?php
					$fecharegistrovehiculos = date('Y-m-d');
					echo $form->textField($modelocrearvehiculo,'fecha_registro',array('value'=>$fecharegistrovehiculos,'readonly'=>'readonly'));
				?>
				</div>
				<div class="col-lg-4">
				<br>
				 <?php  //esto es un boton en PHP
                    echo CHtml::submitButton('Insertar',array('class'=>'form-control btn-primary','style'=>'width:100%;','id'=>'insertar','title'=>'Ingreso Registro','name'=>'insertar'));
                 ?>
                 </div>
             </div>
				<?php	
					 $this->endWidget();				
				?>
			<!--Fin del Widget-->
				</div>

			<div id="modificado" style="display: none;">
			        <div class="col-lg-12">
			            <div class="col-lg-6">
			            	<br>
			                <label>Buscar vehículo por placa (Acción modificar ).</label>
			                <h6><span class="required" style="color: red;">*</span>Digite la Placa y de Enter.</h6>
			                <input type="text" name="placa" placeholder="Digita y Enter al terminar" class="form-control caja" id="placa" style="width: 100%; float: left;"/>  
	 		            </div>
					            <br>
				        <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="verregistrosveh" placeholder="Buscar" style="overflow: auto; width:100%;height: auto;">
					    		</div>
					        </fieldset>
				        </div>
			        </div>
				</div>

				<div id="eliminado" style="display: none;">
			        <div class="col-lg-12">
			            <div class="col-lg-6">
			            	<br>
			                <label>Buscar vehículo por placa (Acción Eliminar).</label>
			                <h6><span class="required" style="color: red;">*</span>Digite la Placa y de Enter.</h6>
			                <input type="text" name="plaquetas" placeholder="Digita y Enter al terminar" class="form-control caja" id="plaquetas" style="width: 100%; float: left;"/>  
	 		            </div>
					            <br>
				        <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="Eliminarregistrosve" placeholder="Buscar" style="overflow: auto; width:100%;height: auto;">
					    		</div>
					        </fieldset>
				        </div>
			        </div>
				</div>				

			<div class="col-lg-12">
				<h2 style="color:#2a7ab8">Listado General de vehículos</h2> 
			</div>
      		<div class="col-lg-12 table-responsive contenedor" id="div2" style="overflow: scroll; width: 100%; height: 50vh;"><!--se nombra la clase columna long tipo 9 bootrap tabla reponsive o adaptable con id2 para el llamdo en el script de ocultar secciones de pagina-->
                    <table class='table table-hover'>
                    <thead>
                    <tr>
                    <th class=columna>Placa</th>
                    <th class=columna>Marca</th>
                    <th class=columna>Color</th>
                    <th class=columna>Modelo</th>
                    <th class=columna>Nombre Cliente</th>
                    </tr>
                   	</thead>
                   	<tbody>
                   	<tr>
		 			<?php  //finalizacion del comando para la variable this
	                    foreach($consultagestionvehiculos as $key=>$value) { // se manda a llamar la variable que toma la informacion en este caso informa y hace un recorrido de la informacion en forma de array de lo que esta en el value mostrando datos la inforacion es extraida de la variable informa que esta en el controlador con una query.
	                    //$cedulausuarios=$value["cedula"]; // se asigna la variable que se quiere mostrar
		                $placa=$value["placa"]; // se asigna la variable que se quiere mostrar
		                $marca=$value["marca"]; // se asigna la variable que se quiere mostrar
		                $color=$value["color"]; // se asigna la variable que se quiere mostrar
		                $modelo=$value["modelo"]; // se asigna la variable que se quiere mostrar
		                $usuarios_cedula=$value["nombre"]; // se asigna la variable que se quiere mostrar
		                  //  $observacionesusuarios=$value["observaciones"];
		             ?>
		               	<td class=columna style='font-weight:normal;'><?php echo $placa?></td>
		                <td class=columna style='font-weight:normal;'><?php echo $marca?></td>
		                <td class=columna style='font-weight:normal;'><?php echo $color?></td>
		                <td class=columna style='font-weight:normal;'><?php echo $modelo?></td>
		                <td class=columna style='font-weight:normal;'><?php echo $usuarios_cedula?></td>
		            </tr>
                    <?php
	                    }
		            ?>
		             </tbody>
		             </table>
      		</div>
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
</section>
</div>
	</div>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/java.js""></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/skel.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/util.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
<script>//---------------------script para ocultar campos por botones-------
	       $(".insertados").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Insertar'){
                        $("#insertado").css("display", "block");
                        $("#modificado").css("display", "none");
                        $("#eliminado").css("display", "none");
                       }
        });
           $(".modificados").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Modificar'){
                        $("#insertado").css("display", "none");
                        $("#modificado").css("display", "block");
                        $("#eliminado").css("display", "none");
                       }
        });
          $(".eliminados").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Eliminar'){
                        $("#insertado").css("display", "none");
                        $("#modificado").css("display", "none");
                        $("#eliminado").css("display", "block");
                       }
        });

//-------------------------------------Modificar--------------------------------------------------------------------
	     if ('#placa'/*id de la caja busquedas*/!='') {
			          function Modificar_registrosve(modificarve/*variable de la accion*/,opcionve,marca,color,modelo,placa) // obsterner registro del parametro que es la nueva vista php intermediaria
			          {
			            $.ajax({ // inicio de ajax 
			              url : 'consultavehiculos',// se acciona la ubicacion del archivo PHP de consultaclientes
			              type : 'get', // se utilizara el tipo get para traer datos
			              data : { modificarve: modificarve/*variable de la accion*/,opcionve:opcionve,marca:marca,color:color,modelo:modelo,placa:placa},//creamos las variables para enviar.
			              success:function(resultado){ // dentro del succes creamos un funcion para el accionar de la variable resultado
			              	if (opcionve==1) {	// en la parte superior creamos una variable para tener diferentes 	puntos de vista
			              	 $("#verregistrosveh").html(resultado); //enviamos la informacion a el id del div o la caja que tengamos
			              	 	$('#modifcar').click(function(){ //enviamos la funcion de un click e el boton
			              	 		var marca,color,modelo,placa; // delcaramos las variables a utilizar
			              	 		marca=$('#marca').val() // el campo del input se evalua y lo que tenga se asigna a la variable
			              	 		color=$('#color').val()
			              	 		modelo=$('#modelo').val()
			              	 		placa=$('#placa').val()
			              	 		Modificar_registrosve(0/*variable ValorBusquedas en cero*/,2/*Variable Opcion*/,marca,color,modelo,placa);
			              	 		})
			              	 	} else if (opcionve==2) {
			              	 	alert("los datos Fueron Modificados Exitosamente"); // mostramos un mensaje de alert para decir que se actualizo
			              	 	document.location.href='gestionvehiculos';//refrescamos la pagina actual o redirigimos al terminar
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
			              Modificar_registrosve(valorBusquedas,1,'','','','');
			            }
			            else
			              {
			                Modificar_registrosve('',0,'','','','');
			              }
			              }
			          }); 
				}
//----------------------------------------------Eliminar--------------------------------------------------------------	
				if ('#plaquetas'/*id de la caja busquedas*/!='') {
			          function eliminar_Registros(eliminarvehiculo/*variable de la accion*/,opcionveDos,marca,color,modelo,usuarios_cedula,fecha_registro,plaquetas) // obsterner registro del parametro que es la nueva vista php intermediaria
			          {
			            $.ajax({ // inicio de ajax 
			              url : 'consultavehiculosDos',// se acciona la ubicacion del archivo PHP de consultaclientes
			              type : 'get', // se utilizara el tipo get para traer datos
			              data : { eliminarvehiculo:eliminarvehiculo/*variable de la accion*/,opcionveDos:opcionveDos,marca:marca,color:color,modelo:modelo,usuarios_cedula:usuarios_cedula,fecha_registro:fecha_registro,plaquetas:plaquetas},//creamos las variables para enviar.
			              success:function(resultadosA){ // dentro del succes creamos un funcion para el accionar de la variable resultado
			              	if (opcionveDos==1) {	// en la parte superior creamos una variable para tener diferentes puntos de vista
			              	 $("#Eliminarregistrosve").html(resultadosA); //enviamos la informacion a el id del div o la caja que tengamos
			              	 	$('#eliminar').click(function(){ //enviamos la funcion de un click e el boton
			              	 		var marca,color,modelo,usuarios_cedula,fecha_registro,plaquetas; // delcaramos las variables a utilizar
			              	 		marca=$('#marca').val() // el campo del input se evalua y lo que tenga se asigna a la variable
			              	 		color=$('#color').val()
			              	 		modelo=$('#modelo').val()
			              	 		usuarios_cedula=$('#usuarios_cedula').val()
			              	 		fecha_registro=$('#fecha_registro').val()
									plaquetas=$('#plaquetas').val() // nuestro campo cedula es la caja de buscar la podemos llamar igual
			              	 		eliminar_Registros(0/*variable ValorBusquedas en cero*/,2/*Variable Opcion*/,marca,color,modelo,usuarios_cedula,fecha_registro,plaquetas);
			              	 		})
			              	 	} if (opcionveDos==2) {
			              	 	alert("los datos Fueron Eliminados Exitosamente"); // mostramos un mensaje de alert para decir que se actualizo
			              	 	document.location.href='gestionvehiculos';//refrescamos la pagina actual o redirigimos al terminar
			              	 	}
			             	} 
			           	})
							//.done(function(){ 
							//})
			          }
			          $(document).on('keypress', '#plaquetas', function(keys) //se utiliza el campo de la busuqeda con el tipo key ose enter para accionar el campo y asinarlo al evento eventoboton.
			          {
			            if(keys.charCode == 13){//cuando se teclee enter lo cual es de valor 13
			            var valorBusquedasDos=$(this).val(); //se evalua el valor 
			            if (valorBusquedasDos!="") 
			            {
			              eliminar_Registros(valorBusquedasDos,1,'','','','','','');
			            }
			            else
			              {
			                eliminar_Registros('',0,'','','','','','');
			              }
			              }
			          }); 
				}
</script>