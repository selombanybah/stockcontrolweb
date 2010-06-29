<?php

/**
 * This is the model class for table "venta_detalle".
 */
class VentaDetalle extends ActiveRecord
{
	/**
	 * The followings are the available columns in table 'venta_detalle':
	 * @var integer $id
	 * @var integer $idVenta
	 * @var integer $idProducto
	 * @var integer $cantidad
	 * @var string $precioUnitario
	 * @var integer $eliminado
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return VentaDetalle the static model class
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
		return 'venta_detalle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idVenta, idProducto, cantidad, precioUnitario', 'required'),
			array('idVenta, idProducto, cantidad, eliminado', 'numerical', 'integerOnly'=>true),
			array('precioUnitario', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idVenta, idProducto, cantidad, precioUnitario, eliminado', 'safe', 'on'=>'search'),
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
			'idVenta0' => array(self::BELONGS_TO, 'Venta', 'idVenta'),
			'idProducto0' => array(self::BELONGS_TO, 'Producto', 'idProducto'),
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
			'idVenta' => 'Id Venta',
			'idProducto' => 'Id Producto',
			'cantidad' => 'Cantidad',
			'precioUnitario' => 'Precio Unitario',
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

		$criteria->compare('idVenta',$this->idVenta);

		$criteria->compare('idProducto',$this->idProducto);

		$criteria->compare('cantidad',$this->cantidad);

		$criteria->compare('precioUnitario',$this->precioUnitario,true);

		$criteria->compare('eliminado',$this->eliminado);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
