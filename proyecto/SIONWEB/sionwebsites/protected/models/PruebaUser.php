<?php
class GestionUsuarios extends CActiveRecord{
	//	class LoginForm extends CFormModel
  // creamos las variables de tipo publico o privado 
  private $connection;
  //getters
  public $getRolesuser;
 
  //variables normales
 
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
		return 'roles';
	}
  //Reglas de validación
  public function rules(){
    return array(
              
        );
  }
  //Heredamos del modelo
  public static function model($className=__CLASS__){
        return parent::model($className);
  }
  //configuracion personal
 
  public function getRolesuser(){ // funcion para el combo box
    $consultaRoles="SELECT id, nombre_rol FROM roles ordeR by id asc";
     $this->getRolesuser=Yii::app()->db->createCommand($consultaRoles)->queryAll();// consulta base de datos 
       return $this->getRolesuser;// devuelve el valor de la funcion get 
  }
   

}
