<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		
		$conexion=yii::app()->db;
		$consultadeconexion = "SELECT username,password,correo FROM usuarios WHERE username ='".$this->username."' AND correo = '".$this->correo."' AND  password ='".$this->password."' AND activar_user = 1";

		$resultadoconecion= $conexion->createCommand($consultadeconexion)->query();

		$resultadoconecion->bindColumn(1,$this->username);
		$resultadoconecion->bindColumn(2,$this->password);
		$resultadoconecion->bindColumn(3,$this->correo);
		while ($resultadoconecion ->read()!==false) {
			$this->errorCode = self::ERROR_NONE;
			return !$this->errorCode;
					}
	/*$user=User::model()->find('Login=?',array(strtolower($this->username)));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$user->ID;
			$this->username=$user->Nombre;
            $this->setState('_id', $user->ID);
            $this->setState('IDAppPerfilesUsrs', $user->IDAppPerfilesUsrs);
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode==self::ERROR_NONE;*/

	}

	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->_id;
	}
}