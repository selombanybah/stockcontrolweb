<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;

	public function authenticate()
	{
		$employe=Empleado::model()->with('empresa')->findByAttributes(array('username'=>$this->username));
		if($employe===null || $employe->password!==$this->password){
			$this->errorCode=self::ERROR_UNKNOWN_IDENTITY;
		} else {
			$this->_id=$employe->id;
			$this->setState('idEmpresa', $employe->idEmpresa);
			$fullData = '['.$employe->numero.'] '.$employe->nombre.' '.$employe->apellido;
			$this->setState('fullData', $fullData);
			$this->setState('nombreEmpresa',$employe->empresa->nombre);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

	public function getId()
	{
		return $this->_id;
	}
}