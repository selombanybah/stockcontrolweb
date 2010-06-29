<?php

/**
 * This is the model class for table "producto".
 */
class Producto extends ActiveRecord
{
	/**
	 * The followings are the available columns in table 'producto':
	 * @var integer $id
	 * @var integer $idEmpresa
	 * @var string $codigo
	 * @var string $nombre
	 * @var string $descripcion
	 * @var string $precioLista
	 * @var string $ganancia
	 * @var string $impuesto
	 * @var integer $idSubcategoria
	 * @var integer $stockActual
	 * @var integer $stockMinimo
	 * @var integer $stockMaximo
	 * @var string $imagen
	 * @var integer $eliminado
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return Producto the static model class
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
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idEmpresa, codigo, nombre, descripcion, precioLista, ganancia, impuesto, idSubcategoria, stockActual, stockMinimo, stockMaximo, imagen', 'required'),
			array('idEmpresa, idSubcategoria, stockActual, stockMinimo, stockMaximo, eliminado', 'numerical', 'integerOnly'=>true),
			array('codigo, nombre, imagen', 'length', 'max'=>255),
			array('precioLista, ganancia, impuesto', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idEmpresa, codigo, nombre, descripcion, precioLista, ganancia, impuesto, idSubcategoria, stockActual, stockMinimo, stockMaximo, imagen, eliminado', 'safe', 'on'=>'search'),
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
			'compraDetalles' => array(self::HAS_MANY, 'CompraDetalle', 'idProducto'),
			'idEmpresa0' => array(self::BELONGS_TO, 'Empresa', 'idEmpresa'),
			'idSubcategoria0' => array(self::BELONGS_TO, 'Subcategoria', 'idSubcategoria'),
			'proveedors' => array(self::MANY_MANY, 'Proveedor', 'provee(idProveedor, idProducto)'),
			'ventaDetalles' => array(self::HAS_MANY, 'VentaDetalle', 'idProducto'),
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
			'codigo' => 'Codigo',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'precioLista' => 'Precio Lista',
			'ganancia' => 'Ganancia',
			'impuesto' => 'Impuesto',
			'idSubcategoria' => 'Id Subcategoria',
			'stockActual' => 'Stock Actual',
			'stockMinimo' => 'Stock Minimo',
			'stockMaximo' => 'Stock Maximo',
			'imagen' => 'Imagen',
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

		$criteria->compare('codigo',$this->codigo,true);

		$criteria->compare('nombre',$this->nombre,true);

		$criteria->compare('descripcion',$this->descripcion,true);

		$criteria->compare('precioLista',$this->precioLista,true);

		$criteria->compare('ganancia',$this->ganancia,true);

		$criteria->compare('impuesto',$this->impuesto,true);

		$criteria->compare('idSubcategoria',$this->idSubcategoria);

		$criteria->compare('stockActual',$this->stockActual);

		$criteria->compare('stockMinimo',$this->stockMinimo);

		$criteria->compare('stockMaximo',$this->stockMaximo);

		$criteria->compare('imagen',$this->imagen,true);

		$criteria->compare('eliminado',$this->eliminado);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
