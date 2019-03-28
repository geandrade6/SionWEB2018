<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="es" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- blueprint CSS framework -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/estilos.css" media="screen, projection" />
		<!-- Icono del las paginas -->
		<link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/sion.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>assets/fonts/fontawesome-webfont.ttf" media="print" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" />
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>
	<body>
<div id="wrapper">
	<div id="main">	
		<div class="">
			<aside id="sidebar" class="col-lg-3" style="width:25em;">
				<div class="inner">
				<div id="logo"><h3><?php echo CHtml::encode(Yii::app()->name); ?></h3> <!--_____ traemos el nombre TIMIZA PARK-LOT desde el main de la carpeta config-->
		 			<img id="logs" style="width: 50px; margin-right: 100px; align: left" src='<?php echo Yii::app()->request->baseUrl; ?>/imagenes/sion.png'><!--_____ traemos la imagen desde    	
				la carpeta imagenes-->
				</div><!-- header -->
					<!--MENU SION NAV SUPERIOR-->
				<nav id="menu">
				<header class="major">
				
			
				<h2 style="color: black;">Menu</h2>
				</header>
				<div style="width: 100%;">
				<ul >
					<?php 
					if(Yii::app()->user->name == 'Administrador'){ ?>
					<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						
					array('label'=>'Salida y Entrada de Vehiculos', 'url'=>array('site/controldeacceso')),
					
					array('label'=>'Nuevo Evento', 'url'=>array('site/insertareventos')),
					array('label'=>'Gestión Usuarios', 'url'=>array('site/gestionusuarios')),
					array('label'=>'Gestión Vehículos', 'url'=>array('site/gestionvehiculos')),
					array('label'=>'Sorteo Parqueo', 'url'=>array('site/sorteo')),
					array('label'=>'Reportes', 'url'=>array('site/informes')),
					array('label'=>'Solicitudes', 'url'=>array('site/pqrsadmin')),
					array('label'=>'Eventos', 'url'=>array('site/eventos')),
					array('label'=>'salir('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>Yii::app()->user->isGuest),
					),
					)); ?>

					<?php }
					elseif(Yii::app()->user->name == 'Operador'){?>
						<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						
					array('label'=>'Salida y Entrada de Vehiculos', 'url'=>array('site/controldeacceso')),
					array('label'=>'Reportes', 'url'=>array('site/informes')),
					array('label'=>'Eventos', 'url'=>array('site/eventos')),
					array('label'=>'Sorteo del Mes','url'=>array('site/versorteos')),
					array('label'=>'Solicitudes', 'url'=>array('site/pqrsadmin')),
					array('label'=>'salir('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>Yii::app()->user->isGuest),
					),
					)); ?>

					<?php }
					elseif(Yii::app()->user->name == 'Residente'){?>
						<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						
					array('label'=>'Eventos', 'url'=>array('site/eventos')),
					array('label'=>'Contáctenos', 'url'=>array('site/contact')),
					array('label'=>'Acerca', 'url'=>array('site/about')),
					array('label'=>'Solicitudes', 'url'=>array('site/pqrs')),
					array('label'=>'Sorteo del Mes','url'=>array('site/versorteos')),
					array('label'=>'salir('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>Yii::app()->user->isGuest),

					),
					)); ?>
					<?php }
					else{ ?>
						<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						
					array('label'=>'Inicio Sesion','url'=>array('site/login')),
					array('label'=>'Eventos','url'=>array('site/eventos')),
					array('label'=>'Acerca','url'=>array('site/about')),
					array('label'=>'Contactenos','url'=>array('site/contact')),
					

					),
					)); ?>
					<?php } ?>

				</ul>
				<header class="major">
					<br>
				<h2>Gleria Timiza</h2>
				</header>
				<div class="mini-posts">
					<article>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/galeriapersonal" class="image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/imagenes/pic014.jpg" alt="" /></a>
						<p style="color: black;">Galería de los buenos momentos</p>
					</article>
					<article>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/eventos" class="image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/imagenes/pic015.jpg" alt="" /></a>
						<p style="color: black;">Galería de Nuestras Zonas publicas</p>
					</article>
					<article >
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/eventos" class="image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/imagenes/pic016.jpg" alt="" /></a>
						<p style="color: black;">Galeria de nuestro Personal</p>
					</article>

					<article id="container4" style="height: 15%; width: 100%; opacity: 0.9; border-radius:5%; background-color: white;"></article>
					<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/highcharts.js"></script>
					<script src="<?php echo Yii::app()->request->baseUrl; ?>/Highcharts/code/highcharts-more.js"></script>
					<script type="text/javascript">
					/**
					 * Get the current time
					 */
					function getNow() {
					    var now = new Date();
					    return {
					        hours: now.getHours() + now.getMinutes() / 60,
					        minutes: now.getMinutes() * 12 / 60 + now.getSeconds() * 12 / 3600,
					        seconds: now.getSeconds() * 12 / 60
					    };
					}
					/**
					 * Pad numbers
					 */
					function pad(number, length) {
					    // Create an array of the remaining length + 1 and join it with 0's
					    return new Array((length || 2) + 1 - String(number).length).join(0) + number;
					}
					var now = getNow();
					// Create the chart
					Highcharts.chart('container4', {
					    chart: {
					        type: 'gauge',
					        plotBackgroundColor: null,
					        plotBackgroundImage: null,
					        plotBorderWidth: 0,
					        plotShadow: false,
					        height: '100%'
					    },
					    credits: {
					        enabled: false
					    },
					    title: {
					        text: 'Hora Actual'
					    },
					    pane: {
					        background: [{
					            // default background
					        }, {
					            // reflex for supported browsers
					            backgroundColor: Highcharts.svg ? {
					                radialGradient: {
					                    cx: 0.5,
					                    cy: -0.4,
					                    r: 1.9
					                },
					                stops: [
					                    [0.5, 'rgba(91, 188, 205, 0.3)'],
					                    [0.5, 'rgba(110, 154, 109, 0.3)']
					                ]
					            } : null
					        }]
					    },
					    yAxis: {
					        labels: {
					            distance: -20
					        },
					        min: 0,
					        max: 12,
					        lineWidth: 0,
					        showFirstLabel: false,

					        minorTickInterval: 'auto',
					        minorTickWidth: 1,
					        minorTickLength: 5,
					        minorTickPosition: 'inside',
					        minorGridLineWidth: 0,
					        minorTickColor: '#95cfd7',

					        tickInterval: 1,
					        tickWidth: 2,
					        tickPosition: 'inside',
					        tickLength: 10,
					        tickColor: '#95cfd7',
					        title: {
					            text: 'SION',
					            style: {
					                color: 'grey',
					                fontWeight: 'normal',
					                fontSize: '8px',
					                lineHeight: '10px'
					            },
					            y: 10
					        }
					    },
					    tooltip: {
					        formatter: function () {
					            return this.series.chart.tooltipText;
					        }
					    },
					    series: [{
					        data: [{
					            id: 'hour',
					            y: now.hours,
					            dial: {
					                radius: '60%',
					                baseWidth: 4,
					                baseLength: '95%',
					                rearLength: 0
					            }
					        }, {
					            id: 'minute',
					            y: now.minutes,
					            dial: {
					                baseLength: '95%',
					                rearLength: 0
					            }
					        }, {
					            id: 'second',
					            y: now.seconds,
					            dial: {
					                radius: '100%',
					                baseWidth: 1,
					                rearLength: '20%'
					            }
					        }],
					        animation: true,
					        dataLabels: {
					            enabled: false
					        }
					    }]
					},
					    // Move
					    function (chart) {
					        setInterval(function () {

					            now = getNow();

					            if (chart.axes) { // not destroyed
					                var hour = chart.get('hour'),
					                    minute = chart.get('minute'),
					                    second = chart.get('second'),
					                    // run animation unless we're wrapping around from 59 to 0
					                    animation = now.seconds === 0 ?
					                        false : {
					                            easing: 'easeOutBounce'
					                        };
					                // Cache the tooltip text
					                chart.tooltipText =
					                    pad(Math.floor(now.hours), 2) + ':' +
					                    pad(Math.floor(now.minutes * 5), 2) + ':' +
					                    pad(now.seconds * 5, 2);
					                hour.update(now.hours, true, animation);
					                minute.update(now.minutes, true, animation);
					                second.update(now.seconds, true, animation);
					            }
					        }, 1000);
					    });
					/**
					 * Easing function from https://github.com/danro/easing-js/blob/master/easing.js
					 */
					Math.easeOutBounce = function (pos) {
					    if ((pos) < (1 / 2.75)) {
					        return (7.5625 * pos * pos);
					    }
					    if (pos < (2 / 2.75)) {
					        return (7.5625 * (pos -= (1.5 / 2.75)) * pos + 0.75);
					    }
					    if (pos < (2.5 / 2.75)) {
					        return (7.5625 * (pos -= (2.25 / 2.75)) * pos + 0.9375);
					    }
					    return (7.5625 * (pos -= (2.625 / 2.75)) * pos + 0.984375);
					};
				</script>
			</div>
			<div class=""> 
						
					<ul class="contact">
						<a href="https://login.live.com/" target="_black">administrador@sionwebsites.com</a>
						<li class="fa-phone">(+57) 317-264-6327</li>
						<li class="fa-home">Bogota, Colombia</li>
					</ul>
					<div id="footer" style="text-align: center;">
						<br>
						Copyright &copy; <?php echo date('Y'); ?> SION WEBSITES.<br/>
						Todos los derechos recervados.<br/>
						<!--?php echo Yii::powered(); ?-->
					</div><!-- footer -->
					</div>
				</div>
				</nav><!-- mainmenu -->
				</div>
			</aside>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
			<?php echo $content; ?>
		</div>
	</div>	
</div> 
	</body>
</html>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/java.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/skel.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/util.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>