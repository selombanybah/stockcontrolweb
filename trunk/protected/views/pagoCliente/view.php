<?php
$this->breadcrumbs=array(
	'Pago Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PagoCliente', 'url'=>array('index')),
	array('label'=>'Create PagoCliente', 'url'=>array('create')),
	array('label'=>'Update PagoCliente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PagoCliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PagoCliente', 'url'=>array('admin')),
);
?>

<h1>View PagoCliente #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idEmpresa',
		'idVenta',
		'idEmpleado',
		'idCliente',
		'fecha',
		'cantidad',
		'monto',
		'eliminado',
	),
)); ?>
