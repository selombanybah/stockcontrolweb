<?php

/**
 * This is the model class for table "corredor".
 */
class Corredor extends ActiveRecord
{
	/**
	 * The followings are the available columns in table 'corredor':
	 * @var integer $id
	 * @var integer $idEmpresa
	 * @var integer $idProveedor
	 * @var string $codigo
	 * @var string $nombre
	 * @var string $apellido
	 * @var string $telefono
	 * @var integer $eliminado
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return Corredor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'corredor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idEmpresa, idProveedor, codigo, nombre, apellido, telefono', 'required'),
			array('idEmpresa, idProveedor, eliminado', 'numerical', 'integerOnly'=>true),
			array('codigo, nombre, apellido, telefono', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idEmpresa, idProveedor, codigo, nombre, apellido, telefono, eliminado', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idEmpresa0' => array(self::BELONGS_TO, 'Empresa', 'idEmpresa'),
			'idProveedor0' => array(self::BELONGS_TO, 'Proveedor', 'idProveedor'),
			'pagoProveedors' => array(self::HAS_MANY, 'PagoProveedor', 'idCorredor'),
		);
	}

	/**
	 * Returns the behaviors of the model class.
	 * @return array behaviors
	 */
	public function behaviors()
	{
		return array('CAdvancedArBehavior',
				array('class' => 'ext.CAdvancedArBehavior')
				);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idEmpresa' => 'Id Empresa',
			'idProveedor' => 'Id Proveedor',
			'codigo' => 'Codigo',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'telefono' => 'Telefono',
			'eliminado' => 'Eliminado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('idEmpresa',$this->idEmpresa);

		$criteria->compare('idProveedor',$this->idProveedor);

		$criteria->compare('codigo',$this->codigo,true);

		$criteria->compare('nombre',$this->nombre,true);

		$criteria->compare('apellido',$this->apellido,true);

		$criteria->compare('telefono',$this->telefono,true);

		$criteria->compare('eliminado',$this->eliminado);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
