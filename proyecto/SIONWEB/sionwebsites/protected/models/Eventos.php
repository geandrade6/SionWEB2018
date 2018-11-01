<?php
class Eventos extends CActiveRecord{
	//	class LoginForm extends CFormModel
 // creamos las variables de tipo publico o privado 
  private $connection;
  public $getEventos;
  public $getEventosDos;
  public $setEventos;

  public $titulo;
  public $mensaje;
  public $subtitulo;
  public $submensaje;
  public $imagenes;
  public $estado; 

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
		return 'eventos';
	}
  //Reglas de validación
  public function rules(){
    return array(
            array('titulo,mensaje,subtitulo,submensaje,estado','safe'),
             
            array('imagenes','file','types'=>'jpg, jpeg, png, gif'),
            
      
        );
      
  }
  //Heredamos del modelo
  public static function model($className=__CLASS__){
        return parent::model($className);
  }

  //configuracion personal
  
  public function getEventos(){ 
    	
      $consultaeventos ="SELECT * FROM eventos WHERE  estado = 0";


      $this->getEventos=Yii::app()->db->createCommand($consultaeventos)->queryAll();// consulta base de datos Mysql            
 
     return $this->getEventos;// devuelve el valor de la funcion get de el modelo
  } 
   public function getEventosDos(){ 
      
      $consultaeventosDos ="SELECT * FROM eventos WHERE  estado = 1";
      

      $this->getEventosDos=Yii::app()->db->createCommand($consultaeventosDos)->queryAll();// consulta base de datos Mysql            
 
     return $this->getEventosDos;// devuelve el valor de la funcion get de el modelo
  }    
        //enviar informacion 
  public function setEventos($titulo,$mensaje,$subtitulo,$submensaje,$imagenes,$estado){
      

        if ($titulo!='' && $mensaje!='' && $subtitulo!='' && $submensaje!='') {
           
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
        }
        }   
  
}
