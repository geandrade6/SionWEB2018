<?php 
/**
 * 
 */
class Imagen extends CActiveRecord
{
	
public 	function rules ()
	{
		return array (
		array ('imagenes','files','type'=>'jpg, png, gif, tif, jpeg')		

		);
	}
public function attributeLabels()
	{

		return array(
			'imagenes'=>'imagenes',
		);
	}
}



?>