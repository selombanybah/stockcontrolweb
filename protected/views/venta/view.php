<?php
$this->breadcrumbs=array(
	'Ventas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Venta', 'url'=>array('index')),
	array('label'=>'Create Venta', 'url'=>array('create')),
	array('label'=>'Update Venta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Venta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Venta', 'url'=>array('admin')),
);
?>

<h1>View Venta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idEmpresa',
		'idEmpleado',
		'idCliente',
		'numero',
		'fecha',
		'idFormaPagoVenta',
		'cantidadCuotas',
		'precioCuota',
		'porcentajeIncremento',
		'intervaloPagos',
		'fechaInicio',
		'anticipo',
		'eliminado',
	),
)); ?>
