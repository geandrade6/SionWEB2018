<?php
class GestionUsuarios extends CActiveRecord{
	//	class LoginForm extends CFormModel
 // creamos las variables de tipo publico o privado 
  private $connection;
  public $getEstado;
  public $getTipoparqueo;
  public $getGestionusuarios;
  public $getEstadoUser;

  public $cedulausuarios;
  public $nombreusuarios;
  public $apellidousuarios;
  public $telefonousuarios;
  public $celularusuarios;
  public $correousuarios;
  public $contrasenausuarios;
  public $estadousuarios;
  public $observacionesusuarios;
  public $rolesusuarios;
  public $tiposvehiculosuser;
  public $fecharegistrouser;
  public $activaruser;

  
  public function __construct(){
        //Lanzamos la conexión a la base de datos
       $this->connection=new CDbConnection(
                //Cogemos la configuración asignada en config/main.php
            Yii::app()->db->connectionString,
            Yii::app()->db->username,
         	Yii::app()->db->password
       );
        //Activamos la conexión
     		$this->connection->active=true;
        //Esto nos permite utilizar el Query Builder y las consultas normales
  }
     /**
	 * @return string the associated database table name
	 */
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}
  //Reglas de validación
  public function rules(){
    return array(
              array('cedula', 
                  'required', 
                  "message"=>"El campo Cedula es obligatorio"),
                array('nombre', 
                  'required', 
                  "message"=>"El campo nombre es obligatorio"),
                 array('apellido', 
                  'required', 
                  "message"=>"El campo apellido es obligatorio"),
                  array('telefono', 
                  'safe', 
                  "message"=>"El campo telefono es obligatorio"),
                   array('celular', 
                  'required', 
                  "message"=>"El campo celular es obligatorio"),
                    array('correo', 
                  'required', 
                  "message"=>"El campo correo es obligatorio"),
                     array('contrasena', 
                  'required', 
                  "message"=>"El campo contrasena es obligatorio"),
                      array('estado_usuario', 
                  'required', 
                  "message"=>"El campo estado es obligatorio"),
                       array('observaciones', 
                  'safe', 
                  "message"=>"El campo estado es obligatorio"),
                        array('roles_id', 
                  'required', 
                  "message"=>"El campo roles es obligatorio"),
                         array('tipos_id', 
                  'required', 
                  "message"=>"El campo tipo es obligatorio"),
                          array('fecha_registro', 
                  'required', 
                  "message"=>"El campo Fecha es obligatorio"),
                           array('activar_user', 
                  'required', 
                  "message"=>"El campo Activar es obligatorio"),
      
        );
      
  }
  //Heredamos del modelo
  public static function model($className=__CLASS__){
        return parent::model($className);
  }

  //configuracion personal
  
  public function getGestionusuarios(){ 
    	
      $consultagestionuser ="SELECT U.nombre,U.apellido,U.telefono,U.celular,U.correo,R.nombre_rol FROM usuarios U  
      inner join roles R on R.id = U.roles_id WHERE roles_id  in ('4','5','6' )";


      $this->getGestionusuarios=Yii::app()->db->createCommand($consultagestionuser)->queryAll();// consulta base de datos Mysql            
 
     return $this->getGestionusuarios;// devuelve el valor de la funcion get de el modelo
  } 

  public function getEstado(){ // funcion para el combo box
    $consultaRol="SELECT id, nombre_rol FROM roles ordeR by id asc";

     $this->getEstado=Yii::app()->db->createCommand($consultaRol)->queryAll();// consulta base de datos 
        
       
       return $this->getEstado;// devuelve el valor de la funcion get 
  }

   public function getEstadoUser(){ // funcion para el combo box
    $consultaEstadoUser="SELECT activar_user, estado_user FROM estado_usuarios ordeR by activar_user asc";

     $this->getEstadoUser=Yii::app()->db->createCommand($consultaEstadoUser)->queryAll();// consulta base de datos 
        
       
       return $this->getEstadoUser;// devuelve el valor de la funcion get 
  }

   public function getTipoparqueo(){ // funcion para el combo box
    $consultatipoparqueo="SELECT id, tipo FROM tipos ordeR by id asc";

     $this->getTipoparqueo=Yii::app()->db->createCommand($consultatipoparqueo)->queryAll();// consulta base de datos 
        
       
       return $this->getTipoparqueo;// devuelve el valor de la funcion get 
  }
 
        //enviar informacion 
  public function setGestionusuarios($cedulausuarios,$nombreusuarios,$apellidousuarios,$telefonousuarios,$celularusuarios,$correousuarios,$contrasenausuarios,$estadousuarios,$observacionesusuarios,$rolesusuarios,$tiposvehiculosuser,$fecharegistrouser,$activaruser){
      

        if ($cedulausuarios !='' && $nombreusuarios !='' && $apellidousuarios !='' && $celularusuarios !='' && $correousuarios !='' && $contrasenausuarios !='' && $estadousuarios !='' && $rolesusuarios !='' && $tiposvehiculosuser !='' && $fecharegistrouser!='' && $activaruser !='')  {

          if ($estadousuarios == $activaruser) {
            # code...
          
           Yii::app()->db->createCommand()->insert('usuarios', [
            
          'cedula'=>$cedulausuarios,
          'nombre'=> $nombreusuarios,
          'apellido'=>$apellidousuarios,
          'telefono'=> $telefonousuarios,
          'celular'=> $celularusuarios,
          'correo'=> $correousuarios,
          'contrasena'=> $contrasenausuarios,
          'estado_usuario'=> $estadousuarios,
          'observaciones'=> $observacionesusuarios,
          'roles_id'=> $rolesusuarios,
          'tipos_id'=>  $tiposvehiculosuser,
          'fecha_registro'=>  $fecharegistrouser,
          'activar_user'=> $activaruser,

            ]);

           } else{ echo '<Script> alert("digite el mismo tipo de activacion");</Script>';}
           
         
        }
        }  
  public function getUpdateGestionusuarios($cedulausuarios,$nombreusuarios,$apellidousuarios,$telefonousuarios,$celularusuarios,$correousuarios,$contrasenausuarios,$estadousuarios,$observacionesusuarios,$rolesusuarios,$tiposvehiculosuser,$fecharegistrouser,$activaruser){
      

        if ($cedulausuarios !='' && $nombreusuarios !='' && $apellidousuarios !='' && $celularusuarios !='' && $correousuarios !='' && $contrasenausuarios !='' && $estadousuarios !='' && $rolesusuarios !='' && $tiposvehiculosuser !='' && $fecharegistrouser!='' && $activaruser !='')  {

          if ($estadousuarios == $activaruser) {
            # code...
          
           Yii::app()->db->createCommand()->update('usuarios', [
            
          
          'nombre'=> $nombreusuarios,
          'apellido'=>$apellidousuarios,
          'telefono'=> $telefonousuarios,
          'celular'=> $celularusuarios,
          'correo'=> $correousuarios,
          'contrasena'=> $contrasenausuarios,
          'estado_usuario'=> $estadousuarios,
          'observaciones'=> $observacionesusuarios,
          'roles_id'=> $rolesusuarios,
          'tipos_id'=>  $tiposvehiculosuser,
          'fecha_registro'=>  $fecharegistrouser,
          'activar_user'=> $activaruser,

            ], 'cedula = :up', [':up' => $cedulausuarios]);

           } else{ echo '<Script> alert("digite el mismo tipo de activacion");</Script>';}
           
         
        }
        } 
  
}
