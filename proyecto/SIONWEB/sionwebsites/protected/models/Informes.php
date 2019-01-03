<?php
class Informes extends CActiveRecord{
// creamos las variables de tipo publico o privado importante la de coneccion
  private $connection;

// de bajo de este van getters
  public $getInformesuser;
  public $getInformesveh;
  public $getEstadodos;

// de bajo de este van setters

// de bajo de este van variables normales
   public $rolesus;

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
            array('roles_id', 
                  'required', 
                  "message"=>"El campo roles es obligatorio"),
            
        );
      
  }
 //Heredamos del modelo
  public static function model($className=__CLASS__){
        return parent::model($className);
  }
//ejemplo de getters o consultas de la base de datos

 public function getInformesuser(){ 
      
   $consultacantidaduser ="SELECT count(*) cantidad_usuarios, R.nombre_rol
    FROM roles R
    INNER JOIN usuarios U 
    ON U.roles_id = R.id 
    GROUP BY R.nombre_rol ASC";
    
    $this->getInformesuser=Yii::app()->db->createCommand($consultacantidaduser)->queryAll();// consulta base de datos Mysql            
 
     return $this->getInformesuser;// devuelve el valor de la funcion get de el modelo
  } 

  public function getInformesveh(){ 
      
   $consultacantidadveh ="SELECT COUNT(*) cantidad_vehiculos, T.tipo 
   FROM vehiculos V
   INNER JOIN tipos T 
   ON V.tipo_de_vehiculo = T.id 
   GROUP BY V.tipo_de_vehiculo ";
    
    $this->getInformesveh=Yii::app()->db->createCommand($consultacantidadveh)->queryAll();// consulta base de datos Mysql            
 
     return $this->getInformesveh;// devuelve el valor de la funcion get de el modelo
  } 

  public function getEstadodos(){ // funcion para el combo box
    $consultaRolDos="SELECT id, nombre_rol FROM roles ordeR by id asc";

     $this->getEstadodos=Yii::app()->db->createCommand($consultaRolDos)->queryAll();// consulta base de datos 
        
       
       return $this->getEstadodos;// devuelve el valor de la funcion get 
  }
}