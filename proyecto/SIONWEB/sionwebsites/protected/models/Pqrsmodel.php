<?php
class Eventos extends CActiveRecord{ // cambiamos el eventos por el nombre del modelo creado
// creamos las variables de tipo publico o privado importante la de coneccion
  private $connection; // no se toca

// de bajo de este van getters

// de bajo de este van setters

// de bajo de este van variables normales

public function __construct(){ // no se toca
        //Lanzamos la conexi�n a la base de datos
       $this->connection=new CDbConnection(
                //Cogemos la configuraci�n asignada en config/main.php
            Yii::app()->db->connectionString,
            Yii::app()->db->username,
          Yii::app()->db->password
       );
        //Activamos la conexi�n
        $this->connection->active=true;
        //Esto nos permite utilizar el Query Builder y las consultas normales
  }

public function tableName() // esto indica que vamos a trabajar con una tabla principal
  {
    return 'pqrs';// rertnamos la tabla osea la que va en la base de datos
  }

//Reglas de validaci�n
  public function rules(){//estas reglas son para formularios donde se inserta informacion para enviar
    return array(
            array('aqui va el nombre del campo de la BD, se utiliza coma y comillas para otro campo','safe'),
		//ejemplo a utilizar mejor;
		array('nombre','required','message'=>'Este campo es obligatorio'),
		array('nombre','required','message'=>'Este campo xxxx es obligatorio'),
            
        );
      
  }
 //Heredamos del modelo
  public static function model($className=__CLASS__){//no se toca
        return parent::model($className);
  }
//ejemplo de getters o consultas de la base de datos

 public function getEventos(){ 
      
      $consultaeventos ="SELECT * FROM eventos WHERE  idestadoeventos = 1";
      $this->getEventos=Yii::app()->db->createCommand($consultaeventos)->queryAll();// consulta base de datos Mysql            
 
     return $this->getEventos;// devuelve el valor de la funcion get de el modelo
  } 

}