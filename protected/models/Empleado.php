<?php

/**
 * This is the model class for table "empleado".
 */
class Empleado extends ActiveRecord
{
	/**
	 * The followings are the available columns in table 'empleado':
	 * @var integer $id
	 * @var integer $idEmpresa
	 * @var string $numero
	 * @var string $dni
	 * @var string $nombre
	 * @var string $apellido
	 * @var string $direccion
	 * @var string $telefono
	 * @var integer $idCargo
	 * @var integer $idTipoUsuario
	 * @var string $username
	 * @var string $password
	 * @var integer $eliminado
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return Empleado the static model class
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
		return 'empleado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idEmpresa, numero, dni, nombre, apellido, direccion, telefono, idCargo, idTipoUsuario, username, password', 'required'),
			array('idEmpresa, idCargo, idTipoUsuario, eliminado', 'numerical', 'integerOnly'=>true),
			array('numero, nombre, apellido, telefono, username, password', 'length', 'max'=>255),
			array('dni', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idEmpresa, numero, dni, nombre, apellido, direccion, telefono, idCargo, idTipoUsuario, username, password, eliminado', 'safe', 'on'=>'search'),
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
			'ventas' => array(self::HAS_MANY, 'Venta', 'idEmpleado'),
			'pagosClientes' => array(self::HAS_MANY, 'PagoCliente', 'idEmpleado'),
			'compras' => array(self::HAS_MANY, 'Compra', 'idEmpleado'),
			'pagosProveedors' => array(self::HAS_MANY, 'PagoProveedor', 'idEmpleado'),
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
			'numero' => 'Numero',
			'dni' => 'Dni',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'idCargo' => 'Id Cargo',
			'idTipoUsuario' => 'Id Tipo Usuario',
			'username' => 'Username',
			'password' => 'Password',
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

		$criteria->compare('numero',$this->numero,true);

		$criteria->compare('dni',$this->dni,true);

		$criteria->compare('nombre',$this->nombre,true);

		$criteria->compare('apellido',$this->apellido,true);

		$criteria->compare('direccion',$this->direccion,true);

		$criteria->compare('telefono',$this->telefono,true);

		$criteria->compare('idCargo',$this->idCargo);

		$criteria->compare('idTipoUsuario',$this->idTipoUsuario);

		$criteria->compare('username',$this->username,true);

		$criteria->compare('password',$this->password,true);

		$criteria->compare('eliminado',$this->eliminado);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
