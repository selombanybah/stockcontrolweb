<?php

/**
 * This is the model class for table "compra".
 */
class Compra extends ActiveRecord
{
	/**
	 * The followings are the available columns in table 'compra':
	 * @var integer $id
	 * @var integer $idEmpresa
	 * @var integer $idEmpleado
	 * @var integer $idCliente
	 * @var string $numero
	 * @var string $fecha
	 * @var integer $idFormaPagoCompra
	 * @var integer $cantidadCuotas
	 * @var string $precioCuota
	 * @var string $porcentajeIncremento
	 * @var integer $intervaloPagos
	 * @var string $fechaInicio
	 * @var string $anticipo
	 * @var integer $eliminado
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return Compra the static model class
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
		return 'compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idEmpresa, idEmpleado, idCliente, numero, fecha, idFormaPagoCompra, cantidadCuotas, precioCuota, porcentajeIncremento, intervaloPagos, fechaInicio, anticipo', 'required'),
			array('idEmpresa, idEmpleado, idCliente, idFormaPagoCompra, cantidadCuotas, intervaloPagos, eliminado', 'numerical', 'integerOnly'=>true),
			array('numero', 'length', 'max'=>255),
			array('precioCuota, porcentajeIncremento, anticipo', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idEmpresa, idEmpleado, idCliente, numero, fecha, idFormaPagoCompra, cantidadCuotas, precioCuota, porcentajeIncremento, intervaloPagos, fechaInicio, anticipo, eliminado', 'safe', 'on'=>'search'),
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
			'idEmpresa0' => array(self::BELONGS_TO, 'Compra', 'idEmpresa'),
			'compras' => array(self::HAS_MANY, 'Compra', 'idEmpresa'),
			'idEmpleado0' => array(self::BELONGS_TO, 'Empleado', 'idEmpleado'),
			'idCliente0' => array(self::BELONGS_TO, 'Cliente', 'idCliente'),
			'idFormaPagoCompra0' => array(self::BELONGS_TO, 'FormaPagoCompra', 'idFormaPagoCompra'),
			'compraCanceladas' => array(self::HAS_MANY, 'CompraCancelada', 'idCompra'),
			'compraDetalles' => array(self::HAS_MANY, 'CompraDetalle', 'idCompra'),
			'pagoProveedors' => array(self::HAS_MANY, 'PagoProveedor', 'idCompra'),
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
			'idEmpleado' => 'Id Empleado',
			'idCliente' => 'Id Cliente',
			'numero' => 'Numero',
			'fecha' => 'Fecha',
			'idFormaPagoCompra' => 'Id Forma Pago Compra',
			'cantidadCuotas' => 'Cantidad Cuotas',
			'precioCuota' => 'Precio Cuota',
			'porcentajeIncremento' => 'Porcentaje Incremento',
			'intervaloPagos' => 'Intervalo Pagos',
			'fechaInicio' => 'Fecha Inicio',
			'anticipo' => 'Anticipo',
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

		$criteria->compare('idEmpleado',$this->idEmpleado);

		$criteria->compare('idCliente',$this->idCliente);

		$criteria->compare('numero',$this->numero,true);

		$criteria->compare('fecha',$this->fecha,true);

		$criteria->compare('idFormaPagoCompra',$this->idFormaPagoCompra);

		$criteria->compare('cantidadCuotas',$this->cantidadCuotas);

		$criteria->compare('precioCuota',$this->precioCuota,true);

		$criteria->compare('porcentajeIncremento',$this->porcentajeIncremento,true);

		$criteria->compare('intervaloPagos',$this->intervaloPagos);

		$criteria->compare('fechaInicio',$this->fechaInicio,true);

		$criteria->compare('anticipo',$this->anticipo,true);

		$criteria->compare('eliminado',$this->eliminado);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
