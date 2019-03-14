<?php
class GestionUsuarios extends CActiveRecord{
	//	class LoginForm extends CFormModel
  // creamos las variables de tipo publico o privado 
  private $connection;
  //getters
  public $getEstado;
  public $getTipoparqueo;
  public $getGestionusuarios;
  public $getEstadoUser;
  //variables normales
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
              array('cedula','required',"message"=>"El campo Cedula es obligatorio"),
              array('cedula', 'match', 'pattern' => "/^.{6,10}$/", 'message' => 'Cedula: Mínimo 6 y máximo 10 caracteres'),
              array('cedula', 'match', 'pattern' => "/^.[0-9a-z]+$/i", 'message' => 'Cedula: Sólo se aceptan letras y numeros no signos'),
              array('nombre','required',"message"=>"El campo nombre es obligatorio"),
              array('nombre', 'match', 'pattern' => "/^.{15,30}$/", 'message' => 'Nombre: Mínimo 15 y máximo 30 caracteres'),
              array('nombre', 'match', 'pattern' => "/^.[a-záéíóúñ]+$/i", 'message' => 'Nombre: Sólo se aceptan letras'),
              array('apellido','required',"message"=>"El campo apellido es obligatorio"),
              array('apellido', 'match', 'pattern' => "/^.{15,40}$/", 'message' => 'Apellido: Mínimo 15 y máximo 40 caracteres'),
              array('apellido', 'match', 'pattern' => "/^.[a-záéíóúñ]+$/i", 'message' => 'Apellido: Sólo se aceptan letras'),
              array('telefono','safe',"message"=>"El campo telefono es obligatorio"),
              array('telefono', 'match', 'pattern' => "/^.{8,15}$/", 'message' => 'Telefono: Mínimo 8 y máximo 15 caracteres'),
              array('telefono', 'match', 'pattern' => "/^.[0-9]+$/i", 'message' => 'Telefono: Sólo se aceptan letras'),
              array('celular','required',"message"=>"El campo celular es obligatorio"),
              array('celular', 'match', 'pattern' => "/^.{8,15}$/", 'message' => 'Celular: Mínimo 8 y máximo 15 caracteres'),
              array('celular', 'match', 'pattern' => "/^.[0-9]+$/i", 'message' => 'Celular: Sólo se aceptan letras'),
              array('correo','required',"message"=>"El campo correo es obligatorio"),
              array('correo', 'email'),
              array('password','required',"message"=>"El campo contrasena es obligatorio"),
              array('password', 'match', 'pattern' => "/^.{5,8}$/", 'message' => 'Contraseña: Mínimo 5 y máximo 8 caracteres'),
              array('estado_usuario','required',"message"=>"El campo estado es obligatorio"),
              array('observaciones','safe',"message"=>"El campo estado es obligatorio"),
               array('observaciones', 'match', 'pattern' => "/^.{20,500}$/", 'message' => 'Observaciones: Mínimo 20 y máximo 500 caracteres'),
              array('observaciones', 'match', 'pattern' => "/^.[0-9a-záéíóúñ]+$/i", 'message' => 'Observaciones: Sólo se aceptan letras y Números'),
              array('roles_id','required',"message"=>"El campo roles es obligatorio"),
              array('tipos_id','required',"message"=>"El campo tipo es obligatorio"),
              array('fecha_registro','required',"message"=>"El campo Fecha es obligatorio"),
              array('activar_user','required',"message"=>"El campo Activar es obligatorio"),
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

       //____________________________________________________ prodecimiento almacenado-----------

//$SQL = "TU QUERY, PROCEDIMIENTO O FUNCION";

//Yii::app()->db->createCommand( $SQL )->execute();


 //$result = \Yii::$app->db->createCommand("CALL storedProcedureName(:paramName1, :paramName2)") 
                    //  ->bindValue(':paramName1' , $param1 )
                     // ->bindValue(':paramName2', $param2)
                    //  ->execute();      
  }
 
        //enviar informacion 
  public function setGestionusuarios($cedulausuarios,$nombreusuarios,$apellidousuarios,$telefonousuarios,$celularusuarios,$correousuarios,$contrasenausuarios,$estadousuarios,$observacionesusuarios,$rolesusuarios,$tiposvehiculosuser,$fecharegistrouser,$activaruser){
        if ($cedulausuarios !='' && $nombreusuarios !='' && $apellidousuarios !='' && $celularusuarios !='' && $correousuarios !='' && $contrasenausuarios !='' && $estadousuarios !='' && $rolesusuarios !='' && $tiposvehiculosuser !='' && $fecharegistrouser!='' && $activaruser !='')  
        {
         if ($estadousuarios == $activaruser) {
            # code...
           Yii::app()->db->createCommand()->insert('usuarios', [
          'cedula'=>$cedulausuarios,
          'nombre'=> $nombreusuarios,
          'apellido'=>$apellidousuarios,
          'telefono'=> $telefonousuarios,
          'celular'=> $celularusuarios,
          'correo'=> $correousuarios,
          'password'=> $contrasenausuarios,
          'estado_usuario'=> $estadousuarios,
          'observaciones'=> $observacionesusuarios,
          'roles_id'=> $rolesusuarios,
          'tipos_id'=>  $tiposvehiculosuser,
          'fecha_registro'=>  $fecharegistrouser,
          'activar_user'=> $activaruser,
            ]);
            Yii::app()->db->createCommand()->insert('usuarios_respaldo', [
          'cedula'=>$cedulausuarios,
          'nombre'=> $nombreusuarios,
          'apellido'=>$apellidousuarios,
          'telefono'=> $telefonousuarios,
          'celular'=> $celularusuarios,
          'correo'=> $correousuarios,
          'password'=> $contrasenausuarios,
          'estado_usuario'=> $estadousuarios,
          'observaciones'=> $observacionesusuarios,
          'roles_id'=> $rolesusuarios,
          'tipos_id'=>  $tiposvehiculosuser,
          'fecha_registro'=>  $fecharegistrouser,
          'activar_user'=> $activaruser,
            ]);
            echo '<Script> alert("Registro del usuario correctamente");</Script>';
           } else{ echo '<Script> alert("digite el mismo tipo de activacion");</Script>';}
        }
        } 
}
