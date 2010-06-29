<?php
$this->breadcrumbs=array(
	'Forma Pago Compras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FormaPagoCompra', 'url'=>array('index')),
	array('label'=>'Create FormaPagoCompra', 'url'=>array('create')),
	array('label'=>'Update FormaPagoCompra', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FormaPagoCompra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormaPagoCompra', 'url'=>array('admin')),
);
?>

<h1>View FormaPagoCompra #<?php echo $model->id; ?></h1>

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
