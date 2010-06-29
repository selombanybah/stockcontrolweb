<?php

/**
 * This is the model class for table "pago_cliente".
 */
class PagoCliente extends ActiveRecord
{
	/**
	 * The followings are the available columns in table 'pago_cliente':
	 * @var integer $id
	 * @var integer $idEmpresa
	 * @var integer $idVenta
	 * @var integer $idEmpleado
	 * @var integer $idCliente
	 * @var string $fecha
	 * @var integer $cantidad
	 * @var string $monto
	 * @var integer $eliminado
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return PagoCliente the static model class
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
		return 'pago_cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idEmpresa, idVenta, idEmpleado, idCliente, fecha, cantidad, monto', 'required'),
			array('idEmpresa, idVenta, idEmpleado, idCliente, cantidad, eliminado', 'numerical', 'integerOnly'=>true),
			array('monto', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idEmpresa, idVenta, idEmpleado, idCliente, fecha, cantidad, monto, eliminado', 'safe', 'on'=>'search'),
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
			'idVenta0' => array(self::BELONGS_TO, 'Venta', 'idVenta'),
			'idEmpleado0' => array(self::BELONGS_TO, 'Empleado', 'idEmpleado'),
			'idCliente0' => array(self::BELONGS_TO, 'Cliente', 'idCliente'),
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
			'idVenta' => 'Id Venta',
			'idEmpleado' => 'Id Empleado',
			'idCliente' => 'Id Cliente',
			'fecha' => 'Fecha',
			'cantidad' => 'Cantidad',
			'monto' => 'Monto',
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

		$criteria->compare('idVenta',$this->idVenta);

		$criteria->compare('idEmpleado',$this->idEmpleado);

		$criteria->compare('idCliente',$this->idCliente);

		$criteria->compare('fecha',$this->fecha,true);

		$criteria->compare('cantidad',$this->cantidad);

		$criteria->compare('monto',$this->monto,true);

		$criteria->compare('eliminado',$this->eliminado);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
