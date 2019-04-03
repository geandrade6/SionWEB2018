<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{
	public $name;
	public $email;
	public $subject;
	public $body;
	public $verifyCode;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('name, email, subject, body', 'required'),
			array('name', 'match', 'pattern' => "/^.{5,30}$/", 'message' => 'Nombre: Mínimo 5 y máximo 30 caracteres'),
			// email has to be a valid email address
			array('email', 'email'),
			array('email', 'match', 'pattern' => "/^.{10,40}$/", 'message' => 'E-mail: Mínimo 10 y máximo 40 caracteres'),
			array('subject', 'match', 'pattern' => "/^.{5,20}$/", 'message' => 'Asunto: Mínimo 5 y máximo 20 caracteres'),
			array('subject', 'match', 'pattern' => "/^.[0-9a-z\s]+$/i", 'message' => 'Asunto: Sólo se aceptan letras y números '),
			array('body', 'match', 'pattern' => "/^.{20,500}$/", 'message' => 'Mensaje: Mínimo 20 y máximo 500 caracteres'),
        	array('body', 'match', 'pattern' => "/^.[0-9a-záéíóúñ\s]+$/i", 'message' => 'Mensaje: Sólo se aceptan letras y numeros no signos'),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Codigo de Verificación',
		);
	}
}