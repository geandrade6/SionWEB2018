
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
              array('placa', 
              'required', 
              "message"=>"El campo Placa es obligatorio"),
              array('marca', 
              'required', 
              "message"=>"El campo Marca es obligatorio"),
              array('color', 
              'required', 
              "message"=>"El campo Color es obligatorio"),
              array('modelo', 
              'required', 
              "message"=>"El campo Modelo es obligatorio"),
              array('usuarios_cedula', 
              'required', 
              "message"=>"El campo Cedula usuario es obligatorio"),
               array('fecha_registro', 
              'required', 
              "message"=>"El campo Fecha es obligatorio"),
                array('tipo_de_vehiculo', 
              'required', 
              "message"=>"El campo Tipo Vehiculo es obligatorio"),
            
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
        }else{ echo '<Script> alert("No pudo registrarse el vehiculo");</Script>';}
  }

    

}