<?php

/**
 * This is the model class for table "compra_cancelada".
 */
class CompraCancelada extends ActiveRecord
{
	/**
	 * The followings are the available columns in table 'compra_cancelada':
	 * @var integer $id
	 * @var integer $idEmpresa
	 * @var integer $idCompra
	 * @var string $importeCompra
	 * @var string $importeAbonado
	 * @var string $importeDevuelto
	 * @var string $porcentajeRetenido
	 * @var integer $eliminado
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return CompraCancelada the static model class
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
		return 'compra_cancelada';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idEmpresa, idCompra, importeCompra, importeAbonado, importeDevuelto, porcentajeRetenido', 'required'),
			array('idEmpresa, idCompra, eliminado', 'numerical', 'integerOnly'=>true),
			array('importeCompra, importeAbonado, importeDevuelto, porcentajeRetenido', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idEmpresa, idCompra, importeCompra, importeAbonado, importeDevuelto, porcentajeRetenido, eliminado', 'safe', 'on'=>'search'),
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
			'idCompra0' => array(self::BELONGS_TO, 'Compra', 'idCompra'),
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
			'idCompra' => 'Id Compra',
			'importeCompra' => 'Importe Compra',
			'importeAbonado' => 'Importe Abonado',
			'importeDevuelto' => 'Importe Devuelto',
			'porcentajeRetenido' => 'Porcentaje Retenido',
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

		$criteria->compare('idCompra',$this->idCompra);

		$criteria->compare('importeCompra',$this->importeCompra,true);

		$criteria->compare('importeAbonado',$this->importeAbonado,true);

		$criteria->compare('importeDevuelto',$this->importeDevuelto,true);

		$criteria->compare('porcentajeRetenido',$this->porcentajeRetenido,true);

		$criteria->compare('eliminado',$this->eliminado);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
