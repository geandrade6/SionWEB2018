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
		$consultadeconexion = "SELECT username,password FROM usuarios WHERE username ='".$this->username."' AND password ='".$this->password."' AND activar_user = 1";

		$resultadoconecion= $conexion->createCommand($consultadeconexion)->query();

		$resultadoconecion->bindColumn(1,$this->username);
		$resultadoconecion->bindColumn(2,$this->password);
		while ($resultadoconecion ->read()!==false) {
			$this->errorCode = self::ERROR_NONE;
			return !$this->errorCode;
					}

	}

	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->_id;
	}
}