		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="es" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- blueprint CSS framework -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/estilos.css" media="screen, projection"/>
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
				$this->pageTitle=Yii::app()->name . ' - Gestión Usuarios';
				$this->breadcrumbs=array(
					'Gestión Usuarios',
					
				);

			?>

			<div style="width: 100%; height: 300px;margin-bottom: 10%;" class="col-lg-12">
    			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/4.jpg" style="width: 100%; height: 400px;">
    			<br>
    		</div>
    		<div class="col-lg-12">
    		<h1>Acción a ejecutar</h1>
    		<input type="submit" name="acciones" value="Insertar" class="insertados btn-primary">
			<input type="submit" name="acciones" value="Modificar" class="modificados btn-primary">
			<input type="submit" name="acciones" value="Eliminar" class="eliminados btn-primary">
			<input type="submit" name="acciones" value="Apartamento" class="modifiapart btn-primary">
    		</div>
			

			<div class="main col-lg-12" >
				<h1>Insertar Usuarios</h1>
				<div id="insertado" style="display: block;" class="col-lg-12">
				
				<!-- Inicio de Formulario con Wigdet-->
				<?php
				  $form=$this->beginWidget('CActiveForm'); //activacion del comando para el form
				  echo $form->errorSummary($modelocrearusuario); // se llama la variablre
				?>	
				<div class=" col-lg-12">
				<h4>Cedula</h4>
				<?php
					echo $form->textField($modelocrearusuario,'cedula',array('class'=>'form-control ','placeholder'=>"Digita Cedula")); //
				?>
				</div>
				<div class=" col-lg-6">
				<h4>Nombre</h4>
				<?php
					echo $form->textField($modelocrearusuario,'nombre',array('class'=>'form-control caja ','placeholder'=>"Digita Nombre")); //
				?>
				</div>
				<div class=" col-lg-6">
				<h4>Apellido</h4>
				<?php
					echo $form->textField($modelocrearusuario,'apellido',array('class'=>'form-control caja','placeholder'=>"Digita el apellido")); //
				?>
				</div>
				<div class=" col-lg-6">
				<h4>Teléfono</h4>
				<?php
					echo $form->numberField($modelocrearusuario,'telefono',array('class'=>'form-control ','placeholder'=>"Digita el telefono")); //
				?>
				</div>
				<div class=" col-lg-6">
				<h4>Celular</h4>
				<?php
					echo $form->numberField($modelocrearusuario,'celular',array('class'=>'form-control ','placeholder'=>"Digita el celular")); //
				?>
				</div>
				<div class=" col-lg-6">
				<h4>Correo</h4>
				<?php
					echo $form->textField($modelocrearusuario,'correo',array('class'=>'form-control ','type'=>'mail','placeholder'=>"Digita el Correo")); //
				?>	
				</div>
				<div class=" col-lg-6">
				<h4>Conraseña</h4>
				<?php
					echo $form->PasswordField($modelocrearusuario,'password',array('password ','class'=>'form-control ','placeholder'=>"Digita la Contraseña")); //
				?>
				</div>
				<div class=" col-lg-6">
				<h4>Estado usuario</h4>
				<?php 
				echo $form->dropDownList/*SELECT EN PHP*/($modelocrearusuario,'estado_usuario',//squi va el id de la tabla
       				 CHtml::listData($consultaEstadoUser, 'activar_user', 'estado_user')//aqui va el id y de seguido lo que se va a mostrar.
        		,array('class'=>'form-control columnas','id'=>'idrol', 'style'=>'width:100%;')); 
				?>
				</div>
				<div class=" col-lg-12">
				<h4>Observaciones</h4>
				<?php
					echo $form->textarea($modelocrearusuario,'observaciones',array('class'=>'form-control caja','placeholder'=>"Digita mensaje")); //
				?>
				</div>
				<div class=" col-lg-6">
				<h4>Roles</h4>
				<?php 
				echo $form->dropDownList/*SELECT EN PHP*/($modelocrearusuario,'roles_id',//squi va el id de la tabla
       				 CHtml::listData($consultaRol, 'id', 'nombre_rol')//aqui va el id y de seguido lo que se va a mostrar.
        		,array('class'=>'form-control columnas','id'=>'idrol', 'style'=>'width:100%;')); 
				?>
				</div>
				<div class=" col-lg-6">
				<h4>Tipo de Vehículo</h4>
				<?php 
				echo $form->dropDownList/*SELECT EN PHP*/($modelocrearusuario,'tipos_id',//squi va el id de la tabla
       				 CHtml::listData($consultatipoparqueo, 'id', 'tipo')//aqui va el id y de seguido lo que se va a mostrar.
        		,array('class'=>'form-control columnas','id'=>'idrol', 'style'=>'width:100%;')); 
				?>
				</div>
				<div class=" col-lg-12">
				<h4>Fecha Registro</h4>
				<?php
					$fecha = date('Y-m-d');
					echo $form->textField($modelocrearusuario,'fecha_registro',array('value'=>$fecha,'readonly'=>'readonly'));
				?>
				</div>
				<div class=" col-lg-6">
				<h4>Activación Usurio</h4>
				<?php 
				echo $form->dropDownList/*SELECT EN PHP*/($modelocrearusuario,'activar_user',//squi va el id de la tabla
       				 CHtml::listData($consultaEstadoUser, 'activar_user', 'estado_user')//aqui va el id y de seguido lo que se va a mostrar.
        		,array('class'=>'form-control columnas','id'=>'idrol', 'style'=>'width:100%;')); 
				?>
				<br>
				</div>
				
				<div class=" col-lg-12" style="margin-bottom: 5%;">
				 <?php  //esto es un boton en PHP

                    echo CHtml::submitButton('Insertar',array('class'=>'form-control btn-primary','style'=>'width:100%;','id'=>'insertar','title'=>'Ingreso Registro','name'=>'insertar'));
                           
                 ?>
                 <br>
             	</div>

				<?php	
					 $this->endWidget();				
				?>
			<!--Fin del Widget-->
				</div>
				<br>

				<div id="modificado" style="display: none;">
			        <div class="col-lg-12">
			            <div class="col-lg-6">
			                <label>Buscar Cliente por Identificación (Acción modificar ).</label>
			                <input type="text" name="cedula" placeholder="Digita y Enter al terminar" class="form-control" id="cedula" style="width: 100%; float: left;"/>  
	 		            </div>
					            <br>
				        <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="verregistros" placeholder="Buscar" style="overflow: auto; width:100%;height: auto;">
					    		</div>
					        </fieldset>
				        </div>
			        </div>
				</div>
				<div id="eliminado" style="display: none;">
			        <div class="col-lg-12">
			            <div class="col-lg-6">
			                <label>Buscar Cliente por Identificación (Acción Eliminar).</label>
			                <input type="text" name="busquedasa" placeholder="Digita y Enter al terminar" class="form-control" id="busquedasa" style="width: 100%; float: left;"/>  
	 		            </div>
					            <br>
				        <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="EliminargistrosDos" placeholder="Buscar" style="overflow: auto; width:100%;height: auto;">
					    		</div>
					        </fieldset>
				        </div>
			        </div>
				</div>
				<div id="modapartamentos" style="display: none;">
			        <div class="col-lg-12">
			            <div class="col-lg-6">
			               
			                <label>Digita Cedula Propietario (Acción Modificar).</label>
			                <input type="text" name="busquedasapartados" placeholder="Digita y Enter al terminar" class="form-control" id="busquedasapartados" style="width: 100%; float: left;"/>  
	 		            </div>
					            <br>
				        <div class="col-lg-12">
				        	
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="apartamentosmodifica" placeholder="Buscar" style="overflow: auto; width:100%;height: auto;">
					    		</div>
					        </fieldset>
				        </div>
			        </div>
				</div>				
			</div>
			<h2>Listado General de Usuarios Residentes y Visitantes</h2> 
      		<div class="col-lg-9 table-responsive contenedor" id="div2" style="overflow: scroll; width: 100%; height: 50vh;"><!--se nombra la clase columna long tipo 9 bootrap tabla reponsive o adaptable con id2 para el llamdo en el script de ocultar secciones de pagina-->

                    <table class='table table-hover'>
                    <thead>
                    <tr>
                    <th class=columna>Nombre</th>
                    <th class=columna>Apellido</th>
                    <th class=columna>Telefono</th>
                    <th class=columna>Celular</th>
                    <th class=columna>Correo</th>
                    <th class=columna>Rol</th>
                    </tr>
                   	</thead>
                   	<tbody>
                   	<tr>
		 			<?php  //finalizacion del comando para la variable this
	                    foreach($consultagestionuser as $key=>$value) { // se manda a llamar la variable que toma la informacion en este caso informa y hace un recorrido de la informacion en forma de array de lo que esta en el value mostrando datos la inforacion es extraida de la variable informa que esta en el controlador con una query.
	                    //$cedulausuarios=$value["cedula"]; // se asigna la variable que se quiere mostrar
		                $nombreusuarios=$value["nombre"]; // se asigna la variable que se quiere mostrar
		                $apellidousuarios=$value["apellido"]; // se asigna la variable que se quiere mostrar
		                $telefonousuarios=$value["telefono"]; // se asigna la variable que se quiere mostrar
		                $celularusuarios=$value["celular"]; // se asigna la variable que se quiere mostrar
		                $correousuarios=$value["correo"]; // se asigna la variable que se quiere mostrar
		                $nombrerol=$value["nombre_rol"]; // se asigna la variable que se quiere mostrar
		                  //  $observacionesusuarios=$value["observaciones"];
		             ?>
		               	<td class=columna style='font-weight:normal;'><?php echo $nombreusuarios?></td>
		                <td class=columna style='font-weight:normal;'><?php echo $apellidousuarios?></td>
		                <td class=columna style='font-weight:normal;'><?php echo $telefonousuarios?></td>
		                <td class=columna style='font-weight:normal;'><?php echo $celularusuarios?></td>
		                <td class=columna style='font-weight:normal;'><?php echo $correousuarios?></td>
		                <td class=columna style='font-weight:normal;'><?php echo $nombrerol?></td>
		            </tr>
                    <?php
	                    }
		            ?>
		             </tbody>
		             </table>
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
                        $("#eliminado").css("display", "none");
                        $("#modapartamentos").css("display", "none");
                       }
        });
         $(".modificados").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Modificar'){
                        $("#insertado").css("display", "none");
                        $("#modificado").css("display", "block");
                        $("#eliminado").css("display", "none");
                        $("#modapartamentos").css("display", "none");
                       }
        });
         $(".eliminados").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Eliminar'){
                        $("#insertado").css("display", "none");
                        $("#modificado").css("display", "none");
                        $("#eliminado").css("display", "block");
                        $("#modapartamentos").css("display", "none");
                       }
        });
         $(".modifiapart").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Apartamento'){
                        $("#insertado").css("display", "none");
                        $("#modificado").css("display", "none");
                        $("#eliminado").css("display", "none");
                        $("#modapartamentos").css("display", "block");
                       }
        });
//______________________________________________________________________________________________________//busqueda updat
          if ('#cedula'/*id de la caja busquedas*/!='') {
			          function Modificar_registros(consultaclientes/*variable de la accion*/,opcion,nombre,apellido,telefono,celular,correo,cedula) // obsterner registro del parametro que es la nueva vista php intermediaria
			          {
			            $.ajax({ // inicio de ajax 
			              url : 'consultaclientes',// se acciona la ubicacion del archivo PHP de consultaclientes
			              type : 'get', // se utilizara el tipo get para traer datos
			              data : { consultaclientes: consultaclientes/*variable de la accion*/,opcion:opcion,nombre:nombre,apellido:apellido,telefono:telefono,celular:celular,correo:correo,cedula:cedula },//creamos las variables para enviar.
			              success:function(resultado){ // dentro del succes creamos un funcion para el accionar de la variable resultado
			              	if (opcion==1) {	// en la parte superior creamos una variable para tener diferentes puntos de vista
			              	 $("#verregistros").html(resultado); //enviamos la informacion a el id del div o la caja que tengamos
			              	 	$('#modifcar').click(function(){ //enviamos la funcion de un click e el boton
			              	 		var nombre,apellido,telefono,celular,correo,cedula; // delcaramos las variables a utilizar
			              	 		nombre=$('#nombre').val() // el campo del input se evalua y lo que tenga se asigna a la variable
			              	 		apellido=$('#apellido').val()
			              	 		telefono=$('#telefono').val()
			              	 		celular=$('#celular').val()
			              	 		correo=$('#correo').val()
									cedula=$('#cedula').val() // nuestro campo cedula es la caja de buscar la podemos llamar igual

			              	 		Modificar_registros(0/*variable ValorBusquedas en cero*/,2/*Variable Opcion*/,nombre,apellido,telefono,celular,correo,cedula);
			              	 		})
			              	 	} else if (opcion==2) {
			              	 	alert("los datos Fueron Modificados Exitosamente"); // mostramos un mensaje de alert para decir que se actualizo
			              	 	document.location.href='gestionusuarios';//refrescamos la pagina actual o redirigimos al terminar
			              		}
			            	} 
			            })
							//.done(function(){ 
							//})
			          }
			          $(document).on('keypress', '#cedula', function(eventoboton) //se utiliza el campo de la busuqeda con el tipo key ose enter para accionar el campo y asinarlo al evento eventoboton.
			          {
			            if(eventoboton.charCode == 13){//cuando se teclee enter lo cual es de valor 13
			            var valorBusquedas=$(this).val(); //se evalua el valor 
			            if (valorBusquedas!="") 
			            {
			              Modificar_registros(valorBusquedas,1,'','','','','','');
			                          
			            }
			            else
			              {
			                Modificar_registros('',0,'','','','','','');
			              }
			              }
			          }); 
				}
//______________________________________________________________________________________________________//busqueda delet
if ('#busquedasa'/*id de la caja busquedas*/!='') {
			          function eliminar_Registros(eliminaruser/*variable de la accion*/,opcionDos,nombre,apellido,telefono,celular,correo,busquedasa) // obsterner registro del parametro que es la nueva vista php intermediaria
			          {
			            $.ajax({ // inicio de ajax 
			              url : 'consultaclientesDos',// se acciona la ubicacion del archivo PHP de consultaclientes
			              type : 'get', // se utilizara el tipo get para traer datos
			              data : { eliminaruser: eliminaruser/*variable de la accion*/,opcionDos:opcionDos,nombre:nombre,apellido:apellido,telefono:telefono,celular:celular,correo:correo,busquedasa:busquedasa},//creamos las variables para enviar.
			              success:function(resultadosA){ // dentro del succes creamos un funcion para el accionar de la variable resultado
			              	if (opcionDos==1) {	// en la parte superior creamos una variable para tener diferentes puntos de vista
			              	 $("#EliminargistrosDos").html(resultadosA); //enviamos la informacion a el id del div o la caja que tengamos
			              	 	$('#eliminar').click(function(){ //enviamos la funcion de un click e el boton
			              	 		
			              	 		var nombre,apellido,telefono,celular,correo,busquedasa; // delcaramos las variables a utilizar
			              	 		nombre=$('#nombre').val() // el campo del input se evalua y lo que tenga se asigna a la variable
			              	 		apellido=$('#apellido').val()
			              	 		telefono=$('#telefono').val()
			              	 		celular=$('#celular').val()
			              	 		correo=$('#correo').val()
									busquedasa=$('#busquedasa').val() // nuestro campo cedula es la caja de buscar la podemos llamar igual

			              	 		eliminar_Registros(0/*variable ValorBusquedas en cero*/,2/*Variable Opcion*/,nombre,apellido,telefono,celular,correo,busquedasa);
			              	 		})
			              	 	} else if (opcionDos==2) {
			              	 	alert("los datos Fueron Eliminados Exitosamente"); // mostramos un mensaje de alert para decir que se actualizo
			              	 	document.location.href='gestionusuarios';//refrescamos la pagina actual o redirigimos al terminar
			              	 	}
			             	} 
			           	})
							//.done(function(){ 
							//})
			          }
			          $(document).on('keypress', '#busquedasa', function(keys) //se utiliza el campo de la busuqeda con el tipo key ose enter para accionar el campo y asinarlo al evento eventoboton.
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
//----------------------------------------------modificar cedulas Arrendatarios----------------------------------
 if ('#busquedasapartados'!=''/*id de la caja busquedas*/) {
			          function Modificar_registros(consulapa/*variable de la accion*/,opcionapa,torre,apa,cedu,busquedasapartados) // obsterner registro del parametro que es la nueva vista php intermediaria
			          {
			            $.ajax({ // inicio de ajax 
			              url : 'consultapartamento',// se acciona la ubicacion del archivo PHP de consultaclientes
			              type : 'get', // se utilizara el tipo get para traer datos
			              data : { consulapa: consulapa/*variable de la accion*/,opcionapa:opcionapa,torre:torre,apa:apa,cedu:cedu,busquedasapartados:busquedasapartados },//creamos las variables para enviar.
			              success:function(resultado){ // dentro del succes creamos un funcion para el accionar de la variable resultado
			              	if (opcionapa==1) {	// en la parte superior creamos una variable para tener diferentes puntos de vista
			              	 $("#apartamentosmodifica").html(resultado); //enviamos la informacion a el id del div o la caja que tengamos
			              	 $('#modifcarmos').click(function(){ //enviamos la funcion de un click e el boton
			              	 		var torre,apa,cedu,busquedasapartados; // delcaramos las variables a utilizar
			              	 		torre=$('#torre').val() // el campo del input se evalua y lo que tenga se asigna a la variable
			              	 		apa=$('#apa').val()
			              	 		cedu=$('#cedu').val()
									busquedasapartados=$('#busquedasapartados').val() // nuestro campo cedula es la caja de buscar la podemos llamar igual

			              	 		Modificar_registros(0/*variable ValorBusquedas en cero*/,2/*Variable Opcion*/,torre,apa,cedu,busquedasapartados);
			              	 		})
			              	 	} else if (opcionapa==2) {
			              	 	alert("los datos Fueron Modificados Exitosamente"); // mostramos un mensaje de alert para decir que se actualizo
			              	 	document.location.href='gestionusuarios';//refrescamos la pagina actual o redirigimos al terminar
			              		}
			            	} 
			            })
							//.done(function(){ 
							//})
			          }
			          $(document).on('keypress', '#busquedasapartados', function(eventoboton) //se utiliza el campo de la busuqeda con el tipo key ose enter para accionar el campo y asinarlo al evento eventoboton.
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