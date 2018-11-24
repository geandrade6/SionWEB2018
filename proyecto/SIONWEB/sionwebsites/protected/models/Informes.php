<?php
class Informes extends CActiveRecord{
// creamos las variables de tipo publico o privado importante la de coneccion
  private $connection;

// de bajo de este van getters

// de bajo de este van setters

// de bajo de este van variables normales

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

public function tableName() // esto indica que vamos a trabajar con una tabla principal
  {
    return 'ingresos_salidas';// rertnamos la tabla osea la que va en la base de datos
  }

//Reglas de validación
  public function rules(){//estas reglas son para formularios donde se inserta informacion para enviar
    return array(
            //array('aqui va el nombre del campo de la BD se utiliza coma y comillas para otro campo','safe'),
            
        );
      
  }
 //Heredamos del modelo
  public static function model($className=__CLASS__){
        return parent::model($className);
  }
//ejemplo de getters o consultas de la base de datos

 public function getInformes(){ 
      
  //    $consultaeventos ="SELECT * FROM eventos WHERE  idestadoeventos = 1";
    //  $this->getEventos=Yii::app()->db->createCommand($consultaeventos)->queryAll();// consulta base de datos Mysql            
 
     //return $this->getEventos;// devuelve el valor de la funcion get de el modelo
  } 

}