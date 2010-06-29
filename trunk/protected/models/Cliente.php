<?php

/**
 * This is the model class for table "cliente".
 */
class Cliente extends ActiveRecord
{
	/**
	 * The followings are the available columns in table 'cliente':
	 * @var integer $id
	 * @var integer $idEmpresa
	 * @var string $numero
	 * @var string $dni
	 * @var string $nombre
	 * @var string $apellido
	 * @var string $ciudad
	 * @var string $direccion
	 * @var string $telefono
	 * @var string $fechaNacimiento
	 * @var integer $eliminado
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return Cliente the static model class
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
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero, nombre, apellido', 'required'),
			array('numero, nombre, apellido, ciudad, telefono', 'length', 'max'=>255),
			array('dni', 'length', 'max'=>30),
			array('genero', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('numero, dni, nombre, apellido, ciudad, direccion, telefono, fechaNacimiento', 'safe', 'on'=>'search'),
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
			'empresa' => array(self::BELONGS_TO, 'Empresa', 'idEmpresa'),
			'ventas' => array(self::HAS_MANY, 'Venta', 'idCliente'),
			'pagoClientes' => array(self::HAS_MANY, 'PagoCliente', 'idCliente'),
		);
	}

	/**
	 * Returns the behaviors of the model class.
	 * @return array behaviors
	 */
	public function behaviors()
	{
		return array('CAdvancedArBehavior',array('class' => 'ext.CAdvancedArBehavior'));
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idEmpresa' => 'Empresa',
			'numero' => 'Número',
			'dni' => 'DNI',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'ciudad' => 'Ciudad',
			'direccion' => 'Dirección',
			'telefono' => 'Teléfono',
			'fechaNacimiento' => 'Fecha de nacimiento',
			'genero' => 'Género',
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

		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('fechaNacimiento',$this->fechaNacimiento,true);
		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>'numero ASC',
			),
			'pagination'=>array(
				'pageSize'=>5
			),
		));
	}

	public function getFullName(){
		return $this->apellido.', '.$this->nombre;
	}
}
