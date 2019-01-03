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
			<?php // esto son las migas de pan
				$this->pageTitle=Yii::app()->name . ' - Gestión Reportes';
				$this->breadcrumbs=array(
					'Gestión Reportes',
					
				);
			?>
		<section>

			<h1 style="text-align: center;">REPORTES Y CONSULTAS </h1>
			<div style="width: 100%; height: 300px;" class="col-lg-12">
    			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/9.jpg" style="width: 100%; height: 280px;">
    			<br>
    		</div>

			<fieldset style="border: 1px solid #b4b3b3;">
				<div class="col-lg-6">
					<h2>Salidas y Entradas Vehículos <br>(<label style="color: blue;">Generación de Reportes</label>)</h2>
					<br>
				</div>
				<div class="col-lg-6">
					<br>
					<input style="width: 100%;" type="submit" name="acciones" value="Por Fecha" class="fechamos btn-primary"><br>
					<input style="width: 100%;" type="submit" name="acciones" value="Por Placa" class="plaqueados btn-primary"><br>
					<input style="width: 100%;" type="submit" name="acciones" value="Por Usuario" class="clientelas btn-primary"><br>
				</div>
			</fieldset>
			<fieldset style="border: 1px solid #b4b3b3;">
				<div class="col-lg-6">
					<h2>Usuarios <br>(<label style="color: blue;">Generación de Reportes</label>)</h2>
					<br>
				</div>
				<div class="col-lg-6">
					<br>
					<input style="width: 100%;" type="submit" name="acciones" value="Fecha Registrado" class="fechareg btn-primary"><br>
					<input style="width: 100%;" type="submit" name="acciones" value="Cantidad Usuarios" class="cantidades btn-primary"><br>
					<input style="width: 100%;" type="submit" name="acciones" value="Tipo Usuario" class="cargos btn-primary"><br>
					<br>
				</div>
			</fieldset>
			<fieldset style="border: 1px solid #b4b3b3;">
				<div class="col-lg-6">
					<h2>PQRS Generados <br>(<label style="color: blue;">Generación de Reportes</label>)</h2>
					<br>
				</div>
				<div class="col-lg-6">
					<br>
					<input style="width: 100%;" type="submit" name="acciones" value="Fecha Solicitud" class="fechaspqrs btn-primary"><br>
					<input style="width: 100%;" type="submit" name="acciones" value="Solicitud del Usuario" class="solicitudpqrs btn-primary"><br>
					<br>
				</div>
			</fieldset>
			<div class="col-lg-12">
				<h3 style="text-align: center;">TABLA DE REPORTES INFORMACIÓN Y VERIFICACIÓN DE DATOS</h3>	
			</div>
			<!--___________________________________primer consulta___boton1__________________________________-->
			<div id="fechar" style="display: block;">
			    <div class="col-lg-12">
			        <div class="col-lg-12">
			        		<h3>Rango de fecha <br> ( Fecha de ingreso y salida de vehiculos )</h3>
			                <label style="color: orange;">Consulta por Fecha desde (Acción Fecha inicial).</label>
			                <input type="date" name="desde" class="form-control" id="desde" style="width: 100%; float: left;"/> 
			                <br>
			                <label style="color: orange;">Consulta por Fecha hasta (Acción Fecha final).</label>
			                <input type="date" name="hasta" class="form-control" id="hasta" style="width: 100%; float: left;"/>  
			                <br>
	 		        </div>
					<div class="col-lg-12">
					<br>
					<input type="button" name="buscarfecha" id="buscarfecha" value="Buscar">
					</div>
				    <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="busquedaporfechasuno" placeholder="Buscar" style="overflow:auto; width:100%;height: 100vh;">
					    		</div>
					        </fieldset>
				    </div>
			    </div>
			</div>
			<!--________________________________segunda consulta_____boton Dos_______________________________-->

			<div id="plaquear" style="display: none;">
			    <div class="col-lg-12">
			        <div class="col-lg-12">
			        	<h3>Búsqueda por placa <br> ( Digitar el número de la placa )</h3>
			                <label style="color: orange;">Consulta por placa (Acción Busqueda).</label>
			                <input type="text" name="placas" class="form-control caja" id="placas" style="width: 100%; float: left;"/> 
	 		        </div>
	 		        <div class="col-lg-12">
					<br>
					<input type="button" name="buscarplaca" id="buscarplaca" value="Buscar">
					</div>
					            <br>
				    <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="busquedaporplaca"  placeholder="Buscar" style="overflow:auto; width:100%;height: 100vh;">
					    		</div>
					        </fieldset>
				    </div>
			    </div>
			</div>

			<!--________________________________tercera consulta_____boton Tres_______________________________-->

			<div id="clientar" style="display: none;">
			    <div class="col-lg-12">
			        <div class="col-lg-12">
			        	<h3>Búsqueda por propietario del vehículo<br> ( Digitar el número de cedula)</h3>
			                <label style="color: orange;">Consulta por usuario (Acción Busqueda).</label>
			                <input type="number" name="cedula" class="form-control" id="cedula" style="width: 100%; float: left;"/> 
			                <br>
	 		        </div>
			        <div class="col-lg-12">
					<br>
					<input type="button" name="buscarcedula" id="buscarcedula" value="Buscar">
					</div>  

					            <br>
				    <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="busquedaporusuario" placeholder="Buscar" style="overflow:auto; width:100%;height: 100vh;">
					    		</div>
					        </fieldset>
				    </div>
			    </div>
			</div>
			<!--________________________________ cuarta consulta_____boton Cuarto_______________________________-->

			<div id="fechaclientar" style="display: none;">
			        <div class="col-lg-12" style="width: 100%;">
			        	 <div class="col-lg-12">
			        		<h3>Consulta Usuarios Regitrados por fecha <br> ( Fecha de Registro Usuarios )</h3>
			                <label style="color: orange;">Consulta por Fecha Registro Usuario desde (Fecha inicial).</label>
			                <input type="date" name="desdeini" class="form-control" id="desdeini" style="width: 100%; float: left;"/> 
			                <label style="color: orange;">Consulta por Fecha Registro Ususario hasta (Fecha final).</label>
			                <input type="date" name="hastafin" class="form-control" id="hastafin" style="width: 100%; float: left;"/> 
			           	</div>

	 		        
	 		        <div class="col-lg-12">
							<br>
							<input type="button" name="buscarfechados" id="buscarfechados" value="Buscar">
					         <br>
					    <div class="col-lg-12">
						        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
						        	<br>
						    		<div class="registros" id="busquedaporfechausuario" placeholder="Buscar" style="overflow:auto; width:100%;height: 100vh;">
						    		</div>
						        </fieldset>
					    </div>
			    	</div>
			    </div>
			</div>

			<!--________________________________ quinta consulta_____boton quinto_______________________________-->
			<div id="cantidar" style="display: none;">
			    <div class="col-lg-12">
			       
      				<div class="col-lg-9 table-responsive " id="div2" style=" width: 100%;"><!--se nombra la clase columna long tipo 9 bootrap tabla reponsive o adaptable con id2 para el llamdo en el script de ocultar secciones de pagina-->
      				<h2>Cantidad de Usuarios <br>(Propietarios, Arrendatarios y Administrativos)</h2> 
		 			<?php  //finalizacion del comando para la variable this
	                    foreach($consultacantidaduser as $key=>$value) { // se manda a llamar la variable que toma la informacion en este caso informa y hace un recorrido de la informacion en forma de array de lo que esta en el value mostrando datos la inforacion es extraida de la variable informa que esta en el controlador con una query.
	                    //$cedulausuarios=$value["cedula"]; // se asigna la variable que se quiere mostrar
		                $cantidad=$value["cantidad_usuarios"]; // se asigna la variable que se quiere mostrar
		                $nombreasignado=$value["nombre_rol"]; // se asigna la variable que se quiere mostrar
		                  //  $observacionesusuarios=$value["observaciones"];
		             ?>
			             <div class="col-lg-6">
			            	<h3 style="color: orange;">Nombre Rol</h3>
		               		<label><?php echo $nombreasignado?></label>
			            </div>
		            	<div class="col-lg-6">
		                	<h3 style="color: orange;">Cantidad Roles</h3>
		                	<label><?php echo $cantidad?></label>
			            </div>
                    <?php
	                    }
		            ?>
      				</div>
      				
      				<div class="col-lg-9 table-responsive " id="div2" style=" width: 100%;"><!--se nombra la clase columna long tipo 9 bootrap tabla reponsive o adaptable con id2 para el llamdo en el script de ocultar secciones de pagina-->
					<h2>Cantidad de Vehículos <br>(Carros y Motocicletas)</h2> 
		 			<?php  //finalizacion del comando para la variable this
	                    foreach($consultacantidadveh as $key=>$value) { // se manda a llamar la variable que toma la informacion en este caso informa y hace un recorrido de la informacion en forma de array de lo que esta en el value mostrando datos la inforacion es extraida de la variable informa que esta en el controlador con una query.
	                    //$cedulausuarios=$value["cedula"]; // se asigna la variable que se quiere mostrar
		                $cantidadve=$value["cantidad_vehiculos"]; // se asigna la variable que se quiere mostrar
		                $tipo=$value["tipo"]; // se asigna la variable que se quiere mostrar
		                  //  $observacionesusuarios=$value["observaciones"];
		             ?>
			             <div class="col-lg-6">
			            	<h3 style="color: orange;">Vehículo Tipo</h3>
		               		<label><?php echo $tipo?></label>
			            </div>
		            	<div class="col-lg-6">
		                	<h3 style="color: orange;">Cantidad Tipo</h3>
		                	<label><?php echo $cantidadve?></label>
			            </div>
                    <?php
	                    }

		            ?>
		           
      				</div>

			    </div>
			</div>
			<!--________________________________ sexta consulta_____boton sexto_______________________________-->
			<div id="tipar" style="display: none;">
			    <div class="col-lg-12">
			        <div class="col-lg-12">
			        
			                <label style="color: orange;">Consulta por Tipo Usuario <br>  (ARRENDATARIO,ADMINISTRADOR,OPERADOR,PROPIETARIO,VISITANTE Y SUPERUSER).</label>
			                <input type="text" name="tipo" class="form-control" id="tipo" style="width: 100%; float: left;"/> 
	 		        </div>
	 		         <div class="col-lg-12">
					        <br>
							<input type="button" name="buscartipados" id="buscartipados" value="Buscar" >
					        <br>
					    <div class="col-lg-12">
						        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
						        	<br>
						        	<h2>TIPO DE USUARIOS (Clasificación)</h2>
						    		<div class="registros" id="busquedaportipo" placeholder="Buscar" style="overflow: auto; width:100%;height: 400px">
						    		</div>
						        </fieldset>
					    </div>
					 </div>
			    </div>
			</div>
			<!--________________________________ septima consulta_____boton septimo_______________________________-->
			<div id="fechasolicitar" style="display: none;">
			    <div class="col-lg-12">
			        <div class="col-lg-8">
			                <label style="color: orange;">Consulta por Fecha Inicial Solicitud PQRS (Acción Busqueda).</label>
			                <input type="date" name="fechasolicitud" class="form-control" id="fechasolicitud" style="width: 100%; float: left;"/>
			                <label style="color: orange;">Consulta por Fecha Final Solicitud PQRS (Acción Busqeuda).</label>
			                <input type="date" name="fechasolicitudDos" class="form-control" id="fechasolicitudDos" style="width: 100%; float: left;"/> 
	 		        </div>
					            <br>
				    <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="busquedaporfechasoli" placeholder="Buscar" style="overflow: auto; width:100%;height: auto;">
					    		</div>
					        </fieldset>
				    </div>
			    </div>
			</div>
			<!--________________________________ octava consulta_____boton Octavo______________________________-->
			<div id="solicitaruser" style="display: none;">
			    <div class="col-lg-12">
			        <div class="col-lg-8">
			                <label style="color: orange;">Consulta por Cedula Usuario (Acción Busqueda).</label>
			                <input type="text" name="cedulas" class="form-control" id="cedulas" style="width: 100%; float: left;"/> 
	 		        </div>
					            <br>
				    <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="busquedaporcedulasolicitud" placeholder="Buscar" style="overflow: auto; width:100%;height: auto;">
					    		</div>
					        </fieldset>
				    </div>
			    </div>
			</div>
		</section>
		</div>
	</div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/java.js""></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/skel.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/util.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
<script>//---------------------script para ocultar campos por botones-------
	       $(".fechamos").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Por Fecha'){
                        $("#fechar").css("display", "block");
                        $("#plaquear").css("display", "none");
                        $("#clientar").css("display", "none");
                        $("#fechaclientar").css("display", "none");
                        $("#cantidar").css("display", "none");
                        $("#tipar").css("display", "none");
                        $("#fechasolicitar").css("display", "none");
                        $("#solicitaruser").css("display", "none");
                        
                       }
        	});
           $(".plaqueados").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Por Placa'){
                        $("#fechar").css("display", "none");
                        $("#plaquear").css("display", "block");
                        $("#clientar").css("display", "none");
                        $("#fechaclientar").css("display", "none");
                        $("#cantidar").css("display", "none");
                        $("#tipar").css("display", "none");
                        $("#fechasolicitar").css("display", "none");
                        $("#solicitaruser").css("display", "none");
                        
                       }
        	});
          $(".clientelas").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Por Usuario'){
                        $("#fechar").css("display", "none");
                        $("#plaquear").css("display", "none");
                        $("#clientar").css("display", "block");
                         $("#fechaclientar").css("display", "none");
                        $("#cantidar").css("display", "none");
                        $("#tipar").css("display", "none");
                         $("#fechasolicitar").css("display", "none");
                        $("#solicitaruser").css("display", "none");

                       }
        	});
          //------------ segunda seccion---------------------------------------------
          $(".fechareg").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Fecha Registrado'){
                        $("#fechar").css("display", "none");
                        $("#plaquear").css("display", "none");
                        $("#clientar").css("display", "none");
                         $("#fechaclientar").css("display", "block");
                        $("#cantidar").css("display", "none");
                        $("#tipar").css("display", "none");
                         $("#fechasolicitar").css("display", "none");
                        $("#solicitaruser").css("display", "none");

                       }
        	});
          $(".cantidades").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Cantidad Usuarios'){
                        $("#fechar").css("display", "none");
                        $("#plaquear").css("display", "none");
                        $("#clientar").css("display", "none");
                         $("#fechaclientar").css("display", "none");
                        $("#cantidar").css("display", "block");
                        $("#tipar").css("display", "none");
                         $("#fechasolicitar").css("display", "none");
                        $("#solicitaruser").css("display", "none");

                       }
        	});
          $(".cargos").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Tipo Usuario'){
                        $("#fechar").css("display", "none");
                        $("#plaquear").css("display", "none");
                        $("#clientar").css("display", "none");
                         $("#fechaclientar").css("display", "none");
                        $("#cantidar").css("display", "none");
                        $("#tipar").css("display", "block");
                         $("#fechasolicitar").css("display", "none");
                        $("#solicitaruser").css("display", "none");
                       }
        	});
          //---------------- tercera Seccion---------------------------------
          $(".fechaspqrs").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Fecha Solicitud'){
                        $("#fechar").css("display", "none");
                        $("#plaquear").css("display", "none");
                        $("#clientar").css("display", "none");
                         $("#fechaclientar").css("display", "none");
                        $("#cantidar").css("display", "none");
                        $("#tipar").css("display", "none");
                         $("#fechasolicitar").css("display", "block");
                        $("#solicitaruser").css("display", "none");

                       }
        	});
          $(".solicitudpqrs").click(function(evento){
                      var valor = $(this).val();
                      if(valor == 'Solicitud del Usuario'){
                         $("#fechar").css("display", "none");
                        $("#plaquear").css("display", "none");
                        $("#clientar").css("display", "none");
                         $("#fechaclientar").css("display", "none");
                        $("#cantidar").css("display", "none");
                        $("#tipar").css("display", "none");
                         $("#fechasolicitar").css("display", "none");
                        $("#solicitaruser").css("display", "block");

                       }
        	});
  //-------------------------------------- ajax consultas Uno---------------------------------
		if ('#desde'!='' && 'hasta'!='') {
		          function obtener_registros_uno(desde,hasta) // inicio de la funcion obtener registros de la tabla clientes
		          {
		            $.ajax({ // inicio de ajax 
		              url :'consultaporfecha', // se acciona la ubicacion del archivo de consulta
		              type : 'get', // se indica que tipo de metodo sera
		              data : { desde:desde,hasta:hasta }, // se indica la base a la cual va dirigida la extraccion
		              })
		            .done(function(resultadosA){ // estrae la informacion valida y la envia a la tabla resultados del div
		              $("#busquedaporfechasuno").html(resultadosA);
		            })
		          }
		         $('#buscarfecha').click(function(){ //enviamos la funcion de un click e el boton
					var desde,hasta; // delcaramos las variables a utilizar
					desde=$('#desde').val() // el campo del input se evalua y lo que tenga se asigna a la variable
					hasta=$('#hasta').val()
		   	 		obtener_registros_uno(desde,hasta);
		   	 		});
		 }
    //-------------------------------------- ajax consultas Dos ---------------------------------
	    if ('#placas'!='') {
	          function obtener_registros_dos(placas) // inicio de la funcion obtener registros de la tabla clientes
	          {
	            $.ajax({ // inicio de ajax 
	              url :'consultaplaca', // se acciona la ubicacion del archivo de consulta
	              type : 'get', // se indica que tipo de metodo sera
	              data : { placas:placas }, // se indica la base a la cual va dirigida la extraccion
	              })
	            .done(function(resultadosA){ // estrae la informacion valida y la envia a la tabla resultados del div
	              $("#busquedaporplaca").html(resultadosA);
	            })
	          }
	         $('#buscarplaca').click(function(){ //enviamos la funcion de un click e el boton
				var placas; // delcaramos las variables a utilizar
				placas=$('#placas').val() // el campo del input se evalua y lo que tenga se asigna a la variable
				
	   	 		obtener_registros_dos(placas);
	   	 		});
	    }
	//------------------------------------ajax consultas tres-----------------------------------
		if ('#cedula'!='') {
	          function obtener_registros_tres(cedula) // inicio de la funcion obtener registros de la tabla clientes
	          {
	            $.ajax({ // inicio de ajax 
	              url :'consultacedulas', // se acciona la ubicacion del archivo de consulta
	              type : 'get', // se indica que tipo de metodo sera
	              data : { cedula:cedula }, // se indica la base a la cual va dirigida la extraccion
	              })
	            .done(function(resultadosA){ // estrae la informacion valida y la envia a la tabla resultados del div
	              $("#busquedaporusuario").html(resultadosA);
	            })
	          }
	         $('#buscarcedula').click(function(){ //enviamos la funcion de un click e el boton
				var cedula; // delcaramos las variables a utilizar
				cedula=$('#cedula').val() // el campo del input se evalua y lo que tenga se asigna a la variable
	   	 		obtener_registros_tres(cedula);
	   	 		});
	    }
    //------------------------------------ ajax consulta cuatro---------------------------------
    	if ('#desdeini'!='' && 'hastafin'!='') {
		          function obtener_registros_cuatro(desdeini,hastafin) // inicio de la funcion obtener registros de la tabla clientes
		          {
		            $.ajax({ // inicio de ajax 
		              url :'consultaporfechados', // se acciona la ubicacion del archivo de consulta
		              type : 'get', // se indica que tipo de metodo sera
		              data : { desdeini:desdeini,hastafin:hastafin }, // se indica la base a la cual va dirigida la extraccion
		              })
		            .done(function(resultadosA){ // estrae la informacion valida y la envia a la tabla resultados del div
		              $("#busquedaporfechausuario").html(resultadosA);
		            })
		          }
		         $('#buscarfechados').click(function(){ //enviamos la funcion de un click e el boton
					var desdeini,hastafin; // delcaramos las variables a utilizar
					desdeini=$('#desdeini').val() // el campo del input se evalua y lo que tenga se asigna a la variable
					hastafin=$('#hastafin').val()
		   	 		obtener_registros_cuatro(desdeini,hastafin);
		   	 		});
		}
	//------------------------------------ajax consulta quinta se hace por modelo-------------------------------
	
	//------------------------------------ ajax consulta seis---------------------------------
	    if ('#tipo') {
	          function obtener_registros_tres(tipo) // inicio de la funcion obtener registros de la tabla clientes
	          {
	            $.ajax({ // inicio de ajax 
	              url :'consultatipos', // se acciona la ubicacion del archivo de consulta
	              type : 'get', // se indica que tipo de metodo sera
	              data : {tipo:tipo}, // se indica la base a la cual va dirigida la extraccion
	              })
	            .done(function(resultadosA){ // estrae la informacion valida y la envia a la tabla resultados del div
	              $("#busquedaportipo").html(resultadosA);
	            })
	          }
	         $('#buscartipados').click(function(){ //enviamos la funcion de un click e el boton
				var tipo;
				tipo=$('#tipo').val()
	   	 		obtener_registros_tres(tipo);
	   	 		});
	     }
	  
</script>
