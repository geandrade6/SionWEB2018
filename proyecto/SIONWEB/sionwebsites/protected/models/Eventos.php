<?php
class Eventos extends CActiveRecord{
  //  class LoginForm extends CFormModel
 // creamos las variables de tipo publico o privado importante la de coneccion
  private $connection;
  //getters
  public $getEventos;
  public $getEventosDos;
  public $getEventosEstado;
  public $getEventosTres;
  //setters
  public $setEventos;
  //variables normales
  public $titulo;
  public $mensaje;
  public $subtitulo;
  public $submensaje;
  public $imagenes;
  public $idestadoeventos; 
  public $fecha_registro; 

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
            
            array('titulo','required',"message"=>"El campo Título es obligatorio"),
            array('titulo', 'match', 'pattern' => "/^.{5,25}$/", 'message' => 'Titulo: Mínimo 5 y máximo 25 caracteres'),
            array('mensaje','required',"message"=>"El campo Mensaje Principal es obligatorio"),
            array('subtitulo','required',"message"=>"El campo Sub-Título es obligatorio"),
            array('subtitulo', 'match', 'pattern' => "/^.{5,40}$/", 'message' => 'Subtitulo: Mínimo 5 y máximo 40 caracteres'),
            array('subtitulo', 'match', 'pattern' => "/^.[0-9a-záéíóúñ\s]+$/i", 'message' => 'Subtitulo: Sólo se aceptan letras ó Números'),
            array('submensaje','required',"message"=>"El campo Sub-Mensaje es obligatorio"),
            array('idestadoeventos','required',"message"=>"El campo Estados es obligatorio"),
            array('fecha_registro','required',"message"=>"El campo Fecha es obligatorio"),
            array('imagenes', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
            

        );
      
  }
  //Heredamos del modelo
  public static function model($className=__CLASS__){
        return parent::model($className);
  }
  //configuracion personal
  
  public function getEventos(){ 
      
      $consultaeventos ="SELECT * FROM eventos WHERE  idestadoeventos = 1 ORDER BY id DESC";
      $this->getEventos=Yii::app()->db->createCommand($consultaeventos)->queryAll();// consulta base de datos Mysql            
 
     return $this->getEventos;// devuelve el valor de la funcion get de el modelo
  } 
   public function getEventosDos(){ 
      
      $consultaeventosDos ="SELECT * FROM eventos WHERE  idestadoeventos = 2 ORDER BY id ASC";
      
      $this->getEventosDos=Yii::app()->db->createCommand($consultaeventosDos)->queryAll();// consulta base de datos Mysql            
 
     return $this->getEventosDos;// devuelve el valor de la funcion get de el modelo
  }  
  public function getEventosTres(){ 
      
      $consultaeventosTres ="SELECT * FROM eventos WHERE  idestadoeventos ORDER BY id ASC" ;
      
      $this->getEventosTres=Yii::app()->db->createCommand($consultaeventosTres)->queryAll();// consulta base de datos Mysql            
 
     return $this->getEventosTres;// devuelve el valor de la funcion get de el modelo
  }  
 public function getEventosEstado(){ // funcion para el combo box
    $consultaesteventos="SELECT idestadoeventos, nombre_estado_eventos FROM estadoeventos order by idestadoeventos asc";

     $this->getEventosEstado=Yii::app()->db->createCommand($consultaesteventos)->queryAll();// consulta base de datos 
        
       return $this->getEventosEstado;// devuelve el valor de la funcion get 
  } 
        //enviar informacion 
        //$titulo,$mensaje,$subtitulo,$submensaje,$imagenes,$idestadoeventos,$fecha_registro
public function setEventos($titulo,$mensaje,$subtitulo,$submensaje, $imagenes,$idestadoeventos,$fecha_registro)
{

  try {
    if ($titulo!='' && $mensaje!='' && $subtitulo!='' && $submensaje!='' && $idestadoeventos!='' && $fecha_registro!='') {
           
      Yii::app()->db->createCommand()->insert('eventos', 
      [
            'titulo'=>$titulo,
            'mensaje'=>$mensaje,
            'subtitulo'=>$subtitulo,
            'submensaje'=>$submensaje,
            'idestadoeventos'=>$idestadoeventos,
            'imagenes'=>$imagenes,
            'fecha_registro'=>$fecha_registro,

      ]);
      echo "<script>alert('Registro del evento correcto',document.location.href='eventos');</script>";
      }
      else
      {
            echo "<script>alert('no tiene datos');</script>";
      }
  } catch (Exception $e) {
     echo "<script>alert('Verificar que los datos esten bien diligenciados');</script>";
  }
      
}
  
}