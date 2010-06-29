<?php
$this->breadcrumbs=array(
	'Forma Pago Ventas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FormaPagoVenta', 'url'=>array('index')),
	array('label'=>'Create FormaPagoVenta', 'url'=>array('create')),
	array('label'=>'Update FormaPagoVenta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FormaPagoVenta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormaPagoVenta', 'url'=>array('admin')),
);
?>

<h1>View FormaPagoVenta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idEmpresa',
		'nombre',
		'descripcion',
		'cantidadCuotas',
		'porcentajeIncremento',
		'eliminado',
	),
)); ?>
