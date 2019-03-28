
<?php
class GestionVehiculos extends CActiveRecord{ // cambiamos el eventos por el nombre del modelo creado
// creamos las variables de tipo publico o privado importante la de coneccion
  private $connection; // no se toca

// de bajo de este van getters
  public $getGestionvehiculos;
  public $setGestionvehiculos;
  public $getVertipo;
// de bajo de este van setters

// de bajo de este van variables normales

public $placa;
public $marca;
public $color;
public $modelo;
public $usuarios_cedula;
public $fecharegistrovehiculos;
public $tipo_de_vehiculo;

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
    return 'vehiculos';// rertnamos la tabla osea la que va en la base de datos
  }

//Reglas de validación
  public function rules(){//estas reglas son para formularios donde se inserta informacion para enviar
    return array(
    //ejemplo a utilizar mejor;
              array('placa','required',"message"=>"El campo Placa es obligatorio"),
              array('placa', 'match', 'pattern' => "/^.{5,6}$/", 'message' => 'Placa: Mínimo 5 y máximo 6 caracteres'),
              array('placa', 'match', 'pattern' => "/^.[0-9a-z]+$/i", 'message' => 'Placa: Sólo se aceptan letras y Números'),
              array('marca','required',"message"=>"El campo Marca es obligatorio"),
              array('marca', 'match', 'pattern' => "/^.{2,10}$/", 'message' => 'Marca: Mínimo 2 y máximo 10 caracteres'),
              array('marca', 'match', 'pattern' => "/^.[0-9a-z]+$/i", 'message' => 'Marca: Sólo se aceptan letras y Números'),
              array('color','required',"message"=>"El campo Color es obligatorio"),
              array('color', 'match', 'pattern' => "/^.{3,10}$/", 'message' => 'Color: Mínimo 3 y máximo 10 caracteres'),
              array('color', 'match', 'pattern' => "/^.[a-z]+$/i", 'message' => 'Color: Sólo se aceptan letras'),
              array('modelo','required',"message"=>"El campo Modelo es obligatorio"),
              array('modelo', 'match', 'pattern' => "/^.{2,4}$/", 'message' => 'Modelo: Mínimo 2 y máximo 4 caracteres para el año'),
              array('modelo', 'match', 'pattern' => "/^.[0-9]+$/i", 'message' => 'Modelo: Sólo se aceptan Números'),
              array('usuarios_cedula','required',"message"=>"El campo Cedula usuario es obligatorio"),
              array('usuarios_cedula', 'match', 'pattern' => "/^.{6,20}$/", 'message' => 'Cedula: Mínimo 6 y máximo 10 caracteres'),
              array('usuarios_cedula', 'match', 'pattern' => "/^.[0-9a-z]+$/i", 'message' => 'Cedula: Sólo se aceptan letras y Números'),
              array('fecha_registro','required',"message"=>"El campo Fecha es obligatorio"),
              array('tipo_de_vehiculo','required',"message"=>"El campo Tipo Vehiculo es obligatorio"),
        );
      
  }
 //Heredamos del modelo
  public static function model($className=__CLASS__){//no se toca
        return parent::model($className);
  }
//ejemplo de getters o consultas de la base de datos
 public function getVertipo(){
  $consultatiposve="SELECT id, tipo 
  FROM tipos Where id != 6";
   $this->getVertipo=Yii::app()->db->createCommand($consultatiposve)->queryAll();// consulta base 
   return $this->getVertipo;

 }

 public function getGestionvehiculos(){ 
      
      $consultagestionvehiculos ="SELECT V.placa, V.marca, V.color, V.modelo,U.nombre,V.fecha_registro FROM vehiculos V INNER JOIN usuarios U ON V.usuarios_cedula = U.cedula ORDER BY nombre asc";
      $this->getGestionvehiculos=Yii::app()->db->createCommand($consultagestionvehiculos)->queryAll();// consulta base de datos Mysql            
     return $this->getGestionvehiculos;// devuelve el valor de la funcion get de el modelo
  }
  public function setGestionvehiculos($placa,$marca,$color,$modelo,$usuarios_cedula,$fecharegistrovehiculos,$tipo_de_vehiculo){

    try {
      if ($placa !='' && $marca !='' && $color !='' && $modelo !='' && $usuarios_cedula !='' && $fecharegistrovehiculos !='')  {
           Yii::app()->db->createCommand()->insert('vehiculos', [
          'placa'=>$placa,
          'marca'=> $marca,
          'color'=>$color,
          'modelo'=> $modelo,
          'usuarios_cedula'=> $usuarios_cedula,
          'fecha_registro'=> $fecharegistrovehiculos,
          'tipo_de_vehiculo'=>$tipo_de_vehiculo,
            ]);
            Yii::app()->db->createCommand()->insert('vehiculos_respaldo', [
          'placa'=>$placa,
          'marca'=> $marca,
          'color'=>$color,
          'modelo'=> $modelo,
          'usuarios_cedula'=> $usuarios_cedula,
          'fecha_registro'=> $fecharegistrovehiculos,
          'tipo_de_vehiculo'=>$tipo_de_vehiculo,
            ]);
            echo '<Script> alert("Registro del vehiculo correctamente");</Script>';
        }else{ echo '<Script> alert("No pudo registrarse el vehiculo");</Script>';}
    } catch (Exception $e) {
        echo "Posiblemente el Vehículo yá existe";
    }
    
  }

}