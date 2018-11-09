<?php

class SiteController extends Controller
{
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
    /*
   public function accessRules() {
        return array(
           array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index','login','logout','informes','informemasivo_f','informepop','consultafotos','consultanovedades','consultaplanillas','consultamaterial','consultavideos'),
                 /*,'descargararchivo','ordenes_ciudades','generarpdfcotizacion','generarpdffacturacion','cotizaciones','insertados_view','insertados_one','delinsertados_one','delinsertados'*/
           /*     'users' => array('*'),
            ),
             array('allow', // allow authenticated user to perform 'create' action
                /*'actions' => array('index','procesomasivo','procesopop','inicios','procesosorden','solicitudes_sistemas','formularios_inicial','visorinicios','ordenesdeserviciodetalles'),*/
         /*       'users' => array('@'),
            ),
           /* array('allow', // allow only the owner to perform 'view' 'update' 'delete' actions
                'actions' => array('view', 'update', 'delete'),
                'expression' => array('ExampleController','allowOnlyOwner')
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin', 'foo', 'bar'),
            ),*/
         /*   array('deny', // deny all users
                'users' => array('*'),
                
            ), 
        );
    }*/
    
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
            $this->render('eventos', array(//se renderiza la pagina
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
            $estado=$modelEventos->estado;
           

             
  


           $tmpo=$modelEventos->setEventos($titulo,$mensaje,$subtitulo,$submensaje,$imagenes,$estado); // SE ENVIA LOS CAMPOS A LA ACCION DEL MODELO 
            $modelEventos->unsetAttributes();// limpia los campos
            
        }   
    }
     		$consultaeventos = $modelEventos->getEventos();//llamdado de las consulta y los datos en get
     		$consultaeventosDos = $modelEventos->getEventosDos();
            $this->render('insertareventos', array(//se renderiza la pagina
            "consultaeventos"=>$consultaeventos, // se renderiza la consula
            "consultaeventosDos"=>$consultaeventosDos, // se renderiza la consula
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
			$contrasenausuarios=$modelocrearusuario->contrasena;
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


}
// secion _____________

