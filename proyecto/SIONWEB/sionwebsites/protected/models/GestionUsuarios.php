<?php
class GestionUsuarios extends CActiveRecord{
	//	class LoginForm extends CFormModel
 // creamos las variables de tipo publico o privado 
  private $connection;
  public $getEstado;
  public $getTipoparqueo;

  
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

   public function getTipoparqueo(){ // funcion para el combo box
    $consultatipoparqueo="SELECT id, tipo FROM tipos ordeR by id asc";

     $this->getTipoparqueo=Yii::app()->db->createCommand($consultatipoparqueo)->queryAll();// consulta base de datos 
        
       
       return $this->getTipoparqueo;// devuelve el valor de la funcion get 
  }
 
        //enviar informacion 
  public function setGestionusuarios(/*$titulo,$mensaje,$subtitulo,$submensaje,$imagenes,$estado*/){
      

      /*  if ($titulo!='' && $mensaje!='' && $subtitulo!='' && $submensaje!='') {
           
           Yii::app()->db->createCommand()->insert('eventos', [
            
            'titulo'=>$titulo,
            'mensaje'=>$mensaje,
            'subtitulo'=>$subtitulo,
            'submensaje'=>$submensaje,
            'imagenes'=>$imagenes,
            'estado'=>$estado,

            ]);
         
        }else {

              echo "<script>alert('no tiene datos');</script>";
        }*/
        }  
  
}
