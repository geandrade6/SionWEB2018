<?php
class GestionControlAcceso extends CActiveRecord{ // cambiamos el eventos por el nombre del modelo creado
// creamos las variables de tipo publico o privado importante la de coneccion
  private $connection; // no se toca

// de bajo de este van getters
public $getConsultapunto;
public $getListadopunto;
// de bajo de este van setters

// de bajo de este van variables normales
  public $fechauno;
  public $fechados;
  public $puntoparqueo_id;
  public $vehiculos_placa;

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
    return 'ingresos_salidas';// rertnamos la tabla osea la que va en la base de datos
  }

//Reglas de validación
  public function rules(){//estas reglas son para formularios donde se inserta informacion para enviar
    return array(
   array('fecha_ingreso','safe',"message"=>"El campo fecha uno es obligatorio"),
   array('fecha_salida','safe',"message"=>"El campo fecha dos es obligatorio"),
   array('puntoparqueo_id','required',"message"=>"El campo Punto es obligatorio"),
   array('vehiculos_placa','required',"message"=>"El campo Placa es obligatorio"),
   array('vehiculos_placa', 'match', 'pattern' => "/^.{5,6}$/", 'message' => 'Placa: Mínimo 5 y máximo 6 caracteres'),
   array('vehiculos_placa', 'match', 'pattern' => "/^.[0-9a-z]+$/i", 'message' => 'Placa: Sólo se aceptan letras'),
	
            
        );
      
  }
 //Heredamos del modelo
  public static function model($className=__CLASS__){//no se toca
        return parent::model($className);
  }
//ejemplo de getters o consultas de la base de datos

 public function getConsultapunto(){ 
      
      $consultapuntopar ="SELECT id, nombre_punto
      FROM puntoparqueo";
      $this->getConsultapunto=Yii::app()->db->createCommand($consultapuntopar)->queryAll();// consulta base de datos Mysql            
 
     return $this->getConsultapunto;// devuelve el valor de la funcion get de el modelo
  } 

  public function getListadopunto(){
    $consultalistadopunto="
    SELECT S.id_sorteo, S.apartamento, S.torre, AP.usuarios_cedula,U.nombre, PQ.nombre_punto, V.placa
    FROM sorteo S
    INNER JOIN apartamentos AP ON AP.numero_apartamento = S.apartamento AND S.torre = AP.torre
    INNER JOIN usuarios U ON AP.usuarios_cedula = U.cedula
    INNER JOIN puntoparqueo PQ ON S.id_sorteo = PQ.id
    INNER JOIN vehiculos V ON U.cedula = V.usuarios_cedula";

    $this->getListadopunto=Yii::app()->db->createCommand($consultalistadopunto)->queryAll();// consulta base de datos Mysql            
 
     return $this->getListadopunto;// devuelve el valor de la funcion get de el modelo
  }
  public function setGestionControlAcceso($fechauno,$fechados,$puntoparqueo_id,$vehiculos_placa){

    try {
      
       if ($vehiculos_placa !='' && $fechados != null )  {
          
            # code...
           Yii::app()->db->createCommand()->insert('ingresos_salidas', [
          'fecha_ingreso'=>$fechauno,
          'fecha_salida'=> $fechados,
          'puntoparqueo_id'=>$puntoparqueo_id,
          'vehiculos_placa'=> $vehiculos_placa,

            ]);
            echo "<script> alert('ingreso Datos correcto');</script>";
        }else{
          echo "<script> alert('No! se ingresaron Datos Verifique los campos');</script>";
        
        }
    } catch (Exception $e) {
      
      echo "<script>alert('No existe esta placa Digite de nuevo');</script>";
    }
       
    } 

}