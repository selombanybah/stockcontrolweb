<?php
$this->breadcrumbs=array(
	'Venta Canceladas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List VentaCancelada', 'url'=>array('index')),
	array('label'=>'Create VentaCancelada', 'url'=>array('create')),
	array('label'=>'Update VentaCancelada', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete VentaCancelada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VentaCancelada', 'url'=>array('admin')),
);
?>

<h1>View VentaCancelada #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idEmpresa',
		'idVenta',
		'importeVenta',
		'importeAbonado',
		'importeDevuelto',
		'porcentajeRetenido',
		'eliminado',
	),
)); ?>
