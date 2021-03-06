
<?php
class Sorteo extends CActiveRecord{ // cambiamos el eventos por el nombre del modelo creado
// creamos las variables de tipo publico o privado importante la de coneccion
  private $connection; // no se toca

// de bajo de este van getters
    public $getVersorteo;
    public $getVergeneadorSorteo;
    public $getRegistrosorteodos;
// de bajo de este van setters
    
// de bajo de este van variables normales



public function __construct(){ // no se toca
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
    return 'sorteo';// rertnamos la tabla osea la que va en la base de datos
  }

//Reglas de validación
  public function rules(){//estas reglas son para formularios donde se inserta informacion para enviar
    return array(
    //ejemplo a utilizar mejor;
                        
        );
      
  }
 //Heredamos del modelo
  public static function model($className=__CLASS__){//no se toca
        return parent::model($className);
  }
//ejemplo de getters o consultas de la base de datos
 public function getVersorteo(){
  $consultasorteo="SELECT * FROM registro_sorteo;";
   $this->getVersorteo=Yii::app()->db->createCommand($consultasorteo)->queryAll();// consulta base 
   return $this->getVersorteo;

 }
 public function getVergeneadorSorteo(){
  $consultagenerador ="SELECT PQ.nombre_punto,A.numero_apartamento,A.torre  FROM sorteo S
  INNER JOIN puntoparqueo PQ ON PQ.id = S.id_sorteo
  INNER JOIN apartamentos A ON A.id = S.id_apartamento";
   $this->getVergeneadorSorteo=Yii::app()->db->createCommand($consultagenerador)->queryAll();// consulta base 
  return $this->getVergeneadorSorteo;
 }

 public function getRegistrosorteodos(){
  $consultaregistrodos="SELECT * FROM registro_sorteo_dos where nombre_punto = ''";


 $this->getRegistrosorteodos=Yii::app()->db->createCommand($consultaregistrodos)->queryAll();// consulta base 
  return $this->getRegistrosorteodos;
 }


 
    

}