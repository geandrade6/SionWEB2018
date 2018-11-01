<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			/*'db'=>array(
				'connectionString'=>'sqlite:'.dirname(__FILE__).'/../data/blog-test.db',
			),
			// uncomment the following to use a MySQL database
			
			'db'=>array(
				'connectionString' => 'mysql:host=localhost;dbname=blog-test',
				'emulatePrepare' => true,
				'username' => 'root',
				'password' => '',
				'charset' => 'utf8',
			),
			*/
            /*'db'=>array(
			'connectionString' => 'sqlite:protected/data/blog.db',
			'tablePrefix' => 'tbl_',
		),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=blog',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),
		*/
        
		'db'=>array(
'class'=>'CDbConnection',
'connectionString'=>'mssql:localhost;dbname=camegovp_sionweb2',
'username'=>'root',
'password'=>'',
'charset' => 'utf8',
),

		),
	)
);