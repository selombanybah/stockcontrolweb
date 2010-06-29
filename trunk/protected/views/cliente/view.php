<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->numero,
);

$this->menu=array(
	array('label'=>'Clientes', 'url'=>array('index')),
	array('label'=>'Agregar cliente', 'url'=>array('create')),
	array('label'=>'Editar: '.$model->numero, 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar: '.$model->numero, 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Ficha: '.$model->numero, 'url'=>array('ficha', 'id'=>$model->id)),
);
?>

<h1>Cliente: <?php echo $model->numero; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label'=>'Número',
			'type'=>'raw',
			'value'=>CHtml::link(CHtml::encode($model->numero),array('cliente/update','id'=>$model->id),array(
				'title'=>Yii::t('stockControl', 'Editar'),
			)),
		),
		'dni',
		'nombre',
		'apellido',
		'ciudad',
		'direccion',
		'telefono',
		'fechaNacimiento:date',
	),
)); ?>
