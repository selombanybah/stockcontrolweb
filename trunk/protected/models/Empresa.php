<?php

/**
 * This is the model class for table "empresa".
 */
class Empresa extends ActiveRecord
{
	/**
	 * The followings are the available columns in table 'empresa':
	 * @var integer $id
	 * @var string $nombre
	 * @var string $cuit
	 * @var string $direccion
	 * @var string $telefono
	 * @var string $email
	 * @var integer $counterIdFactura
	 * @var integer $counterIdFacturaTemporal
	 * @var integer $counterNroFactura
	 * @var integer $maxLoginAttempts
	 * @var string $porcentajeRetencion
	 * @var integer $eliminado
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return Empresa the static model class
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
		return 'empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, cuit, direccion, telefono, email, counterIdFactura, counterIdFacturaTemporal, counterNroFactura, maxLoginAttempts, porcentajeRetencion', 'required'),
			array('counterIdFactura, counterIdFacturaTemporal, counterNroFactura, maxLoginAttempts, eliminado', 'numerical', 'integerOnly'=>true),
			array('nombre, telefono, email', 'length', 'max'=>255),
			array('cuit', 'length', 'max'=>30),
			array('porcentajeRetencion', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, cuit, direccion, telefono, email, counterIdFactura, counterIdFacturaTemporal, counterNroFactura, maxLoginAttempts, porcentajeRetencion, eliminado', 'safe', 'on'=>'search'),
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
			'cargos' => array(self::HAS_MANY, 'Cargo', 'idEmpresa'),
			'categorias' => array(self::HAS_MANY, 'Categoria', 'idEmpresa'),
			'clientes' => array(self::HAS_MANY, 'Cliente', 'idEmpresa'),
			'compraCanceladas' => array(self::HAS_MANY, 'CompraCancelada', 'idEmpresa'),
			'corredors' => array(self::HAS_MANY, 'Corredor', 'idEmpresa'),
			'empleados' => array(self::HAS_MANY, 'Empleado', 'idEmpresa'),
			'formaPagoCompras' => array(self::HAS_MANY, 'FormaPagoCompra', 'idEmpresa'),
			'formaPagoVentas' => array(self::HAS_MANY, 'FormaPagoVenta', 'idEmpresa'),
			'pagoClientes' => array(self::HAS_MANY, 'PagoCliente', 'idEmpresa'),
			'pagoProveedors' => array(self::HAS_MANY, 'PagoProveedor', 'idEmpresa'),
			'productos' => array(self::HAS_MANY, 'Producto', 'idEmpresa'),
			'proveedors' => array(self::HAS_MANY, 'Proveedor', 'idEmpresa'),
			'ventas' => array(self::HAS_MANY, 'Venta', 'idEmpresa'),
			'ventaCanceladas' => array(self::HAS_MANY, 'VentaCancelada', 'idEmpresa'),
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
			'nombre' => 'Nombre',
			'cuit' => 'Cuit',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'email' => 'Email',
			'counterIdFactura' => 'Counter Id Factura',
			'counterIdFacturaTemporal' => 'Counter Id Factura Temporal',
			'counterNroFactura' => 'Counter Nro Factura',
			'maxLoginAttempts' => 'Max Login Attempts',
			'porcentajeRetencion' => 'Porcentaje Retencion',
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

		$criteria->compare('nombre',$this->nombre,true);

		$criteria->compare('cuit',$this->cuit,true);

		$criteria->compare('direccion',$this->direccion,true);

		$criteria->compare('telefono',$this->telefono,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('counterIdFactura',$this->counterIdFactura);

		$criteria->compare('counterIdFacturaTemporal',$this->counterIdFacturaTemporal);

		$criteria->compare('counterNroFactura',$this->counterNroFactura);

		$criteria->compare('maxLoginAttempts',$this->maxLoginAttempts);

		$criteria->compare('porcentajeRetencion',$this->porcentajeRetencion,true);

		$criteria->compare('eliminado',$this->eliminado);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
