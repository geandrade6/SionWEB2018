<?php
class PqrsModel extends CActiveRecord{
  //  class LoginForm extends CFormModel
 // creamos las variables de tipo publico o privado importante la de coneccion
  private $connection;
  //getters
  public $getPqrs;
   public $getPqrsDos;
 
  //setters
  public $setPqrs;
  //variables normales
  public $idpqrs;
  public $asunto;
  public $mensaje;
  public $correo;
  public $adjunto;
  public $idestadopqrs;
  public $idusuario;
  public $fecha_crea;

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
    return 'pqrs';
  }
  //Reglas de validación
  public function rules(){
    return array(
            
  
        //solo letras
        array('asunto','required','message'=>'Asunto campo es obligatorio'),
        array('asunto', 'match', 'pattern' => "/^.{10,30}$/", 'message' => 'Asunto: Mínimo 10 y máximo 30 caracteres'),
        array('asunto', 'match', 'pattern' => "/^.[a-z]+$/i", 'message' => 'Asunto: Sólo se aceptan letras '),
        //solo letras, numeros y tildes
        array('mensaje','required','message'=>'Mensaje campo es obligatorio'),
        array('mensaje', 'match', 'pattern' => "/^.{5,255}$/", 'message' => 'Mensaje: Mínimo 5 y máximo 255 caracteres'),
        array('mensaje', 'match', 'pattern' => "/^.[0-9a-záéíóúñ]+$/i", 'message' => 'Mensaje: Sólo se aceptan letras y numeros no signos'),
        //solo carreo
        array('correo','required','message'=>'Correo campo es obligatorio'),
        array('correo', 'match', 'pattern' => "/^.{5,80}$/", 'message' => 'Correo: Mínimo 5 y máximo 80 caracteres'),
        array('correo','email'),
        //archivo adjunto
        array('adjunto', 'file','types'=>'','maxSize' => 1024*1024*5,'allowEmpty'=>true, 'on'=>'update','tooMany' => 'El máximo de archivos permitidos son {limit}'), 
        //array('adjunto','required','message'=>'Adjunto: campo es obligatorio'),
        //pqrs
        array('idestadopqrs','required','message'=>'Estado: campo es obligatorio'),
        //cedula
        array('idusuario','required','message'=>'Cedula: campo es obligatorio'),
        array('idusuario', 'match', 'pattern' => "/^.{7,18}$/", 'message' => 'Cedula: Mínimo 7 y máximo 18 caracteres'),
        array('idusuario', 'match', 'pattern' => "/^.[0-9a-z]+$/i", 'message' => 'Cedula: Sólo se aceptan letras y numeros '),
        //fecha
        array('fecha_crea','required','message'=>'Fecha campo es obligatorio'),
        //array('fecha_crea','date','message'=>'Verifique la fecha'),
         

        );
      
  }
  //Heredamos del modelo
  public static function model($className=__CLASS__){
        return parent::model($className);
  }
  //configuracion personal
  
  public function getPqrs(){ 
      
    $consultapqrs ="SELECT P.idpqrs,P.asunto,P.mensaje,P.correo,P.adjunto,E.nombre_estado_pqr,U.nombre,P.fecha_crea FROM pqrs P
    INNER JOIN estadopqrs E ON E.idestadopqrs = P.idestadopqrs
    INNER JOIN usuarios U ON U.cedula = P.idusuario
    WHERE E.idestadopqrs != 4";
    $this->getPqrs=Yii::app()->db->createCommand($consultapqrs)->queryAll();// consulta base de datos Mysql            

     return $this->getPqrs;// devuelve el valor de la funcion get de el modelo
  } 
  public function getPqrsDos(){ 
      
      $consultestadopqrs ="SELECT * FROM estadopqrs";
    $this->getPqrsDos=Yii::app()->db->createCommand($consultestadopqrs)->queryAll();// consulta base de datos Mysql            
 
     return $this->getPqrsDos;// devuelve el valor de la funcion get de el modelo
  } 
  
public function setPqrs($asunto,$mensaje,$correo,$adjunto,$idestadopqrs,$idusuario,$fecha_crea)
{
          
      Yii::app()->db->createCommand()->insert('pqrs', 
      [
        
        'asunto'=> $asunto,
        'mensaje'=>$mensaje,
        'correo'=> $correo,
        'adjunto'=> $adjunto,
        'idestadopqrs'=> $idestadopqrs,
        'idusuario'=> $idusuario,
        'fecha_crea'=> $fecha_crea,

      ]);
      echo '<Script> alert("Registro del PQRS correcto");</Script>';
     
      
  }
  
}
?>