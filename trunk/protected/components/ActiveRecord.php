<?php
/**
 * ActiveRecord is the customized base active record class.
 * All active record classes for this application should extend from this base class.
 */
class ActiveRecord extends CActiveRecord
{
	/**
	 * scopes overrides the default implementation defining some scopes to be
	 * applied to the whole common active record classes.
	 *
	 * @return array the scopes to be commonly applied.
	 */
	public function scopes()
	{
		return array(
			'activo'=>array(
				'condition'=>'t.eliminado=0'
			),
			'deEstaEmpresa'=>array(
				'condition'=>'t.idEmpresa='.Yii::app()->user->idEmpresa
			)
		);
	}

	/*
	 * defaultScope overrides the default implementation to apply.
	 *
	 * @return array the default scope to be applied.
	 */
	public function defaultScope()
	{
		$u = Yii::app()->user;

		$cond = ' (t.eliminado = 0 ';
		if (!$u->isGuest){
			$cond.= ' AND t.idEmpresa = '.$u->idEmpresa ;
		}
		$cond.= ') ';

		return array(
			'condition'=>$cond
		);
	}

	/*
	 * deleteByPk overrides the default implementation to avoid deleting
	 * phisically the record in the db, instead do a logical delete.
	 *
	 * @return boolean if the record was succesfully deleted.
	 */
	public function deleteByPk($pk,$condition='',$params=array())
	{
		$arToDelete = $this->findByPk($pk);
		$arToDelete->eliminado = 1;
		print_r($pk);
		return $arToDelete->save(false);
	}

	/*
	 * beforeSave overrides the default implementation so each active record
	 * will have it's idEmpresa property setted to the same as the idEmpresa
	 * of the logged user, and, by defaul, make then actives (e.g. not deleted).
	 *
	 * @return boolean whether the saving should be executed.
	 */
	protected function beforeSave(){
		$this->idEmpresa = Yii::app()->user->idEmpresa;
		return parent::beforeSave();
	}
}