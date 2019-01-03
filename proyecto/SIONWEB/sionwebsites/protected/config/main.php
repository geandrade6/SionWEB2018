<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'TIMIZA PARK-LOT',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.extensions.coco.*',
        'application.extensions.notify.*',
        'application.vendor.excel.Classes.*',
        'ext.yii-bootstrap-calendar.*',
        'ext.yii-mail.YiiMailMessage',
        'ext.yii-elfinder.*',
	),

	'defaultController'=>'site', // definimos el sitio

	// application components
	'components'=>array(
		'authManager'=>array(
			'class'=>'CDbauthManager',
			'connectionID'=>'db',
		),
		'mail' => array(
                'class' => 'ext.yii-mail.YiiMail',
                'transportType'=>'smtp',
                'transportOptions'=>array(
                'host'=>'wnks.wnkserver1.com',
                'username'=>'administrador@sionwebsites.com',
                'password'=>'Directv..02',
                'port'=>'25',                       
                ),
                'viewPath' => 'application.views.mail',             
        ),
		        'ePdf' => array(
		 		'class' => 'ext.yii-pdf.EYiiPdf',
		 		'params' => array(
		 		'mpdf' => array(
		 		'librarySourcePath' => 'application.vendors.mpdf.*',
		 		'constants' => array(
		 		'_MPDF_TEMP_PATH' => Yii::getPathOfAlias('application.runtime'),
 		),
				 'class'=>'mpdf', // the literal class filename to be loaded from the vendors folder
				 /*'defaultParams' => array( // More info: http://mpdf1.com/manual/index.php?tid=184
				 'mode' => '', // This parameter specifies the mode of the new document.
				 'format' => 'A4', // format A4, A5, ...
				 'default_font_size' => 0, // Sets the default document font size in points (pt)
				 'default_font' => '', // Sets the default font-family for the new document.
				 'mgl' => 15, // margin_left. Sets the page margins for the new document.
				 'mgr' => 15, // margin_right
				 'mgt' => 16, // margin_top
				 'mgb' => 16, // margin_bottom
				 'mgh' => 9, // margin_header
				 'mgf' => 9, // margin_footer
				 'orientation' => 'P', // landscape or portrait orientation
				 )*/
	 	),
	 	),	
	 	),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),/*
		'db'=>array(
			'connectionString' => 'sqlite:protected/data/blog.db',
			'tablePrefix' => 'tbl_',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'class'=>'CDbConnection',
			'connectionString' => 'mysql:host=localhost;dbname=camegovp_sionweb2',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			//'tablePrefix' => 'tbl_',
		),
	
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'post/<id:\d+>/<title:.*?>'=>'post/view',
				'posts/<tag:.*?>'=>'post/index',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);