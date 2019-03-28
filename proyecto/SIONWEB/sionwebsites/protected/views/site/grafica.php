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
				$this->pageTitle=Yii::app()->name . ' - Graficos Reportes';
				$this->breadcrumbs=array(
					'Graficos Reportes',
					
				);
			?>
		<section>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/highcharts.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/modules/exporting.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/modules/export-data.js"></script>
		<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
			<script type="text/javascript">

					Highcharts.chart('container', {
					    chart: {
					        plotBackgroundColor: null,
					        plotBorderWidth: null,
					        plotShadow: false,
					        type: 'pie'
					    },
					    title: {
					        text: 'Grafica Informactiva de Personal Timiza PARK-LOT, 2019'
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
								  $link=mysqli_connect('localhost','root','','camegovp_sionweb2');
								  $sql="SELECT count(*) cantidad_usuarios, R.nombre_rol
    									FROM roles R
    									INNER JOIN usuarios U 
    									ON U.roles_id = R.id 
    									GROUP BY R.nombre_rol ASC";
								  $result=mysqli_query($link,$sql);

								  while($mostrar=mysqli_fetch_array($result)){
		 
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
		     					<?php 
								  $link=mysqli_connect('localhost','root','','camegovp_sionweb2');
								  $sql="SELECT count(*) cantidad_usuarios, R.nombre_rol
    									FROM roles R
    									INNER JOIN usuarios U 
    									ON U.roles_id = R.id 
    									GROUP BY R.nombre_rol ASC";
								  $result=mysqli_query($link,$sql);

								  while($mostrar=mysqli_fetch_array($result)){
		 
								  ?>
								<tbody>
									
									<td><?php echo $mostrar['nombre_rol']; ?></td>
									<td><?php echo $mostrar['cantidad_usuarios']; ?></td>
									
								</tbody>

								<?php 
								}
								?>
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
