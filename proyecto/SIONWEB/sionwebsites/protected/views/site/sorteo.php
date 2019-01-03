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
		    		<h1>Acción del sorteo</h1>
		    		<select name="cedula" class="form-control" id="cedula">
		    			<option value="Sortear">Sortear</option>
		    			<option value="Limpiar">Limpiar</option>
		    			<option value="Guardar">Guardar</option>
		    		</select>
		    		<br>
					<input type="submit" name="acciones" value="ejecutar" class="guardamos btn-primary" style="border: 1px solid #fd0617">
	    		</div>
	    		<div id="modificado" style="display: none;">
			        <div class="col-lg-12">
			           
				        <div class="col-lg-12">
					        <fieldset style="border: 1px solid white;border-radius: 5px 5px;">
					        	<br>
					    		<div class="registros" id="registrosorteo" placeholder="Buscar" style="overflow: auto; width:100%;height: 800px;" >
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
<script type="text/javascript">
	
	          function obtener_registros_dos() // inicio de la funcion obtener registros de la tabla clientes
	          {
	            $.ajax({ // inicio de ajax 
	              url :'consultaplaca', // se acciona la ubicacion del archivo de consulta
	              type : 'get', // se indica que tipo de metodo sera
	              data : {}, // se indica la base a la cual va dirigida la extraccion
	              })
	            .done(function(resultadosA){ // estrae la informacion valida y la envia a la tabla resultados del div
	              $("#registrosorteo").html(resultadosA);
	            })
	          }
	         $('#sorteos').click(function(){ //enviamos la funcion de un click e el boton
				
	   	 		obtener_registros_dos();
	   	 		});
	    
</script>