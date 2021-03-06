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
            'postOnly + delete',
        );
    }

    
 // _______________________ permisos de usuarios __________________________________   
    public function accessRules() {
        return array(

         	array('allow', // allow authenticated user to perform 'create' action
               'actions' => array('index','logout','eventos','insertareventos','gestionusuarios','consultaclientes','consultaclientesdos','consultapartamento','gestionvehiculos','consultavehiculos','consultavehiculosdos','informes','consultaporfecha','consultaplaca','consultacedulas','consultaporfechados','consultatipos','controldeacceso','consultacontrol','galeriapersonal','sorteo','pqrs','pqrsadmin','contact','about','consultaeventos','limpiarSorteo','generarSorteo','guardarSorteo','versorteos','consultapart'),'users' => array('Administrador'),
            ),

            array('allow', // allow authenticated user to perform 'create' action
               'actions' => array('index','logout','eventos','insertareventos','gestionusuarios','gestionvehiculos','consultavehiculos','informes','consultaporfecha','consultaplaca','consultacedulas','consultaporfechados','consultatipos','controldeacceso','consultacontrol','galeriapersonal','contact','about','pqrsadmin','versorteos','consultapart'),'users' => array('Operador'),
            ),
             array('deny', // deny all users
             	'actions' => array('consultaclientes','consultaclientesdos','consultapartamento','consultavehiculosdos','sorteo','pqrs','limpiarSorteo','generarSorteo','guardarSorteo','login'),
                'users' => array('Operador'),
                
            ), 
             array('deny', // deny all users
                'actions' => array('login','consultaclientes','consultaclientesdos','consultapartamento','consultavehiculosdos','limpiarSorteo','generarSorteo','guardarSorteo','pqrsadmin','insertareventos','gestionusuarios','gestionvehiculos','consultavehiculos','informes','consultaporfecha','consultaplaca','consultacedulas','consultaporfechados','consultatipos','controldeacceso','consultacontrol'),
                'users' => array('Residente'),
                
            ), 
             array('deny', // deny all users
                'actions' => array('login'),
                'users' => array('Administrador'),
                
            ), 

             array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index','logout','eventos','contact','galeriapersonal','about','sorteo','pqrs','versorteos','consultapart'),
                'users' => array('Residente'),
            ),


     		   array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index','login','contact','galeriapersonal','about','eventos'),
                'users' => array('?'),
            ),

            
            array('allow', // allow only the owner to perform 'view' 'update' 'delete' actions 
                'actions' => array('view','insert','update','delete'),
                'expression' => array('ExampleController','allowOnlyOwner')
            ),

            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin', 'foo', 'bar'),
            ),
            /*
            array('deny', // deny all users
                'users' => array('*'),
                
            ), */
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
				Yii::app()->user->setFlash('contact','Gracias por ponerse en contacto con nosotros. Le responderemos lo antes posible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

    public function actionSite()
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
				//$this->redirect(Yii::app()->user->returnUrl);
                $this->redirect(array('site/eventos','option'=>'0','option2'=>'0'));
                
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
    public function actionRoles(){
        $model = new LoginForm;
        $consultarl = $model->getRoles;

        $this->render('eventos',array('model'=>$model,'consultarl'=>$consultarl));
    }
	public function actionLogin()
	{
		if (!defined('CRYPT_BLOWFISH')||!CRYPT_BLOWFISH)
			throw new CHttpException(500,"This application requires that PHP was compiled with Blowfish support for crypt().");

        $model=new LoginForm;
       	$consultarol = $model->getRoles();

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
		$this->render('login',array(
			'model'=>$model,
			'consultarol' => $consultarol
			
		));
    }
  

  

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	//------------------------------------eventos---------------------------------------------------------
	public function actionEventos ()
	{
			$modelEventos = new Eventos();    
     		$consultaeventos = $modelEventos->getEventos(); // SE LLAMA LA ACCION PARA 
     		$consultaeventosDos = $modelEventos->getEventosDos(); // SE LLAMA LA ACCION PARA 
     		$consultaeventosTres = $modelEventos->getEventosTres(); // SE LLAMA LA ACCION PARA 
     		$consultaesteventos = $modelEventos->getEventosEstado();
            $this->render('eventos', array(//se renderiza la pagina
            "consultaesteventos"=>$consultaesteventos,
            "consultaeventos"=>$consultaeventos, // se renderiza la consula
            "consultaeventosDos"=>$consultaeventosDos, // se renderiza la consula
            "consultaeventosTres"=>$consultaeventosTres, // se renderiza la consula
            "modelEventos"=>$modelEventos // se renderiza el modelo
            )
            ); // variable de asignacion modelo
	}
	//------------------------------------eventos insertar---------------------------------------------------------
	public function actionInsertareventos ()
	{
			$modelEventos = new Eventos();    
		    $titulo='';
		    $mensaje='';
		    $subtitulo='';
		    $submensaje='';
		   	$imagenes='';
		    $idestadoeventos='';
		    $fecha_registro='';

       		$consultaeventos = $modelEventos->getEventos();//llamdado de las consulta y los datos en get
     		$consultaeventosDos = $modelEventos->getEventosDos();
     		$consultaeventosTres = $modelEventos->getEventosTres(); // SE LLAMA LA ACCION PARA 
            $consultaesteventos = $modelEventos->getEventosEstado();

            // aqui ingresamos insertar los eventos
            if(isset($_POST['Eventos'])){ // Modelo Eventos
                $modelEventos->attributes=$_POST['Eventos'];
              
                if( $modelEventos->validate()){ // valida el modelo y sus atributos
                    $titulo=$modelEventos->titulo;
                    $mensaje=$modelEventos->mensaje;
                    $subtitulo=$modelEventos->subtitulo;
                    $submensaje=$modelEventos->submensaje;
                    $idestadoeventos=$modelEventos->idestadoeventos;
                    //$imagenes=$modelEventos->imagenes;   
                    $subirimagen=CUploadedFile::getInstance($modelEventos,'imagenes');//recoge la imagen subida con el nombre
                    if (isset($subirimagen)) {
                        # code...
                    
          	        $ruta ="{$subirimagen}";//guardamos el nombre de la imagen en temporal
                    $subirimagen->saveAs(Yii::app()->basePath.'/../imagenes/eventos/'.$ruta);//movemos la imagen a la ruta
                    $imagenes='/imagenes/eventos/'.$ruta;
                    }else{
                     $imagenes='/imagenes/eventos/constante.png';
                    }

                    $fecha_registro=$modelEventos->fecha_registro;
                    $seteventos=$modelEventos->setEventos($titulo,$mensaje,$subtitulo,$submensaje, $imagenes,$idestadoeventos,$fecha_registro);
                    $modelEventos->unsetAttributes();// limpia los campos
                }
            }
            
            $this->render('insertareventos', array(//se renderiza la pagina
            "consultaeventos"=>$consultaeventos, // se renderiza la consula
            "consultaeventosDos"=>$consultaeventosDos, // se renderiza la consula
           	"consultaesteventos"=>$consultaesteventos,
           	"consultaeventosTres"=>$consultaeventosTres, // se renderiza la consula
            "modelEventos"=>$modelEventos // se renderiza el modelo
            )
            ); // variable de asignacion modelo
	}
    //__________________-------------sorteo_______________________-
   
	//------------------------------------------modificar eventos------------------------------------------------------
	public function actionConsultaeventos ($modificareventos,$opcionevento,$titulo,$mensaje,$subtitulo,$submensaje,$estado,$imagenes,$ideventos){ // setraen los datos desde el ajax correspondientes a cada variable
	
     if($opcionevento==1){ // en el ajax se creo una variable de opcines la cual se extrae en este punto correspondiente a la caja buscar
     $tablas=''; //creamos variable de retorno de informacion
     $sql='';
     if(isset($_GET['modificareventos'])){ //si la variable consulta clientes contiene informacion
       // creamos variable de consulta
        $sq= $_GET['modificareventos'];//asignamos la informacion recogida de la variable de busqueda
        $sql = "SELECT E.id,E.titulo,E.mensaje,E.subtitulo,E.submensaje,EV.idestadoeventos as estado,E.imagenes FROM eventos E INNER JOIN estadoeventos EV ON E.idestadoeventos = EV.idestadoeventos WHERE E.id ='".$sq."'";
      	//cnosulta de busqueda
        }
        $data=Yii::app()->db->createCommand($sql)->queryAll(); //conectamos a la DB asignandola a la variable data
        foreach($data as $value=>$dt){}// creamos una for indicando que la data va a tener una alias para mostrar datos a la variable dt
         //llenamos la variable tablas con un formulario para la midifcacion en este foreach traemos lo que tenemos en la consulta y a cada dt le asignamos un campo de la DB
        $tablas.='
        <div class="form-group col-lg-12">
        <label>Titulo</label>
        <input type="text" class="form-control caja" id="titulo" value="'.$dt["titulo"].'">
        <label>Mensaje Principal</label>
        <input type="text" class="form-control" id="mensaje" value="'.$dt["mensaje"].'">
        <label>Sub-Titulo</label>
        <input type="text" class="form-control caja" id="subtitulo" value="'.$dt["subtitulo"].'">
        <label>Sub-Mensaje</label>
        <input type="text" class="form-control" id="submensaje" value="'.$dt["submensaje"].'">
        <label>Estado de Posicionamiento del Anuncio</label>
        <select type="text"  id="estado" class="form-control" >
        <option value=1>INICIAL</option>
				<option value=2>HISTORIALES</option>
				<option value=3>NO VISIBLES</option>
		    </select>
        <label>Ruta Imagen</label>
        <input type="text" class="form-control" id="imagenes" value="'.$dt["imagenes"].'">
        <label>Clíck para Modificar</label><br>
        <input class="form-control" type="button" id="modifcar" value="Modifcar" style="width:50%;">
        </div>
       	';
    	}elseif($opcionevento==2){//condicion de la variable opcion en estado 2 del ajax
    	Yii::app()->db->createCommand()->update('eventos',[ //hacemos conexion con la DB en modo update
        'titulo' => $titulo, //asignamos un valor a cada variable que proviene del ajax
        'mensaje' => $mensaje, //""
        'subtitulo' => $subtitulo,//""
        'submensaje' => $submensaje,//""
        'idestadoeventos' => $estado,//""
        'imagenes' => $imagenes,//""

        ], 'id = :up', [':up' => $ideventos]); // indicamos que lo que se va a buscar esta en la variable cedula o primery key
        alert("los datos Fueron Modificados Exitosamente"); // mostramos un mensaje de alert para decir que se actualizo
	    }
 		$this->render('eventos/consultaeventos', //renderizamos todo en la pagina consultaclientes
               array(
                   'respuestaevento'=>$tablas, // asignamos ese render de tablas a respuesta
                ));
        }
    //--------------------------------------------------insertar-------- usuarios---------------------------------------
               //__________________________-- pdf --_________________-
    public function actionGenerarPdfuser()
    {
        
        $model =GestionUsuarios::model()->findAll('username = :username', array(
            ':username' => 'Residente') ); //Consulta para buscar todos los registros de residentes
        $mPDF1 = Yii::app()->ePdf->mpdf('utf-8','A4','','',15,15,35,25,9,9,'P'); //Esto lo pueden configurar como quieren, para eso deben de entrar en la web de MPDF para ver todo lo que permite.
        $mPDF1->useOnlyCoreFonts = true;
        $mPDF1->SetTitle("TIMIZA DEL PARQUE - Reporte");
        $mPDF1->SetAuthor("SIONWEBSITES");
        $mPDF1->SetWatermarkText("SION");
        $mPDF1->showWatermarkText = true;
        $mPDF1->watermark_font = 'Colombia - Bogota D.C';
        $mPDF1->watermarkTextAlpha = 0.1;
        $mPDF1->SetDisplayMode('fullpage');
        $mPDF1->WriteHTML($this->renderPartial('pdfReportusuario', array('model'=>$model), true)); //hacemos un render partial a una vista preparada, en este caso es la vista pdfReport
        $mPDF1->Output('Reporte'.date('YmdHis'),'I');  //Nombre del pdf y parámetro para ver pdf o descargarlo directamente.
        exit;
    }
	public function actionGestionusuarios ()
	{		
        
        if(isset($_GET["excelusuarios"])){ // llamamos el archivo que viene de la vista Excel
            $model= GestionUsuarios::model()->findAll('username = :username', array(
                ':username' => 'Residente') ); // buscamos la consulta general de todo el documento de residentes
            $content=$this->renderPartial("excelusuarios",array("model"=>$model),true); // creamos una renderizado temporal del excel
            Yii::app()->request->sendFile("usuarios.xls",$content); // guardamos ese render como y se renombrar al guardar si se desea
            } 
		$modelocrearusuario = new GestionUsuarios();
		$cedulausuarios='';
		$nombreusuarios='';
		$apellidousuarios='';
		$telefonousuarios='';
		$celularusuarios='';
		$correousuarios='';
        $username='';
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
            $username=$modelocrearusuario->username;
			$contrasenausuarios=$modelocrearusuario->password;
			$estadousuarios=$modelocrearusuario->estado_usuario;
			$observacionesusuarios=$modelocrearusuario->observaciones;
			$rolesusuarios=$modelocrearusuario->roles_id;
			$tiposvehiculosuser=$modelocrearusuario->tipos_id;
			$fecharegistrouser=$modelocrearusuario->fecha_registro;
			$activaruser=$modelocrearusuario->activar_user;
         	$setuser=$modelocrearusuario->setGestionusuarios($cedulausuarios,$nombreusuarios,$apellidousuarios,$telefonousuarios,$celularusuarios,$correousuarios,$username,$contrasenausuarios,$estadousuarios,$observacionesusuarios,$rolesusuarios,$tiposvehiculosuser,$fecharegistrouser,$activaruser); // SE ENVIA LOS CAMPOS A LA ACCION DEL MODELO 
            $modelocrearusuario->unsetAttributes();// limpia los campos
        }   
    }
    	 $consultaRol = $modelocrearusuario->getEstado();//get para el combo box id_rol
    	 $consultatipoparqueo = $modelocrearusuario->getTipoparqueo();//get para el combo box id_tipoparqueo
    	 $consultagestionuser = $modelocrearusuario->getGestionusuarios();
    	 $consultaEstadoUser = $modelocrearusuario->getEstadoUser();
         $consultaroles = $modelocrearusuario->getRoles();//get para el combo box id_tipoparqueo
		 $this->render('gestionusuarios', array(//se renderiza la pagina
		 	'modelocrearusuario'=>$modelocrearusuario,
		 	'consultaRol'=>$consultaRol, //consulta de combox
		 	'consultatipoparqueo'=>$consultatipoparqueo, //consulta de combox
		 	'consultagestionuser'=>$consultagestionuser,
		 	'consultaEstadoUser'=>$consultaEstadoUser,
            'consultaroles'=>$consultaroles
            )
            ); // variable de asignacion modelo
	}
	//--------------------------------------------modificar ususarios--------------------------------------------------
	public function actionConsultaClientes ($consultaclientes,$opcion,$nombre,$apellido,$telefono,$celular,$correo,$cedula){ // setraen los datos desde el ajax correspondientes a cada variable
	
     if($opcion==1){ // en el ajax se creo una variable de opcines la cual se extrae en este punto correspondiente a la caja buscar
     $tablas=''; //creamos variable de retorno de informacion
     $sql='';
     if(isset($_GET['consultaclientes'])){ //si la variable consulta clientes contiene informacion
       // creamos variable de consulta
        $sq= $_GET['consultaclientes'];//asignamos la informacion recogida de la variable de busqueda
        $sql = "SELECT U.nombre,U.apellido,U.telefono,U.celular,U.correo,R.nombre_rol FROM usuarios U  
      	inner join roles R on R.id = U.roles_id WHERE roles_id  in ('4','5','6','3','2' ) AND u.cedula='".$sq."'";
      	//cnosulta de busqueda
        }
        $data=Yii::app()->db->createCommand($sql)->queryAll(); //conectamos a la DB asignandola a la variable data
        foreach($data as $value=>$dt){}// creamos una for indicando que la data va a tener una alias para mostrar datos a la variable dt
         //llenamos la variable tablas con un formulario para la midifcacion en este foreach traemos lo que tenemos en la consulta y a cada dt le asignamos un campo de la DB
        $tablas.='
        <div class="form-group">
        <label>nombre</label>
        <input type="text" class="form-control caja" id="nombre" placeholder="Inicio" value="'.$dt["nombre"].'">
        <label>Apellido</label>
        <input type="text" class="form-control caja" id="apellido" placeholder="Nombre" value="'.$dt["apellido"].'">
        <label>Telefono</label>
        <input type="number" class="form-control" id="telefono" placeholder="Quien Recibe" value="'.$dt["telefono"].'">
        <label>Celular</label>
        <input type="number" class="form-control" id="celular" placeholder="Factura" value="'.$dt["celular"].'">
        <label>Correo</label>
        <input type="email" class="form-control" id="correo" placeholder="Referencia" value="'.$dt["correo"].'">
        <label>Clíck para Modificar</label><br>
        <input class="form-control" type="button" id="modifcar" value="Modifcar" style="width:50%;">
        </div>
       	';
    	}elseif($opcion==2){//condicion de la variable opcion en estado 2 del ajax
    	Yii::app()->db->createCommand()->update('usuarios',[ //hacemos conexion con la DB en modo update
        'nombre' => $nombre, //asignamos un valor a cada variable que proviene del ajax
        'apellido' => $apellido, //""
        'telefono' => $telefono,//""
        'celular' => $celular,//""
        'correo' => $correo,//""
        ], 'cedula = :up', [':up' => $cedula]); // indicamos que lo que se va a buscar esta en la variable cedula o primery key

        Yii::app()->db->createCommand()->update('usuarios_respaldo',[ //hacemos conexion con la DB en modo update
        'nombre' => $nombre, //asignamos un valor a cada variable que proviene del ajax
        'apellido' => $apellido, //""
        'telefono' => $telefono,//""
        'celular' => $celular,//""
        'correo' => $correo,//""
        ], 'cedula = :up', [':up' => $cedula]); // indicamos que lo que se va a buscar esta en la variable cedula o primery key
        alert("los datos Fueron Modificados Exitosamente"); // mostramos un mensaje de alert para decir que se actualizo
	    }
 		$this->render('clientes/consultaclientes', //renderizamos todo en la pagina consultaclientes
               array(
                   'respuesta'=>$tablas, // asignamos ese render de tablas a respuesta
                ));
        }
    //------------------------------------- eliminar ususarios--------------------------------------------------------
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
        foreach($data as $value=>$dt){}
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
        <label>Clíck para Eliminar</label><br>
        <input class="form-control" type="button" id="eliminar" value="Eliminar" style="width:50%;">
        </div>
       	';            
        }elseif($opcionDos==2){//condicion de la variable opcion en estado 2 del ajax

    	Yii::app()->db->createCommand()->delete('usuarios','cedula = :del', [':del' => $busquedasa]); // indicamos que lo que se va a buscar esta en la variable cedula o primery key
	    }
 			$this->render('clientes/consultaclientesDos', 
               array(
                   'respuestaDos'=>$tablasDos,
                ));
        }
        //---------------------------------------modificar cedula usuarios------------------------------------------
        public function actionConsultapartamento ($consulapa,$opcionapa,$torre,$apa,$cedu,$busquedasapartados){ // setraen los datos desde el ajax correspondientes a cada variable
	
     	if($opcionapa==1){ // en el ajax se creo una variable de opcines la cual se extrae en este punto correspondiente a la caja buscar
     	$tablas=''; //creamos variable de retorno de informacion
     	$sql='';
     	if(isset($_GET['consulapa'])){ //si la variable consulta clientes contiene informacion
       // creamos variable de consulta
        $sq= $_GET['consulapa'];//asignamos la informacion recogida de la variable de busqueda
        $sql = "SELECT A.numero_apartamento, A.torre, A.usuarios_cedula, A.nombre_completo 
		FROM apartamentos A WHERE A.propietario_cedula ='".$sq."'";
      	//cnosulta de busqueda
        }
        $data=Yii::app()->db->createCommand($sql)->queryAll(); //conectamos a la DB asignandola a la variable data
        foreach($data as $value=>$dt){}// creamos una for indicando que la data va a tener una alias para mostrar datos a la variable dt
         //llenamos la variable tablas con un formulario para la midifcacion en este foreach traemos lo que tenemos en la consulta y a cada dt le asignamos un campo de la DB
        $tablas.='
        <div class="form-group">
        <label>Numero de Apartamento</label>
        <input type="text" class="form-control caja" id="apa" value="'.$dt["numero_apartamento"].'" readonly>
        <label>Torre</label>
        <input type="text" class="form-control caja" id="torre" value="'.$dt["torre"].'" readonly>
        <label>Usuario Habitante</label>
        <input type="number" class="form-control" id="cedu"  value="'.$dt["usuarios_cedula"].'">
        <label>Nombre Propietario</label>
        <input type="text" class="form-control caja" id="busquedasapartados"  value="'.$dt["nombre_completo"].'" readonly>
        <label>Clíck para Modificar</label><br>
        <input class="form-control" type="button" id="modifcarmos" value="Modifcar" style="width:50%;">
        </div>
       	';
    	}elseif($opcionapa==2){//condicion de la variable opcion en estado 2 del ajax
    	Yii::app()->db->createCommand()->update('apartamentos',[ //hacemos conexion con la DB en modo update
        'numero_apartamento' => $apa, //asignamos un valor a cada variable que proviene del ajax
        'torre' => $torre, //""
        'usuarios_cedula' => $cedu,//""
        ], 'propietario_cedula = :up', [':up' => $busquedasapartados]); // indicamos que lo que se va a buscar esta en la variable cedula o primery key
        alert("los datos Fueron Modificados Exitosamente"); // mostramos un mensaje de alert para decir que se actualizo
	    }
 		$this->render('clientes/consultapartamento', //renderizamos todo en la pagina consultaclientes
               array(
                   'respuestapartamento'=>$tablas, // asignamos ese render de tablas a respuesta
                ));
        }

        //---------------------------------------insertar vehiculos----------------------------------------
        
            //__________________________-- pdf --_________________-
    public function actionGenerarPdf()
    {
    $model =GestionVehiculos::model()->findAll(); //Consulta para buscar todos los registros
    $mPDF1 = Yii::app()->ePdf->mpdf('utf-8','A4','','',15,15,35,25,9,9,'P'); //Esto lo pueden configurar como quieren, para eso deben de entrar en la web de MPDF para ver todo lo que permite.
    $mPDF1->useOnlyCoreFonts = true;
    $mPDF1->SetTitle("TIMIZA DEL PARQUE - Reporte");
    $mPDF1->SetAuthor("SIONWEBSITES");
    $mPDF1->SetWatermarkText("SION");
    $mPDF1->showWatermarkText = true;
    $mPDF1->watermark_font = 'Colombia - Bogota D.C';
    $mPDF1->watermarkTextAlpha = 0.1;
    $mPDF1->SetDisplayMode('fullpage');
    $mPDF1->WriteHTML($this->renderPartial('pdfReport', array('model'=>$model), true)); //hacemos un render partial a una vista preparada, en este caso es la vista pdfReport
    $mPDF1->Output('Reporte'.date('YmdHis'),'I');  //Nombre del pdf y parámetro para ver pdf o descargarlo directamente.
    exit;
    }
        public function actionGestionvehiculos (){	
        
            if(isset($_GET["excel"])){ // llamamos el archivo que viene de la vista Excel
                $model= GestionVehiculos::model()->findAll(); // buscamos la consulta general de todo el documento
                $content=$this->renderPartial("excel",array("model"=>$model),true); // creamos una renderizado temporal del excel
                Yii::app()->request->sendFile("vehiculos.xls",$content); // guardamos ese render como y se renombrar al guardar si se desea
                }         
            
		$modelocrearvehiculo = new GestionVehiculos();
		$placa='';
		$marca='';
		$color='';
		$modelo='';
		$usuarios_cedula='';
		$fecharegistrovehiculos='';
		$tipo_de_vehiculo='';
	
		if(isset($_POST['GestionVehiculos'])){ // Modelo Eventos

        $modelocrearvehiculo->attributes=$_POST['GestionVehiculos'];

        if( $modelocrearvehiculo->validate()){ // valida el modelo y sus atributos
        	//atributos del modelo
        $placa=$modelocrearvehiculo->placa;
    		$marca=$modelocrearvehiculo->marca;
    		$color=$modelocrearvehiculo->color;
    		$modelo=$modelocrearvehiculo->modelo;
    		$usuarios_cedula=$modelocrearvehiculo->usuarios_cedula;
    		$fecharegistrovehiculos=$modelocrearvehiculo->fecha_registro;
    		$tipo_de_vehiculo=$modelocrearvehiculo->tipo_de_vehiculo;
        $setvehiculo=$modelocrearvehiculo->setGestionvehiculos($placa,$marca,$color,$modelo,$usuarios_cedula,$fecharegistrovehiculos,$tipo_de_vehiculo); // SE ENVIA LOS CAMPOS A LA ACCION DEL MODELO 
        $modelocrearvehiculo->unsetAttributes();// limpia los campos
        }   
        }
        $consultagestionvehiculos = $modelocrearvehiculo->getGestionvehiculos();
        $consultatiposve = $modelocrearvehiculo->getVertipo();

		 $this->render('gestionvehiculos', array(//se renderiza la pagina
		 	'modelocrearvehiculo'=>$modelocrearvehiculo, // se renderiza el modelo
		 	'consultagestionvehiculos'=>$consultagestionvehiculos,
		 	'consultatiposve'=>$consultatiposve

            )
            ); // variable de asignacion modelo
		}
		//------------------------------------------------------modificar vehiculos---------------------------------
		public function actionConsultavehiculos ($modificarve,$opcionve,$marca,$color,$modelo,$placa){ // setraen los datos desde el ajax correspondientes a cada variable
	
     	if($opcionve==1){ // en el ajax se creo una variable de opcines la cual se extrae en este punto correspondiente a la caja buscar
     	$tablas=''; //creamos variable de retorno de informacion
     	$sql='';
     	if(isset($_GET['modificarve'])){ //si la variable consulta clientes contiene informacion
       // creamos variable de consulta
        $sq= $_GET['modificarve'];//asignamos la informacion recogida de la variable de busqueda
        $sql = "SELECT V.placa, V.marca, V.color, V.modelo, U.nombre, V.fecha_registro 
		FROM vehiculos V Inner Join usuarios U on U.cedula = V.usuarios_cedula
		Where V.placa ='".$sq."' AND V.tipo_de_vehiculo !=2";
      	//cnosulta de busqueda
        }
        $data=Yii::app()->db->createCommand($sql)->queryAll(); //conectamos a la DB asignandola a la variable data
        foreach($data as $value=>$dt){}// creamos una for indicando que la data va a tener una alias para mostrar datos a la variable dt
         //llenamos la variable tablas con un formulario para la midifcacion en este foreach traemos lo que tenemos en la consulta y a cada dt le asignamos un campo de la DB
        $tablas.='
        <div class="form-group">
        <label>Marca</label>
        <input type="text" class="form-control caja" id="marca" value="'.$dt["marca"].'">
        <label>Color</label>
        <input type="text" class="form-control caja" id="color" value="'.$dt["color"].'">
        <label>Modelo</label>
        <input type="number" class="form-control" id="modelo"  value="'.$dt["modelo"].'">
        <label>Nombre Propietario</label>
        <input type="text" class="form-control caja" id="nombre"  value="'.$dt["nombre"].'" readonly>
        <label>Fecha Registro</label>
        <input type="text" class="form-control" id="fecha_registro" value="'.$dt["fecha_registro"].'" readonly>
        <label>Clíck para Modificar</label><br>
        <input class="form-control" type="button" id="modifcar" value="Modifcar" style="width:50%;">
        </div>
       	';
    	}elseif($opcionve==2){//condicion de la variable opcion en estado 2 del ajax
    	Yii::app()->db->createCommand()->update('vehiculos',[ //hacemos conexion con la DB en modo update
        'marca' => $marca, //asignamos un valor a cada variable que proviene del ajax
        'color' => $color, //""
        'modelo' => $modelo,//""
        ], 'placa = :up', [':up' => $placa]); // indicamos que lo que se va a buscar esta en la variable cedula o primery key

        Yii::app()->db->createCommand()->update('vehiculos_respaldo',[ //hacemos conexion con la DB en modo update
        'marca' => $marca, //asignamos un valor a cada variable que proviene del ajax
        'color' => $color, //""
        'modelo' => $modelo,//""
        ], 'placa = :up', [':up' => $placa]); // indicamos que lo que se va a buscar esta en la variable cedula o primery key
        alert("los datos Fueron Modificados Exitosamente"); // mostramos un mensaje de alert para decir que se actualizo
	    }
 		$this->render('vehiculos/consultavehiculos', //renderizamos todo en la pagina consultaclientes
               array(
                   'respuestave'=>$tablas, // asignamos ese render de tablas a respuesta
                ));
        }
//-----------------------------------------------eliminar vehiculos------------------------------------------------
       
    public function actionConsultavehiculosDos($eliminarvehiculo,$opcionveDos,$marca,$color,$modelo,$usuarios_cedula,$fecha_registro,$plaquetas){ // se crea una accion para llamr el archivo que se tiene como mensaje
    	$tablasDos='';
    	$sqlveDos='';
      if($opcionveDos==1){ 
      	if(isset($_GET['eliminarvehiculo'])){
        $sq= $_GET['eliminarvehiculo'];//asignamos la informacion recogida de la variable de busqueda
        $sqlveDos = "SELECT V.placa,V.marca,V.color,V.modelo,U.nombre,V.fecha_registro FROM vehiculos V  
      	INNER JOIN usuarios U ON U.cedula = V.usuarios_cedula WHERE V.placa ='".$sq."'";
        }
        $data=Yii::app()->db->createCommand($sqlveDos)->queryAll(); 
        foreach($data as $value=>$dts){}
		$tablasDos.=' 
        <div class="form-group">
       	<label>Color</label>
        <label>Marca</label>
        <input type="text" class="form-control fecha" id="marca" value="'.$dts["marca"].'" readonly>
        <input type="text" class="form-control fecha1" id="color" value="'.$dts["color"].'" readonly>
        <label>Modelo</label>
		<input type="text" class="form-control fecha" id="modelo" value="'.$dts["modelo"].'" readonly>
        <label>Usuario</label>
        <input type="text" class="form-control fecha" id="usuarios_cedula" value="'.$dts["nombre"].'" readonly>
        <label>Fecha Registro</label>
        <input type="text" class="form-control fecha" id="fecha_registro" value="'.$dts["fecha_registro"].'" readonly>
        <label>Clíck para Eliminar</label><br>
        <input class="form-control" type="button" id="eliminar" value="Eliminar" style="width:50%;">
        </div>
       	';            
        }
        if($opcionveDos==2){//condicion de la variable opcion en estado 2 del ajax

    	Yii::app()->db->createCommand()->delete('vehiculos','placa = :del', [':del' => $plaquetas]); // indicamos que lo que se va a buscar esta en la variable cedula o primery key
	    }
 			$this->render('vehiculos/consultavehiculosDos', 
               array(
                   'respuestaveDos'=>$tablasDos,
                ));
        }
     
 //-----------------------------------------reportes fecha uno --------------------------------------------------------
    public function actionInformes (){		
		$modeloinformes = new Informes();
        $consultacantidaduser = $modeloinformes->getInformesuser();
        $consultacantidadveh = $modeloinformes->getInformesveh();
        $consultaRolDos = $modeloinformes->getEstadodos();
        $consultaingsal = $modeloinformes->getIngresosalida();
        $consultalistacontrol = $modeloinformes->getEntradasalida();
        $consultacantingresal = $modeloinformes->getCantIngresosalida();

		 $this->render('informes', array(//se renderiza la pagina
		 	'modeloinformes'=>$modeloinformes, // se renderiza el modelo
		 	'consultacantidaduser'=>$consultacantidaduser,
		 	'consultacantidadveh'=>$consultacantidadveh,
		 	'consultaRolDos'=>$consultaRolDos,
            'consultaingsal'=>$consultaingsal,
            'consultalistacontrol'=>$consultalistacontrol,
            'consultacantingresal'=>$consultacantingresal

            )
            ); // variable de asignacion modelo
	}

    public function actionConsultaporfecha ($desde,$hasta){ // se crea una accion para llamr el archivo que se tiene como mensaje

     
     if(isset($_GET['desde'])){
     	$squno= $_GET['desde'];
     	if(isset($_GET['hasta'])){
        $sqdos= $_GET['hasta'];


        $sqlfeDos = "SELECT S.fecha_ingreso,S.fecha_salida, S.vehiculos_placa FROM ingresos_salidas S
			WHERE  fecha_ingreso BETWEEN '".$squno."' AND '".$sqdos."'";
        	}
		}
        $tablas='';
        $tablas.='<table class="table-bordered">';
            $tablas.='<tr>';
            $tablas.= "
            <td style='background:grey;color:white;'>Fecha Ingreso</td>
            <td style='background:grey;color:white;'>Fecha Salida</td>
            <td style='background:grey;color:white;'>Placa Vehiculo</td>
               
            ";
            $tablas.='</tr>';
           
            $data=Yii::app()->db->createCommand($sqlfeDos)->queryAll(); 
            foreach($data as $value=>$dt){
            $tablas.= " 
            <tbody>
            <td>".$dt['fecha_ingreso']."</td>
            <td>".$dt['fecha_salida']."</td>
            <td>".$dt['vehiculos_placa']."</td>
           
            </tbody>
            ";  
                 
        }
        $tablas.='</table>';
                  
 		$this->render('reportes/consultaporfecha', 
               array(
                   'respuestauno'=>$tablas,
                ));
        }
//---------------------------------------reportes placa dos ------------------------------------------------
    public function actionConsultaplaca ($placas){ // se crea una accion para llamr el archivo que se tiene como mensaje
	     if(isset($_GET['placas'])){
	     	$sqpla= $_GET['placas'];
	        $sqlveplac = "
	        SELECT S.fecha_ingreso,S.fecha_salida, S.vehiculos_placa FROM ingresos_salidas S
			WHERE  vehiculos_placa = '".$sqpla."'";
			}
	        $tablas='';
	        $tablas.='<table class="table-bordered">';
	            $tablas.='<tr>';
	            $tablas.= "
	            <td style='background:grey;color:white;'>Fecha Ingreso</td>
	            <td style='background:grey;color:white;'>Fecha Salida</td>
	            <td style='background:grey;color:white;'>Placa Vehiculo</td>
	          
	                      
	            ";
	            $tablas.='</tr>';
	           
	            $data=Yii::app()->db->createCommand($sqlveplac)->queryAll(); 
	            foreach($data as $value=>$dt){
	            $tablas.= " 
	            <tbody>
	            <td>".$dt['fecha_ingreso']."</td>
	            <td>".$dt['fecha_salida']."</td>
	            <td>".$dt['vehiculos_placa']."</td>
	            </tbody>
	            ";  
        	}
        	$tablas.='</table>';
	 		$this->render('reportes/consultaplaca', 
               array(
                   'respuestaplaca'=>$tablas,
                ));
    }
  //---------------------------------------reportes placa tres ------------------------------------------------
    public function actionConsultapart ($apart){ // se crea una accion para llamr el archivo que se tiene como mensaje
       if(isset($_GET['apart'])){
        $sqpla= $_GET['apart'];
          $sqlveplac = "
          SELECT PQ.nombre_punto,A.numero_apartamento,A.torre  FROM sorteo S
          INNER JOIN puntoparqueo PQ ON PQ.id = S.id_sorteo
          INNER JOIN apartamentos A ON A.id = S.id_apartamento
          WHERE A.numero_apartamento = '".$sqpla."'";
      }
              $tablas='';
              $tablas.='<table class="table-bordered">';
              $tablas.='<tr>';
              $tablas.= "
              <td style='background:grey;color:white;'>Apartamento</td>
              <td style='background:grey;color:white;'>Torre</td>
              <td style='background:grey;color:white;'>Punto de Parqueo</td>
            
                        
              ";
              $tablas.='</tr>';
             
              $data=Yii::app()->db->createCommand($sqlveplac)->queryAll(); 
              foreach($data as $value=>$dt){
              $tablas.= " 
              <tbody>
              <td>".$dt['numero_apartamento']."</td>
              <td>".$dt['torre']."</td>
              <td>".$dt['nombre_punto']."</td>
              </tbody>
              ";  
          }
          $tablas.='</table>';
      $this->render('reportes/consultapartamento', 
               array(
                   'respuestaapartamento'=>$tablas,
                ));
    }
    //-------------------------------------busqueda por cedula salida----------------------------
    public function actionConsultacedulas ($cedula){ // se crea una accion para llamr el archivo que se tiene como mensaje
	     if(isset($_GET['cedula'])){
	     	$sqcdla= $_GET['cedula'];
	        $sqlceplac = "
	        SELECT  U.nombre,V.placa,SA.fecha_ingreso,SA.fecha_salida
			FROM usuarios U
			INNER JOIN vehiculos V ON V.usuarios_cedula = U.cedula
			INNER JOIN ingresos_salidas SA ON V.placa = SA.vehiculos_placa
			INNER JOIN apartamentos A ON U.cedula = A.usuarios_cedula
			WHERE U.cedula = '".$sqcdla."'";
			}
	        $tablas='';
	        $tablas.='<table class="table-bordered">';
	            $tablas.='<tr>';
	            $tablas.= "
	            <td style='background:grey;color:white;'>Nombre</td>
	            <td style='background:grey;color:white;'>Placa</td>
	            <td style='background:grey;color:white;'>Fecha Ingreso</td>
	           	<td style='background:grey;color:white;'>Fecha Salida</td>
	            ";
	            $tablas.='</tr>';
	           
	            $data=Yii::app()->db->createCommand($sqlceplac)->queryAll(); 
	            foreach($data as $value=>$dt){
	            $tablas.= " 
	            <tbody>
	            <td>".$dt['nombre']."</td>
	            <td>".$dt['placa']."</td>
	            <td>".$dt['fecha_ingreso']."</td>
	            <td>".$dt['fecha_salida']."</td>
	            </tbody>
	            ";  
	                 
        	}
        	$tablas.='</table>';
	 		$this->render('reportes/consultacedulas', 
               array(
                   'respuestacedulas'=>$tablas,
                ));
    }
     //------------------------------------busqueda por fecha usuarios-----------------------------------
      public function actionConsultaporfechados ($desdeini,$hastafin){ // se crea una accion para llamr el archivo que se tiene como mensaje

     
     if(isset($_GET['desdeini'])){
     	$squno= $_GET['desdeini'];
     	if(isset($_GET['hastafin'])){
        $sqdos= $_GET['hastafin'];


        $sqlfeDos = "SELECT U.nombre,U.apellido,U.telefono,U.celular,U.correo,EU.estado_user,R.nombre_rol,U.fecha_registro FROM usuarios_respaldo U
			INNER JOIN estado_usuarios EU on U.activar_user = EU.activar_user
			INNER JOIN roles R on R.id = U.roles_id
			WHERE  U.fecha_registro BETWEEN '".$squno."' AND '".$sqdos."'";
        	}
		}
        $tablas='';
        $tablas.='<table class="table-bordered">';
            $tablas.='<tr>';
            $tablas.= "
            <td style='background:grey;color:white;'>Nombre Usuario</td>
            <td style='background:grey;color:white;'>Apellido</td>
            <td style='background:grey;color:white;'>Telefono Vehiculo</td>
            <td style='background:grey;color:white;'>Celular</td>
            <td style='background:grey;color:white;'>Correo</td>
            <td style='background:grey;color:white;'>Estado Ususario</td>
            <td style='background:grey;color:white;'>Rol</td>
            <td style='background:grey;color:white;'>Fecha Registrado</td>
                      
            ";
            $tablas.='</tr>';
           
            $data=Yii::app()->db->createCommand($sqlfeDos)->queryAll(); 
            foreach($data as $value=>$dt){
            $tablas.= " 
            <tbody>
            <td>".$dt['nombre']."</td>
            <td>".$dt['apellido']."</td>
            <td>".$dt['telefono']."</td>
            <td>".$dt['celular']."</td>
            <td>".$dt['correo']."</td>
            <td>".$dt['estado_user']."</td>
            <td>".$dt['nombre_rol']."</td>
            <td>".$dt['fecha_registro']."</td>
            </tbody>
            ";  
                 
        }
        $tablas.='</table>';
                  
 		$this->render('clientes/consultaporfechados', 
               array(
                   'respuestafechados'=>$tablas,
                ));
        } 
    //-------------------------------------busqueda por tipos------------------------------------------------
    public function actionConsultatipos ($tipo){ // se crea una accion para llamr el archivo que se tiene como mensaje
	     if(isset($_GET['tipo'])){
	     	$sqtp= $_GET['tipo'];
	        $sqltp = "SELECT U.nombre,U.apellido,U.telefono,U.celular,U.correo,R.nombre_rol FROM usuarios_respaldo U
			INNER JOIN roles R ON R.id = U.roles_id
			WHERE R.nombre_rol LIKE '%".$sqtp."%'";
			}
	        $tablas='';
	        $tablas.='<table class="table-bordered">';
	            $tablas.='<tr>';
	            $tablas.= "
	            <td style='background:grey;color:white;'>Nombre</td>
	            <td style='background:grey;color:white;'>Apellido</td>
	            <td style='background:grey;color:white;'>Telefono</td>
	           	<td style='background:grey;color:white;'>Celular</td>
	           	<td style='background:grey;color:white;'>Correo</td>
	           	 <td style='background:grey;color:white;'>Nombre Rol</td>
	                      
	            ";
	            $tablas.='</tr>';
	           
	            $data=Yii::app()->db->createCommand($sqltp)->queryAll(); 
	            foreach($data as $value=>$dt){
	            $tablas.= " 
	            <tbody>
	            <td>".$dt['nombre']."</td>
	            <td>".$dt['apellido']."</td>
	            <td>".$dt['telefono']."</td>
	            <td>".$dt['celular']."</td>
	            <td>".$dt['correo']."</td>
	            <td>".$dt['nombre_rol']."</td>
	            </tbody>
	            ";  
	                 
        	}
        	$tablas.='</table>';
	 		$this->render('reportes/consultatipos', 
               array(
                   'respuestatipo'=>$tablas,
                ));
    }
     //------------------------------------busqueda por fecha pqrs-----------------------------------
      public function actionConsultaporfechapqrs ($fechasolicitudini,$fechasolicitudfin){ // se crea una accion para llamr el archivo que se tiene como mensaje

     
     if(isset($_GET['fechasolicitudini'])){
        $squno= $_GET['fechasolicitudini'];
        if(isset($_GET['fechasolicitudfin'])){
        $sqdos= $_GET['fechasolicitudfin'];


        $sqlfeDos = "SELECT P.idpqrs,P.asunto,P.mensaje,P.correo,P.adjunto,E.nombre_estado_pqr,U.nombre,P.fecha_crea FROM pqrs P
        INNER JOIN estadopqrs E ON E.idestadopqrs = P.idestadopqrs
        INNER JOIN usuarios U ON U.cedula = P.idusuario
        WHERE P.fecha_crea BETWEEN '".$squno."' AND '".$sqdos."'";
            }
        }
        $tablas='';
        $tablas.='<table class="table-bordered">';
            $tablas.='<tr>';
            $tablas.= "
            <td style='background:grey;color:white;'>PQRS</td>
            <td style='background:grey;color:white;'>Asunto</td>
            <td style='background:grey;color:white;'>Mensaje Vehiculo</td>
            <td style='background:grey;color:white;'>Correo</td>
            <td style='background:grey;color:white;'>Ruta</td>
            <td style='background:grey;color:white;'>Estado</td>
            <td style='background:grey;color:white;'>Usuario</td>
            <td style='background:grey;color:white;'>Fecha Solicitud</td>
                      
            ";
            $tablas.='</tr>';
           
            $data=Yii::app()->db->createCommand($sqlfeDos)->queryAll(); 
            foreach($data as $value=>$dt){
            $tablas.= " 
            <tbody>
            <td>".$dt['idpqrs']."</td>
            <td>".$dt['asunto']."</td>
            <td>".$dt['mensaje']."</td>
            <td>".$dt['correo']."</td>
            <td>".$dt['adjunto']."</td>
            <td>".$dt['nombre_estado_pqr']."</td>
            <td>".$dt['nombre']."</td>
            <td>".$dt['fecha_crea']."</td>
            </tbody>
            ";  
                 
        }
        $tablas.='</table>';
                  
        $this->render('reportes/consultaporfechapqrs', 
               array(
                   'respuestafechapqrs'=>$tablas,
                ));
        } 
    //-------------------------------------busqueda por cedula pqrs------------------------------------------------
    public function actionConsultausuariopqrs($cedulas){ // se crea una accion para llamr el archivo que se tiene como mensaje
         if(isset($_GET['cedulas'])){
            $sqtp= $_GET['cedulas'];
            $sqltp = "SELECT P.idpqrs,P.asunto,P.mensaje,P.correo,P.adjunto,E.nombre_estado_pqr,U.nombre,P.fecha_crea FROM pqrs P
            INNER JOIN estadopqrs E ON E.idestadopqrs = P.idestadopqrs
            INNER JOIN usuarios U ON U.cedula = P.idusuario
            WHERE P.idusuario LIKE '%".$sqtp."%'";
            }
            $tablas='';
            $tablas.='<table class="table-bordered">';
                $tablas.='<tr>';
                $tablas.= "
                <td style='background:grey;color:white;'>PQRS</td>
                <td style='background:grey;color:white;'>Asunto</td>
                <td style='background:grey;color:white;'>Mensaje Vehiculo</td>
                <td style='background:grey;color:white;'>Correo</td>
                <td style='background:grey;color:white;'>Ruta</td>
                <td style='background:grey;color:white;'>Estado</td>
                <td style='background:grey;color:white;'>Usuario</td>
                <td style='background:grey;color:white;'>Fecha Solicitud</td>
                          
                ";
                $tablas.='</tr>';
               
                $data=Yii::app()->db->createCommand($sqltp)->queryAll(); 
                foreach($data as $value=>$dt){
                $tablas.= " 
                <tbody>
                <td>".$dt['idpqrs']."</td>
                <td>".$dt['asunto']."</td>
                <td>".$dt['mensaje']."</td>
                <td>".$dt['correo']."</td>
                <td>".$dt['adjunto']."</td>
                <td>".$dt['nombre_estado_pqr']."</td>
                <td>".$dt['nombre']."</td>
                <td>".$dt['fecha_crea']."</td>
                </tbody>
                ";  
                     
            }
            $tablas.='</table>';
            $this->render('reportes/consultausuariopqrs', 
               array(
                   'respuestacedulaspqrs'=>$tablas,
                ));
    }
    //------------------------------------------modificar pqrs------------------------------------------------------

    public function actionConsultapq ($modificarpqrs/*variable de la accion*/,$opcionpqrs,$asunto,$mensaje,$correo,$idestadopqrs,$idusuario,$fecha_crea,$idpqrs){ // setraen los datos desde el ajax correspondientes a cada variable
    
     if($opcionpqrs==1){ // en el ajax se creo una variable de opcines la cual se extrae en este punto correspondiente a la caja buscar
     $tablas=''; //creamos variable de retorno de informacion
     $sql='';
     if(isset($_GET['modificarpqrs'])){ //si la variable consulta clientes contiene informacion
       // creamos variable de consulta
        $sq= $_GET['modificarpqrs'];//asignamos la informacion recogida de la variable de busqueda
        $sql = "SELECT P.idpqrs,P.asunto,P.mensaje,P.correo,EP.nombre_estado_pqr,P.idusuario,P.fecha_crea FROM pqrs P INNER JOIN estadopqrs EP ON P.idestadopqrs = EP.idestadopqrs WHERE P.idpqrs ='".$sq."'";
        //cnosulta de busqueda
        }
        $data=Yii::app()->db->createCommand($sql)->queryAll(); //conectamos a la DB asignandola a la variable data
        foreach($data as $value=>$dt){}// creamos una for indicando que la data va a tener una alias para mostrar datos a la variable dt
         //llenamos la variable tablas con un formulario para la midifcacion en este foreach traemos lo que tenemos en la consulta y a cada dt le asignamos un campo de la DB
        $tablas.='
        <div class="form-group">
        <label>Codigo PQRS</label>
        <input type="text" class="form-control caja" id="idpqrs" value="'.$dt["idpqrs"].'" readonly>
        <label>Asunto</label>
        <input type="text" class="form-control caja" id="asunto" value="'.$dt["asunto"].'" readonly>
        <label>Mensaje</label>
        <input type="text" class="form-control" id="mensaje" value="'.$dt["mensaje"].'" readonly>
        <label>Correo</label>
        <input type="text" class="form-control caja" id="correo" value="'.$dt["correo"].'" readonly>
        <label>Estado Actual</label>
        <input type="text" class="form-control" value="'.$dt["nombre_estado_pqr"].'" readonly>
        <label>Seleccionar Estado PQRS Nuevo</label>
        <select type="text" class="form-control" id="idestadopqrs">
        <option value=1>EN PROCESO</option>
        <option value=2>PENDIENTES</option>
        <option value=3>CANCELADOS</option>
        <option value=4>SOLUCIONADOS</option>
        <option value=5>NO APROBADOS</option>
        <option value=6>SIN INFORMACION</option>
        </select>
        <label>Documento Ususario</label>
        <input type="text" class="form-control" id="idusuario" value="'.$dt["idusuario"].'" readonly>
        <label>Fecha Creacion PQRS</label>
        <input type="text" class="form-control" id="fecha_crea" value="'.$dt["fecha_crea"].'" readonly>
        <label>Clíck para Modificar</label><br>
        <input class="form-control" type="button" id="modifcar" value="Modifcar" style="width:50%;">
        </div>
        ';
        }elseif($opcionpqrs==2){//condicion de la variable opcion en estado 2 del ajax
        Yii::app()->db->createCommand()->update('pqrs',[ //hacemos conexion con la DB en modo update
        'asunto' => $asunto, //asignamos un valor a cada variable que proviene del ajax
        'mensaje' => $mensaje, //""
        'correo' => $correo,//""
        'idestadopqrs' => $idestadopqrs,//""
        'idusuario' => $idusuario,//""
        'fecha_crea' => $fecha_crea,//""
        ], 'idpqrs = :up', [':up' => $idpqrs]); // indicamos que lo que se va a buscar esta en la variable cedula o primery key
        alert("los datos Fueron Modificados Exitosamente"); // mostramos un mensaje de alert para decir que se actualizo
        }
        $this->render('reportes/consultapqrsmodifi', //renderizamos todo en la pagina consultaclientes
               array(
                   'respuestamodifi'=>$tablas, // asignamos ese render de tablas a respuesta
                ));
        }
      //-------------------------------------control de acceso insertar------------------------------------------------
    public function actionControldeacceso (){
    	$controles = new GestionControlAcceso();
    	$fechauno='';
  		$fechados='';
  		$puntoparqueo_id='';
  		$vehiculos_placa='';
  		

  		if(isset($_POST['GestionControlAcceso'])){ // Modelo Eventos

        $controles->attributes=$_POST['GestionControlAcceso'];

        if( $controles->validate()){ // valida el modelo y sus atributos
        	//atributos del modelo
	        $fechauno=$controles->fecha_ingreso;
			$fechados=$controles->fecha_salida;
			$puntoparqueo_id=$controles->puntoparqueo_id;
			$vehiculos_placa=$controles->vehiculos_placa;
	        $setcontrol=$controles->setGestionControlAcceso($fechauno,$fechados,$puntoparqueo_id,$vehiculos_placa); // SE ENVIA LOS CAMPOS A LA ACCION DEL MODELO 
	        $controles->unsetAttributes();// limpia los campos
        }   
        }
        $consultapuntopar = $controles->getConsultapunto();
        $consultalistadopunto = $controles->getListadopunto();
 		$this->render('controldeacceso', 
               array(
                  'controles' =>$controles,
                  'consultapuntopar'=>$consultapuntopar,
                  'consultalistadopunto'=>$consultalistadopunto,

                ));
    }
    //--------------------------------------------modificar control acceso---------------------------------------------
	public function actionConsultacontrol ($modificaringreso,$opcioncontrol,$fecha_ingreso,$fecha_salida,$puntoparqueo_id,$placa){ // setraen los datos desde el ajax correspondientes a cada variable
	
     if($opcioncontrol==1){ // en el ajax se creo una variable de opcines la cual se extrae en este punto correspondiente a la caja buscar
     $tablas=''; //creamos variable de retorno de informacion
     $sql='';
     if(isset($_GET['modificaringreso'])){ //si la variable consulta clientes contiene informacion
       // creamos variable de consulta
        $sq= $_GET['modificaringreso'];//asignamos la informacion recogida de la variable de busqueda
        $sql = "SELECT SE.vehiculos_placa,SE.puntoparqueo_id,SE.fecha_ingreso,SE.fecha_salida
		FROM ingresos_salidas SE

		WHERE SE.fecha_ingreso='' AND SE.vehiculos_placa = '".$sq."' ORDER BY SE.fecha_salida ASC";
      	//cnosulta de busqueda
        }
        $data=Yii::app()->db->createCommand($sql)->queryAll(); //conectamos a la DB asignandola a la variable data
        foreach($data as $value=>$dt){}// creamos una for indicando que la data va a tener una alias para mostrar datos a la variable dt
         //llenamos la variable tablas con un formulario para la midifcacion en este foreach traemos lo que tenemos en la consulta y a cada dt le asignamos un campo de la DB
        $tablas.='
        <div class="form-group">
        <label>Placa</label>
        <input type="text" class="form-control caja" id="placa"  value="'.$dt["vehiculos_placa"].'" readonly>
        <label>Punto de Parqueo</label>
        <input type="text" class="form-control caja" id="puntoparqueo_id"  value="'.$dt["puntoparqueo_id"].'" readonly>
        <label>Fecha Ingreso</label>
        <input type="date" class="form-control" id="fecha_ingreso"  value="'.$dt["fecha_ingreso"].'">
        <label>Fecha Salida</label>
        <input type="date" class="form-control" id="fecha_salida"  value="'.$dt["fecha_salida"].'" readonly>
        <label>Clíck para Modificar</label><br>
        <input class="form-control" type="button" id="modifcarcontrol" value="Modifcar" style="width:50%;">
        </div>
              	';
        }elseif($opcioncontrol==2){//condicion de la variable opcion en estado 2 del ajax
            if ($fecha_ingreso !='') {
                # code...
      
    	Yii::app()->db->createCommand()->update('ingresos_salidas',[ //hacemos conexion con la DB en modo update
        'fecha_ingreso' => $fecha_ingreso, //asignamos un valor a cada variable que proviene del ajax
        'fecha_salida' => $fecha_salida, //""
        'puntoparqueo_id' => $puntoparqueo_id,//""
        ], 'vehiculos_placa = :up', [':up' => $placa]); // indicamos que lo que se va a buscar esta en la variable cedula o primery key
        alert("los datos Fueron Modificados Exitosamente"); // mostramos un mensaje de alert para decir que se actualizo
        }else{
            alert("los datos No Fueron Modificados Verificar");
        }
        }
 		$this->render('vehiculos/consultacontrol', //renderizamos todo en la pagina consultaclientes
               array(
                   'respuestacontrol'=>$tablas, // asignamos ese render de tablas a respuesta
                ));
        }

        public function actionGaleriapersonal(){

        $this->render('galeriapersonal', //renderizamos todo en la pagina consultaclientes
               array(
                   //'respuestacontrol'=>$tablas, // asignamos ese render de tablas a respuesta
                ));	
        }
        public function actionLimpiarSorteo(){

            $limpiar="CALL limpiar();";
            $data = Yii::app()->db->createCommand($limpiar)->execute();
         $this->redirect('sorteo',
                array( 
           
                ));           
        }
         public function actionGenerarSorteo(){

            $sortear="CALL sortear();";
            $data=Yii::app()->db->createCommand($sortear)->queryAll();
           $this->redirect('sorteo',
                array( 
           
                ));                     
        }
         public function actionGuardarSorteo(){

            $guardar="CALL guardarsorteo();";
            $data=Yii::app()->db->createCommand($guardar)->queryAll();
           
                      
         // $this->redirect(array('site/sorteo'));  
          $this->redirect('sorteo',
                array( 
           
                ));               
        }
        public function actionVersorteos(){
            $modelsorteo = new Sorteo();
            $consultasorteo = $modelsorteo->getVersorteo();

            $this->render('versorteos',array(
                    'consultasorteo'=>$consultasorteo,
                    'modelsorteo'=>$modelsorteo,
                ));
        }
        public function actionSorteo(){

            $modelsorteo = new Sorteo();
            $consultasorteo = $modelsorteo->getVersorteo();
            $consultagenerador = $modelsorteo->getVergeneadorSorteo();
            $consultaregistrodos = $modelsorteo->getRegistrosorteodos();

        	$this->render('sorteo',
        		array(
                    'consultasorteo'=>$consultasorteo,
                    'modelsorteo'=>$modelsorteo,
                    'consultagenerador'=>$consultagenerador,
                    'consultaregistrodos'=>$consultaregistrodos
        		));
        }
        public function actionAbout(){
           
        	$this->render('about',
        		array( 
           
        		));
        }
       

        public function actionPqrs ()
        {
                $modelpqrs = new PqrsModel();    
              
                $asunto='';
                $mensaje='';
                $correo='';
                $adjunto='sin archivo';
                $idestadopqrs='';
                $idusuario='';
                $fecha_crea='';
                $setpqrs='';
    
                $consultpqrs = $modelpqrs->getPqrs();//llamdado de las consulta y los datos en get
                $consultestadopqrs = $modelpqrs->getPqrs();//llamdado de las consulta y los datos en get
                $mostrarpqrs = $modelpqrs->getIDPQRS();//llamdado de las consulta y los datos en get
               
                // aqui ingresamos insertar los eventos
                if(isset($_POST['PqrsModel'])){ // Modelo Eventos
                    $modelpqrs->attributes=$_POST['PqrsModel'];
                  
                    if( $modelpqrs->validate()){ // valida el modelo y sus atributos
                      
                        $asunto=$modelpqrs->asunto;
                        $mensaje=$modelpqrs->mensaje;
                        $correo=$modelpqrs->correo;
                        $subirdocu=CUploadedFile::getInstance($modelpqrs,'adjunto');//recoge la imagen subida con el nombre
                        if (isset($subirdocu)) {
                        $ruta ="{$subirdocu}";//guardamos el nombre de la imagen en temporal
                        $subirdocu->saveAs(Yii::app()->basePath.'/../imagenes/documentos/'.$ruta);//movemos la imagen a la ruta
                        $adjunto='/imagenes/documentos/'.$ruta;
                        }else{
                        $adjunto='sin archivo';
                        }
                        $idestadopqrs=$modelpqrs->idestadopqrs;
                        $idusuario=$modelpqrs->idusuario;
                        $fecha_crea=$modelpqrs->fecha_crea;
                        $setpqrs=$modelpqrs->setPqrs($asunto,$mensaje,$correo, $adjunto,$idestadopqrs,$idusuario,$fecha_crea);
                        $modelpqrs->unsetAttributes();// limpia los campos
                    }
                }
                
                $this->render('pqrs', array(//se renderiza la pagina
                "consultpqrs"=>$consultpqrs, // se renderiza la consula
                "consultestadopqrs"=>$consultestadopqrs,
                "modelpqrs"=>$modelpqrs,
                "mostrarpqrs"=>$mostrarpqrs // se renderiza el modelo
                )
                ); // variable de asignacion modelo
        }
        //--------------------------------- pdf pqrs --------------------------
        public function actionGenerarpqrsPdf()
            {
            $model =PqrsModel::model()->findAll(); //Consulta para buscar todos los registros
            $mPDF1 = Yii::app()->ePdf->mpdf('utf-8','A4','','',15,15,35,25,9,9,'P'); //Esto lo pueden configurar como quieren, para eso deben de entrar en la web de MPDF para ver todo lo que permite.
            $mPDF1->useOnlyCoreFonts = true;
            $mPDF1->SetTitle("TIMIZA DEL PARQUE - Reporte");
            $mPDF1->SetAuthor("SIONWEBSITES");
            $mPDF1->SetWatermarkText("SION");
            $mPDF1->showWatermarkText = true;
            $mPDF1->watermark_font = 'Colombia - Bogota D.C';
            $mPDF1->watermarkTextAlpha = 0.1;
            $mPDF1->SetDisplayMode('fullpage');
            $mPDF1->WriteHTML($this->renderPartial('pdfReportpqrs', array('model'=>$model), true)); //hacemos un render partial a una vista preparada, en este caso es la vista pdfReport
            $mPDF1->Output('Reporte'.date('YmdHis'),'I');  //Nombre del pdf y parámetro para ver pdf o descargarlo directamente.
            exit;
            }
        //------------------------ pqrs admin --------------------------------


        public function actionPqrsadmin ()
        {
              if(isset($_GET["excelpqrs"])){ // llamamos el archivo que viene de la vista Excel
                $model= PqrsModel::model()->findAll(); // buscamos la consulta general de todo el documento
                $content=$this->renderPartial("excelpqrs",array("model"=>$model),true); // creamos una renderizado temporal del excel
                Yii::app()->request->sendFile("pqrs.xls",$content); // guardamos ese render como y se renombrar al guardar si se desea
                }   

                $modelpqrs = new PqrsModel();    
                $asunto='';
                $mensaje='';
                $correo='';
                $adjunto='sin archivo';
                $idestadopqrs='';
                $idusuario='';
                $fecha_crea='';
                $setpqrs='';
    
                $consultapqrs = $modelpqrs->getPqrs();//llamdado de las consulta y los datos en get
                $consultestadopqrs = $modelpqrs->getPqrsDos();//llamdado de las consulta y los datos en get
                $mostrarpqrs = $modelpqrs->getIDPQRS();//llamdado de las consulta y los datos en get
               
                // aqui ingresamos insertar los eventos
                if(isset($_POST['PqrsModel'])){ // Modelo Eventos
                    $modelpqrs->attributes=$_POST['PqrsModel'];
                  
                    if( $modelpqrs->validate()){ // valida el modelo y sus atributos
                        $asunto=$modelpqrs->asunto;
                        $mensaje=$modelpqrs->mensaje;
                        $correo=$modelpqrs->correo;
                        $subirdocu=CUploadedFile::getInstance($modelpqrs,'adjunto');//recoge la imagen subida con el nombre
                        if (isset($subirdocu)) {
                            # code...
                          $ruta ="{$subirdocu}";//guardamos el nombre de la imagen en temporal
                        $subirdocu->saveAs(Yii::app()->basePath.'/../imagenes/documentos/'.$ruta);//movemos la imagen a la ruta
                        $adjunto='/imagenes/documentos/'.$ruta;
                        }
                        else{
                            $adjunto='Sin archivo';
                        }
                        $idestadopqrs=$modelpqrs->idestadopqrs;
                        $idusuario=$modelpqrs->idusuario;
                        $fecha_crea=$modelpqrs->fecha_crea;
                        $setpqrs=$modelpqrs->setPqrs($asunto,$mensaje,$correo, $adjunto,$idestadopqrs,$idusuario,$fecha_crea);
                        $modelpqrs->unsetAttributes();// limpia los campos
                    }
                }
                
                $this->render('pqrsadmin', array(//se renderiza la pagina
                "consultapqrs"=>$consultapqrs, // se renderiza la consula
                "consultestadopqrs"=>$consultestadopqrs,
                "modelpqrs"=>$modelpqrs, // se renderiza el modelo
                "mostrarpqrs"=>$mostrarpqrs
                )
                ); // variable de asignacion modelo
        }
        public function actionGrafica(){

          $modelgraficos = new Informes;
          $consultacantidaduser = $modelgraficos ->getInformesuser();
    
          $this->render('grafica',
            array(
              'modelgraficos'=>$modelgraficos,
              'consultacantidaduser'=>$consultacantidaduser
            ));
        }

      

}



