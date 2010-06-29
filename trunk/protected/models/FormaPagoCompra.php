<?php

/**
 * This is the model class for table "forma_pago_compra".
 */
class FormaPagoCompra extends ActiveRecord
{
	/**
	 * The followings are the available columns in table 'forma_pago_compra':
	 * @var integer $id
	 * @var integer $idEmpresa
	 * @var string $nombre
	 * @var string $descripcion
	 * @var integer $cantidadCuotas
	 * @var string $porcentajeIncremento
	 * @var integer $eliminado
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return FormaPagoCompra the static model class
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
		return 'forma_pago_compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idEmpresa, nombre, descripcion, cantidadCuotas, porcentajeIncremento', 'required'),
			array('idEmpresa, cantidadCuotas, eliminado', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>255),
			array('porcentajeIncremento', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idEmpresa, nombre, descripcion, cantidadCuotas, porcentajeIncremento, eliminado', 'safe', 'on'=>'search'),
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
			'compras' => array(self::HAS_MANY, 'Compra', 'idFormaPagoCompra'),
			'idEmpresa0' => array(self::BELONGS_TO, 'Empresa', 'idEmpresa'),
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
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'cantidadCuotas' => 'Cantidad Cuotas',
			'porcentajeIncremento' => 'Porcentaje Incremento',
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

		$criteria->compare('nombre',$this->nombre,true);

		$criteria->compare('descripcion',$this->descripcion,true);

		$criteria->compare('cantidadCuotas',$this->cantidadCuotas);

		$criteria->compare('porcentajeIncremento',$this->porcentajeIncremento,true);

		$criteria->compare('eliminado',$this->eliminado);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
