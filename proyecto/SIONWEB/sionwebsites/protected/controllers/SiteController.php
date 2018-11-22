<?php

class SiteController extends Controller{
	public $layout='column1';
 	public $defaultAction = 'Site';
	/**
	 * Declares class-based actions.
	 */

	//squi inpedimos que se vaya a otra pagina a menos que inicie sesion
	 public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }
    
   public function accessRules() {
        return array(
           array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index','login','logout','eventos','insertareventos','gestionusuarios','contact','about'),'users' => array('*'),
            ),
             array('allow', // allow authenticated user to perform 'create' action
               'actions' => array('index'),
                'users' => array('@'),
            ),
            array('allow', // allow only the owner to perform 'view' 'update' 'delete' actions
                'actions' => array('view','insert','update','delete'),
                'expression' => array('ExampleController','allowOnlyOwner')
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin', 'foo', 'bar'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
                
            ), 
        );
    }
    
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

    /*public function actionSite()
	{
         /*$usuarios=new Visorinicios();
      $getUsuarios=$usuarios->getUsuarios(0,0);
     $this->render('visorinicios',array(
                    "usuarios"=>$getUsuarios
                   ));
        if (!defined('CRYPT_BLOWFISH')||!CRYPT_BLOWFISH)
			throw new CHttpException(500,"This application requires that PHP was compiled with Blowfish support for crypt().");

		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				//$this->redirect(Yii::app()->user->returnUrl);
                $this->redirect(array('site/home','option'=>'0','option2'=>'0'));
                
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}*/

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		if (!defined('CRYPT_BLOWFISH')||!CRYPT_BLOWFISH)
			throw new CHttpException(500,"This application requires that PHP was compiled with Blowfish support for crypt().");

		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	//_________________________________a partir de aqui empezamos nuestras acciones _______________________________________

	//seccion eventos
	public function actionEventos ()
	{
			$modelEventos = new Eventos();    
		
     		$consultaeventos = $modelEventos->getEventos(); // SE LLAMA LA ACCION PARA 
     		$consultaeventosDos = $modelEventos->getEventosDos(); // SE LLAMA LA ACCION PARA 
     		$consultaesteventos = $modelEventos->getEventosEstado();
            $this->render('eventos', array(//se renderiza la pagina
            "consultaesteventos"=>$consultaesteventos,
            "consultaeventos"=>$consultaeventos, // se renderiza la consula
            "consultaeventosDos"=>$consultaeventosDos, // se renderiza la consula
            "modelEventos"=>$modelEventos // se renderiza el modelo
            )
            ); // variable de asignacion modelo
	}
	//seccion insertareventos
	public function actionInsertareventos ()
	{
			$modelEventos = new Eventos();    
		    $titulo='';
		    $mensaje='';
		    $subtitulo='';
		    $submensaje='';
		   	$imagenes='';
		    $estado='';
			
        
       // aqui en adelante sale el error 500 de property not defined
    if(isset($_POST['Eventos'])){ // Modelo Eventos
            $modelEventos->attributes=$_POST['Eventos'];
        if( $modelEventos->validate()){ // valida el modelo y sus atributos
        	//atributos del modelo
        	$titulo=$modelEventos->titulo; 
            $mensaje=$modelEventos->mensaje;
            $subtitulo=$modelEventos->subtitulo; 
            $submensaje=$modelEventos->submensaje;
          	$imagenes=$modelEventos->imagenes;
            $estado=$modelEventos->idestadoeventos;
            //$filenamesource=yii::getpathOfAlias($alias);
           $tmpo=$modelEventos->setEventos($titulo,$mensaje,$subtitulo,$submensaje,$imagenes,$estado); // SE ENVIA LOS CAMPOS A LA ACCION DEL MODELO 
            $modelEventos->unsetAttributes();// limpia los campos
        }   
    }
     		
     		$consultaeventos = $modelEventos->getEventos();//llamdado de las consulta y los datos en get
     		$consultaeventosDos = $modelEventos->getEventosDos();
     		$consultaesteventos = $modelEventos->getEventosEstado();
            $this->render('insertareventos', array(//se renderiza la pagina
            
            "consultaeventos"=>$consultaeventos, // se renderiza la consula
            "consultaeventosDos"=>$consultaeventosDos, // se renderiza la consula
           	"consultaesteventos"=>$consultaesteventos,
            "modelEventos"=>$modelEventos // se renderiza el modelo
            )
            ); // variable de asignacion modelo
	}
	public function actionGestionusuarios ()
	{		
		$modelocrearusuario = new GestionUsuarios();
		$cedulausuarios='';
		$nombreusuarios='';
		$apellidousuarios='';
		$telefonousuarios='';
		$celularusuarios='';
		$correousuarios='';
		$contrasenausuarios='';
		$estadousuarios='';
		$observacionesusuarios='';
		$rolesusuarios='';
		$tiposvehiculosuser='';
		$$apellidousuarios='';
		$fecharegistrouser='';
		$activaruser='';
	 if(isset($_POST['GestionUsuarios'])){ // Modelo Eventos
            $modelocrearusuario->attributes=$_POST['GestionUsuarios'];
        if( $modelocrearusuario->validate()){ // valida el modelo y sus atributos
        	//atributos del modelo
        	$cedulausuarios=$modelocrearusuario->cedula;
			$nombreusuarios=$modelocrearusuario->nombre;
			$apellidousuarios=$modelocrearusuario->apellido;
			$telefonousuarios=$modelocrearusuario->telefono;
			$celularusuarios=$modelocrearusuario->celular;
			$correousuarios=$modelocrearusuario->correo;
			$contrasenausuarios=$modelocrearusuario->password;
			$estadousuarios=$modelocrearusuario->estado_usuario;
			$observacionesusuarios=$modelocrearusuario->observaciones;
			$rolesusuarios=$modelocrearusuario->roles_id;
			$tiposvehiculosuser=$modelocrearusuario->tipos_id;
			$fecharegistrouser=$modelocrearusuario->fecha_registro;
			$activaruser=$modelocrearusuario->activar_user;
         	$setuser=$modelocrearusuario->setGestionusuarios($cedulausuarios,$nombreusuarios,$apellidousuarios,$telefonousuarios,$celularusuarios,$correousuarios,$contrasenausuarios,$estadousuarios,$observacionesusuarios,$rolesusuarios,$tiposvehiculosuser,$fecharegistrouser,$activaruser); // SE ENVIA LOS CAMPOS A LA ACCION DEL MODELO 
            $modelocrearusuario->unsetAttributes();// limpia los campos
        }   
    }
    	 $consultaRol = $modelocrearusuario->getEstado();//get para el combo box id_rol
    	 $consultatipoparqueo = $modelocrearusuario->getTipoparqueo();//get para el combo box id_tipoparqueo
    	 $consultagestionuser = $modelocrearusuario->getGestionusuarios();
    	 $consultaEstadoUser = $modelocrearusuario->getEstadoUser();
		 $this->render('gestionusuarios', array(//se renderiza la pagina
		 	'modelocrearusuario'=>$modelocrearusuario,
		 	'consultaRol'=>$consultaRol, //consulta de combox
		 	'consultatipoparqueo'=>$consultatipoparqueo, //consulta de combox
		 	'consultagestionuser'=>$consultagestionuser,
		 	'consultaEstadoUser'=>$consultaEstadoUser
            )
            ); // variable de asignacion modelo
	}
	public function actionConsultaClientes ($consultaclientes,$opcion,$nombre,$apellido,$telefono,$celular,$correo,$cedula){ // setraen los datos desde el ajax correspondientes a cada variable
	$tablas=''; //creamos variable de retorno de informacion
     $sql=''; // creamos variable de consulta
     if($opcion==1){ // en el ajax se creo una variable de opcines la cual se extrae en este punto correspondiente a la caja buscar
     if(isset($_GET['consultaclientes'])) //si la variable consulta clientes contiene informacion
        {
        $sq= $_GET['consultaclientes'];//asignamos la informacion recogida de la variable de busqueda
        $sql = "SELECT U.nombre,U.apellido,U.telefono,U.celular,U.correo,R.nombre_rol FROM usuarios U  
      	inner join roles R on R.id = U.roles_id WHERE roles_id  in ('4','5','6','3','2' ) AND u.cedula='".$sq."'";
      	//cnosulta de busqueda
        }
        $data=Yii::app()->db->createCommand($sql)->queryAll(); //conectamos a la DB asignandola a la variable data
         foreach($data as $value=>$dt){ // creamos una for indicando que la data va a tener una alias para mostrar datos a la variable dt
         }
         //llenamos la variable tablas con un formulario para la midifcacion en este foreach traemos lo que tenemos en la consulta y a cada dt le asignamos un campo de la DB
        $tablas.=' 
        <div class="form-group">
        <label>nombre</label>
        <input type="text" class="form-control fecha" id="nombre" placeholder="Inicio" value="'.$dt["nombre"].'">
        <label>Apellido</label>
        <input type="text" class="form-control fecha" id="apellido" placeholder="Nombre" value="'.$dt["apellido"].'">
        <label>Telefono</label>
        <input type="text" class="form-control fecha1" id="telefono" placeholder="Quien Recibe" value="'.$dt["telefono"].'">
        <label>Celular</label>
        <input type="text" class="form-control fecha" id="celular" placeholder="Factura" value="'.$dt["celular"].'">
        <label>Correo</label>
        <input type="text" class="form-control fecha" id="correo" placeholder="Referencia" value="'.$dt["correo"].'">
        <label>Clíck para Modificar</label><br>
        <input class="form-control" type="button" id="modifcar" value="Modifcar" style="width:50%;">
       	';
    	}elseif($opcion==2){//condicion de la variable opcion en estado 2 del ajax
    	Yii::app()->db->createCommand()->update('usuarios',[ //hacemos conexion con la DB en modo update
        'nombre' => $nombre, //asignamos un valor a cada variable que proviene del ajax
        'apellido' => $apellido, //""
        'telefono' => $telefono,//""
        'celular' => $celular,//""
        'correo' => $correo,//""
        
        ], 'cedula = :up', [':up' => $cedula]); // indicamos que lo que se va a buscar esta en la variable cedula o primery key
	    }
 		$this->render('consultaclientes', //renderizamos todo en la pagina consultaclientes
               array(
                   'respuesta'=>$tablas, // asignamos ese render de tablas a respuesta
                ));
        }

    public function actionConsultaclientesDos($eliminaruser,$opcionDos,$nombre,$apellido,$telefono,$celular,$correo,$busquedasa){ // se crea una accion para llamr el archivo que se tiene como mensaje
     $tablasDos=''; //creamos variable de retorno de informacion
     $sqlDos='';
      if($opcionDos==1){ 
      	 if(isset($_GET['eliminaruser']))
        {
        $sq= $_GET['eliminaruser'];//asignamos la informacion recogida de la variable de busqueda
        $sqlDos = "SELECT U.nombre,U.apellido,U.telefono,U.celular,U.correo,R.nombre_rol FROM usuarios U  
      	inner join roles R on R.id = U.roles_id WHERE roles_id  in ('4','5','6','3','2' ) AND u.cedula='".$sq."'";
        }
          $data=Yii::app()->db->createCommand($sqlDos)->queryAll(); 
            foreach($data as $value=>$dt){

            }
		$tablasDos.=' 
        <div class="form-group">
        <label>nombre</label>
        <input type="text" class="form-control fecha" id="nombre" placeholder="Inicio" value="'.$dt["nombre"].'" readonly>
        <label>Apellido</label>
        <input type="text" class="form-control fecha" id="apellido" placeholder="Nombre" value="'.$dt["apellido"].'" readonly>
        <label>Telefono</label>
        <input type="text" class="form-control fecha1" id="telefono" placeholder="Quien Recibe" value="'.$dt["telefono"].'" readonly>
        <label>Celular</label>
        <input type="text" class="form-control fecha" id="celular" placeholder="Factura" value="'.$dt["celular"].'" readonly>
        <label>Correo</label>
        <input type="text" class="form-control fecha" id="correo" placeholder="Referencia" value="'.$dt["correo"].'" readonly>
        <label>Clíck para Modificar</label><br>
        <input class="form-control" type="button" id="eliminar" value="Eliminar" style="width:50%;">
       	';            
        }elseif($opcionDos==2){//condicion de la variable opcion en estado 2 del ajax

    	Yii::app()->db->createCommand()->delete('usuarios','cedula = :del', [':del' => $busquedasa]); // indicamos que lo que se va a buscar esta en la variable cedula o primery key
	    }
 $this->render('consultaclientesDos', 
               array(
                   'respuestaDos'=>$tablasDos,
                ));
        }

}


// secion _____________

//como llamar un procedimiento almacenado
//$connection = Yii::$app->db; //conectamos
//$command = $connection->createCommand('sp_annualupdate');//llamamos
//$command->execute();//ejecutamos