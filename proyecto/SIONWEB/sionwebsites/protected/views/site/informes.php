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
			<?php // esto son las migas de pan
				$this->pageTitle=Yii::app()->name . ' - Gestión Reportes';
				$this->breadcrumbs=array(
					'Gestión Reportes',
					
				);
			?>
		<section>
			<h1 style="text-align: center;color:#2a7ab8;">REPORTES Y CONSULTAS </h1>
			<h6>Aquí el usuario administrador podra realizar las consultas pertienente deacuerdo al infromación que necesite, los reportes que se generan son generales, para manipulación del administrador.</h6>
			<!--____________________________fielset_______________________-->
			<fieldset style="border: 1px solid #b4b3b3;">
				<div class="col-lg-8">
					<h2>Salidas y Entradas Vehículos <br>(<label style="color:#2a7ab8;">Generación de Reportes</label>)</h2>
					<br>
				</div>
				<div class="col-lg-4">
					<br>
					<input style="width: 100% ;" type="submit" name="acciones" value="Por Fecha" class="fechamos btn-primary" title="Busqueda por Rango de fechas salida y entradas"><br>
					<input style="width: 100%;" type="submit" name="acciones" value="Por Placa" class="plaqueados btn-primary" title="Busqueda por Numero de placa"><br>
					<input style="width: 100%;" type="submit" name="acciones" value="Por Usuario" class="clientelas btn-primary" title="Busqueda por Numero de Cedula."><br>
					<br>
				</div>
			</fieldset>
			<!--____________________________fielset_______________________-->
			<fieldset style="border: 1px solid #b4b3b3;">
				<div class="col-lg-8">
					<h2>Usuarios <br>(<label style="color:#2a7ab8;">Generación de Reportes</label>)</h2>
					<br>
				</div>
				<div class="col-lg-4">
					<br>
					<input style="width: 100%;" type="submit" name="acciones" value="Fecha Registrado" class="fechareg btn-primary" title="Busqueda por fecha de registro del usuario."><br>
					<input style="width: 100%;" type="submit" name="acciones" value="Cantidad Usuarios" class="cantidades btn-primary" title=" Cantidad total de usuarios registrados y cantidad de vehiculos."><br>
					<input style="width: 100%;" type="submit" name="acciones" value="Tipo Usuario" class="cargos btn-primary" title="Busqueda por tipo de usuario o Rol."><br>
					<br>
				</div>
			</fieldset>
			<!--____________________________fielset_______________________-->
			<fieldset style="border: 1px solid #b4b3b3;">
				<div class="col-lg-8">
					<h2>PQRS Generados <br>(<label style="color:#2a7ab8;">Generación de Reportes</label>)</h2>
					<br>
				</div>
				<div class="col-lg-4">
					<br>
					<input style="width: 100%;" type="submit" name="acciones" value="Fecha Solicitud" class="fechaspqrs btn-primary" title=" Busqueda por un rango de fecha del PQRS"><br>
					<input style="width: 100%;" type="submit" name="acciones" value="Solicitud del Usuario" class="solicitudpqrs btn-primary" title="Busqueda por identifiación segun el usuario"><br>
					<br>
				</div>
			</fieldset>
			<!--____________________________ Titulo tabla _______________________-->
			<div class="col-lg-12">
				<h3 style="text-align: center;color:#2a7ab8;" >TABLA DE REPORTES INFORMACIÓN Y VERIFICACIÓN DE DATOS</h3>	
				
			</div>
			<hr style="width: 100%;">
		
			<!--___________________________________primer consulta___boton1__________________________________-->
			<div id="fechar" style="display: block;">
			    <div class="col-lg-12">
				    <div class="col-lg-12">
						<h2>Vehículos</h2>
				        <h3>Fecha de ingreso y salida de vehiculos</h3>
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
						<br>
						<h4>Exportar Reporte General</h4>
						<div class="col-lg-3">
						<!--?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/excel.png","",array("Gestionvehiculos","excel"=>1),array("style"=>"background-color: green; color: white;","class"=>"btn"))); ?-->
						<?php echo CHtml::link("Exportar a Excel",array("Gestionvehiculos","excel"=>1),array("style"=>"background-color: green; color: white; width:150px;","class"=>"btn")); ?>
						</div>
						<div class="col-lg-3">
						<?php echo CHtml::link("Exportar a PDF",array("generarpdf"),array("title"=>"Exportar a PDF","style"=>"background-color: red; color: white; width:150px;","class"=>"btn","target"=>"_blank")); ?>
						</div>
					</div>
				    <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="busquedaporfechasuno" placeholder="Buscar" style="overflow:auto; width:100%;height: 500px;">
					    			<style type="text/css">
									#container7 {
										
										width: 100%;
										height: 400px;
										margin: 0 auto
									}
									</style>
									<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/highcharts.js"></script>
									<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/modules/series-label.js"></script>
									<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/modules/exporting.js"></script>
									<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/modules/export-data.js"></script>

									<div id="container7"></div>



											<script type="text/javascript">

									Highcharts.chart('container7', {

									    title: {
									        text: 'Graica de entradas y salidas por vehículo'
									    },

									    subtitle: {
									        text: 'SION: www.sionwebsites.com'
									    },

									    yAxis: {
									        title: {
									            text: 'Cantidad de Entradas y Salidas'
									        }
									    },
									    legend: {
									        layout: 'vertical',
									        align: 'left',
									        verticalAlign: 'middle'
									    },
									   
									    plotOptions: {

									        series:
									         {
									        	
									            pointStart:  0
									    
									        }
									        
									    },
									 
									    series: [
									    <?php 
											foreach($consultacantingresal AS $key=>$mostrar){
										?>
									    {
									    
									        name: '<?php echo $mostrar['vehiculos_placa']; ?>',

									        data: [
											 <?php echo $mostrar['cantidad'] ?>,
											]
										 
									    },
									    <?php } ?>
									   
									    ],
									    

									    responsive: {
									        rules: [{
									            condition: {
									                maxWidth: 500
									            },
									            chartOptions: {
									                legend: {
									                    layout: 'horizontal',
									                    align: 'center',
									                    verticalAlign: 'bottom'
									                }
									            }
									        }]
									    }

									});
									</script>
							    	
					    		</div>
					    		<div class="registros" id="busquedaporfechasuno" placeholder="Buscar" style="overflow:auto; width:100%;height: 500px;">
					    		<table class='table table-hover'>
				                    <thead>
				                    <tr>
				                    <th class=columna>Fecha Ingreso</th>
				                    <th class=columna>Fecha Salida</th>
				                    <th class=columna>Punto de Parqueo</th>
				                    <th class=columna>Placa</th>
				                    </tr>
				                   	</thead>
				                   	<tbody>
				                   	<tr>
						 			<?php  //finalizacion del comando para la variable this
					                    foreach($consultalistacontrol as $key=>$value) { 
					                    $fechaingreso=$value["fecha_ingreso"]; // se asigna la variable que se quiere mostrar
						                $fechasalida=$value["fecha_salida"];
						                $puntoparqueo=$value["nombre_punto"];
						                $placavehi=$value["vehiculos_placa"];

						             ?>
						               	<td class=columna style='font-weight:normal;'><?php echo $fechaingreso?></td>
						                <td class=columna style='font-weight:normal;'><?php echo $fechasalida?></td>
						                <td class=columna style='font-weight:normal;'><?php echo $puntoparqueo?></td>
						                <td class=columna style='font-weight:normal;'><?php echo $placavehi?></td>
						              
						            </tr>
				                    <?php
					                    }
						            ?>
						             </tbody>
						     	</table>
						     	</div>
					        </fieldset>
				    </div>
			    </div>
			</div>
			<!--________________________________segunda consulta_____boton Dos_______________________________-->
			<div id="plaquear" style="display: none;">
			    <div class="col-lg-12">
			        <div class="col-lg-12">
							<h2>Vehículos</h2>
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
						<h4>Exportar Excel o PDF Reporte General Vehículos</h4>	
					</div>
					<div class="col-lg-3">
						<!--?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/excel.png","",array("Gestionvehiculos","excel"=>1),array("style"=>"background-color: green; color: white;","class"=>"btn"))); ?-->
						<?php echo CHtml::link("Exportar a Excel",array("Gestionvehiculos","excel"=>1),array("style"=>"background-color: green; color: white; width:150px;","class"=>"btn")); ?>
					</div>
					<div class="col-lg-3">
						<?php echo CHtml::link("Exportar a PDF",array("generarpdf"),array("title"=>"Exportar a PDF","style"=>"background-color: red; color: white; width:150px;","class"=>"btn","target"=>"_blank")); ?>
					</div>
				</div>
				<div class="col-lg-12">
				    <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
				       	<br>
				 		<div class="registros" id="busquedaporplaca"  placeholder="Buscar" style="overflow:auto; width:100%;height: 100vh;">
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
			<!--/div-->

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
					<h4>Exportar Excel o PDF Reporte General Vehículos</h4>	
					</div>
					<div class="col-lg-3">
					<!--?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/excel.png","",array("Gestionvehiculos","excel"=>1),array("style"=>"background-color: green; color: white;","class"=>"btn"))); ?-->
					<?php echo CHtml::link("Exportar a Excel",array("Gestionvehiculos","excel"=>1),array("style"=>"background-color: green; color: white; width:150px;","class"=>"btn")); ?>
					</div>
					<div class="col-lg-3">
					<?php echo CHtml::link("Exportar a PDF",array("generarpdf"),array("title"=>"Exportar a PDF","style"=>"background-color: red; color: white; width:150px;","class"=>"btn","target"=>"_blank")); ?>
					</div>
					</div>
					            
				    <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="busquedaporusuario" placeholder="Buscar" style="overflow:auto; width:100%;height: 100vh;">
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
			<!--/div-->
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
								<h4>Exportar Excel o PDF Reporte General Usuarios</h4>	
								</div>
								<div class="col-lg-3">
								<!--?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/excel.png","",array("Gestionvehiculos","excel"=>1),array("style"=>"background-color: green; color: white;","class"=>"btn"))); ?-->
								<?php echo CHtml::link("Exportar a Excel",array("Gestionusuarios","excelusuarios"=>1),array("style"=>"background-color: green; color: white; width:150px;","class"=>"btn")); ?>
								</div>
								<div class="col-lg-3">
								<?php echo CHtml::link("Exportar a PDF",array("generarpdfuser",'useranme'=>'Residente'),array("title"=>"Exportar a PDF","style"=>"background-color: red; color: white; width:150px;","class"=>"btn","target"=>"_blank")); ?>
								</div>		 
						    <div class="col-lg-12">
							        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
							        	<br>
							    		<div class="registros" id="busquedaporfechausuario" placeholder="Buscar" style="overflow:auto; width:100%;height: 100vh;">
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
				</div>

			<!--________________________________ quinta consulta_____boton quinto_______________________________-->
				<div id="cantidar" style="display: none;">
				    <div class="col-lg-12">
	      				<div class="col-lg-12 table-responsive " id="div2" style=" width: 100%;">
			 			<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/highcharts.js"></script>
						<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/modules/exporting.js"></script>
						<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/modules/export-data.js"></script>
						<div id="container" style="height: 600px; max-width: 100%; margin: 0 auto"></div>
							<script type="text/javascript">

									Highcharts.chart('container', {
									    chart: {
									        plotBackgroundColor: null,
									        plotBorderWidth: null,
									        plotShadow: false,
									        type: 'pie'
									    },
									    title: {
									        text: 'Grafica Informativa de Personal: Menu exportación'
									    },
									    tooltip: {
									        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
									    },
									    plotOptions: {
									        pie: {
									            allowPointSelect: true,
									            cursor: 'pointer',
									            dataLabels: {
									                enabled: true,
									                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
									                style: {
									                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
									                }
									            }
									        }
									    },
									    series: [{
									        name: 'Personal de Timiza',
									        colorByPoint: true,
									        data: [
									        <?php 
												 foreach($consultacantidaduser as $key=>$mostrar) { 
						 
												  ?>
									        {
									            name: '<?php echo $mostrar['nombre_rol']; ?>',
									            y: <?php echo $mostrar['cantidad_usuarios']; ?>,
									            sliced: true,
									            selected: true
									        },
									    <?php } ?>
									        ]
									    }]
									});
							</script>
							 <table class='table table-hover'>
				                    <thead>
				                    <tr>
				                    <th class=columna>Nombre Rol</th>
				                    <th class=columna>Cantidad</th>
				                    </tr>
				                   	</thead>
				                   	<tbody>
				                   	<tr>
						 			<?php  //finalizacion del comando para la variable this
					                    foreach($consultacantidaduser as $key=>$value) { 
					                    $nombre_rol=$value["nombre_rol"]; // se asigna la variable que se quiere mostrar
						                $cantidad_usuarios=$value["cantidad_usuarios"];

						             ?>
						               	<td class=columna style='font-weight:normal;'><?php echo $nombre_rol?></td>
						                <td class=columna style='font-weight:normal;'><?php echo $cantidad_usuarios?></td>
						              
						            </tr>
				                    <?php
					                    }
						            ?>
						             </tbody>
						     </table>
	      				</div>

	      				
	      				<div class="col-lg-12 table-responsive " id="div2" style=" width: 100%;">

				 			<div class="col-lg-12 table-responsive " id="div2" style=" width: 100%;">
				 			<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/highcharts.js"></script>
							<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/modules/exporting.js"></script>
							<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/modules/export-data.js"></script>
							<div id="container2" style="height: 600px; max-width: 100%; margin: 0 auto"></div>
								<script type="text/javascript">

										Highcharts.chart('container2', {
										    chart: {
										        plotBackgroundColor: null,
										        plotBorderWidth: null,
										        plotShadow: false,
										        type: 'pie'
										    },
										    title: {
										        text: 'Grafica Informativa de vehiculos:Menu exportación'
										    },
										    tooltip: {
										        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
										    },
										    plotOptions: {
										        pie: {
										            allowPointSelect: true,
										            cursor: 'pointer',
										            dataLabels: {
										                enabled: true,
										                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
										                style: {
										                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
										                }
										            }
										        }
										    },
										    series: [{
										        name: 'Vehiculos de Timiza',
										        colorByPoint: true,
										        data: [
										        <?php 
													   foreach($consultacantidadveh as $key=>$mostrar) { 
							 
													  ?>
										        {
										            name: '<?php echo $mostrar['tipo']; ?>',
										            y: <?php echo $mostrar['cantidad_vehiculos']; ?>,
										            sliced: true,
										            selected: true
										        },
										    <?php } ?>
										        ]
										    }]
										});
								</script>
								 <table class='table table-hover'>
					                    <thead>
					                    <tr>
					                    <th class=columna>Tipo Vehículo</th>
					                    <th class=columna>Cantidad</th>
					                    </tr>
					                   	</thead>
					                   	<tbody>
					                   	<tr>
							 			<?php  //finalizacion del comando para la variable this
						                    foreach($consultacantidadveh as $key=>$value) { 
						                    $tipo=$value["tipo"]; // se asigna la variable que se quiere mostrar
							                $cantidad_veh=$value["cantidad_vehiculos"];

							             ?>
							               	<td class=columna style='font-weight:normal;'><?php echo $tipo?></td>
							                <td class=columna style='font-weight:normal;'><?php echo $cantidad_veh?></td>
							              
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
			<!--________________________________ sexta consulta_____boton sexto_______________________________-->
			<div id="tipar" style="display: none;">
			    <div class="col-lg-12">
			        <div class="col-lg-12">
			        
			            <label style="color: orange;">Consulta por Tipo Usuario <br>  (ARRENDATARIO,ADMINISTRADOR,OPERADOR,PROPIETARIO,VISITANTE Y SUPERUSER).</label>
			            <!--input type="text" name="tipo" class="form-control" id="tipo" style="width: 100%; float: left;"/--> 
			            <select name="tipo" class="form-control" id="tipo" style="width: 100%; float: left;">
			            	<option value="Administrador">Administrador</option>
			            	<option value="Operador">Operador</option>
			            	<option value="Residente">Residente</option>
			            	<option value="Propietario">Propietario</option>
			            </select>
	 		        </div>
	 		        <div class="col-lg-12">
					    <br>
						<input type="button" name="buscartipados" id="buscartipados" value="Buscar" >
						<br>
					    <div class="col-lg-12">
							<h4>Exportar Excel o PDF Reporte General Usuarios</h4>	
						</div>
						<div class="col-lg-4">
							<!--?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/excel.png","",array("Gestionvehiculos","excel"=>1),array("style"=>"background-color: green; color: white;","class"=>"btn"))); ?-->
						<?php echo CHtml::link("Exportar a Excel",array("Gestionusuarios","excelusuarios"=>1),array("style"=>"background-color: green; color: white; width:150px;","class"=>"btn")); ?>
						</div>
						<div class="col-lg-4">
							<?php echo CHtml::link("Exportar a PDF",array("generarpdfuser",'useranme'=>'Residente'),array("title"=>"Exportar a PDF","style"=>"background-color: red; color: white; width:150px;","class"=>"btn","target"=>"_blank")); ?>
						</div>	
					    <div class="col-lg-12">
						    <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
						       	<br>
						       	<h2>TIPO DE USUARIOS (Clasificación)</h2>
						   		<div class="registros" id="busquedaportipo" placeholder="Buscar" style="overflow: auto; width:100%;height: 400px">
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
			</div>
			<!--________________________________ septima consulta_____boton septimo_______________________________-->
			<div id="fechasolicitar" style="display: none;">
			    <div class="col-lg-12">
			        <div class="col-lg-12">
			                <label style="color: orange;">Consulta por Fecha Inicial Solicitud PQRS (Acción Busqueda).</label>
			                <input type="date" name="fechasolicitudini" class="form-control" id="fechasolicitudini" style="width: 100%; float: left;"/>
			                <label style="color: orange;">Consulta por Fecha Final Solicitud PQRS (Acción Busqeuda).</label>
			                <input type="date" name="fechasolicitudfin" class="form-control" id="fechasolicitudfin" style="width: 100%; float: left;"/> 

	 		        </div>
	               
	                <div class="col-lg-12">
	                	 <br>
						<input type="button" name="buscarfechadospqrs" id="buscarfechadospqrs" value="Buscar" >
						 <br>
						 <div class="col-lg-12">
							<h4>Exportar Excel o PDF Reporte General Usuarios</h4>	
						</div>
						<div class="col-lg-4">
							<!--?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/imagenes/excel.png","",array("Gestionvehiculos","excel"=>1),array("style"=>"background-color: green; color: white;","class"=>"btn"))); ?-->
						<?php echo CHtml::link("Exportar a Excel",array("Pqrsadmin","excelpqrs"=>1),array("style"=>"background-color: green; color: white; width:150px;","class"=>"btn")); ?>
						</div>
						<div class="col-lg-4">
							<?php echo CHtml::link("Exportar a PDF",array("generarpqrsPdf",'idestadopqrs'!= 4),array("title"=>"Exportar a PDF","style"=>"background-color: red; color: white; width:150px;","class"=>"btn","target"=>"_blank")); ?>
						</div>	
					</div>
		           
				    <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="busquedaporfechasoli" placeholder="Buscar" style="overflow: auto; width:100%;height: auto;">
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
			<!--________________________________ octava consulta_____boton Octavo______________________________-->
			<div id="solicitaruser" style="display: none;">
			    <div class="col-lg-12">
			        <div class="col-lg-8">
			                <label style="color: orange;">Consulta por Cedula Usuario (Acción Busqueda).</label>
			                <input type="text" name="cedulas" class="form-control" id="cedulas" style="width: 100%; float: left;"/> 
	 		        </div>
	 		        <div class="col-lg-12">
	                	 <br>
							<input type="button" name="buscarcedulapqrs" id="buscarcedulapqrs" value="Buscar" >
						 <br>
						<div class="col-lg-12">
							<h4>Exportar Excel o PDF Reporte General Usuarios</h4>	
						</div>
						<div class="col-lg-4">
							<?php echo CHtml::link("Exportar a Excel",array("Pqrsadmin","excelpqrs"=>1),array("style"=>"background-color: green; color: white; width:150px;","class"=>"btn")); ?>
						</div>
						<div class="col-lg-4">
							<?php echo CHtml::link("Exportar a PDF",array("GenerarpqrsPdf",'idpqrs'!= 4),array("title"=>"Exportar a PDF","style"=>"background-color: red; color: white; width:150px;","class"=>"btn","target"=>"_blank")); ?>
						</div>	
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
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/java.js"></script>
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
	 //------------------------------------ ajax consulta SIETE---------------------------------
	    if ('#fechasolicitudini'!='' && 'fechasolicitudfin'!='') {
		          function obtener_registros_siete(fechasolicitudini,fechasolicitudfin) // inicio de la funcion obtener registros de la tabla clientes
		          {
		            $.ajax({ // inicio de ajax 
		              url :'consultaporfechapqrs', // se acciona la ubicacion del archivo de consulta
		              type : 'get', // se indica que tipo de metodo sera
		              data : { fechasolicitudini:fechasolicitudini,fechasolicitudfin:fechasolicitudfin }, // se indica la base a la cual va dirigida la extraccion
		              })
		            .done(function(resultadosA){ // estrae la informacion valida y la envia a la tabla resultados del div
		              $("#busquedaporfechasoli").html(resultadosA);
		            })
		          }
		         $('#buscarfechadospqrs').click(function(){ //enviamos la funcion de un click e el boton
					var fechasolicitudini,fechasolicitudfin; // delcaramos las variables a utilizar
					fechasolicitudini=$('#fechasolicitudini').val() // el campo del input se evalua y lo que tenga se asigna a la variable
					fechasolicitudfin=$('#fechasolicitudfin').val()
		   	 		obtener_registros_siete(fechasolicitudini,fechasolicitudfin);
		   	 		});
		}
	 //------------------------------------ ajax consulta OCHO---------------------------------
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
