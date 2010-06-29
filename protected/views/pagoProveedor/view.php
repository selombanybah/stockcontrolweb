<?php
$this->breadcrumbs=array(
	'Pago Proveedors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PagoProveedor', 'url'=>array('index')),
	array('label'=>'Create PagoProveedor', 'url'=>array('create')),
	array('label'=>'Update PagoProveedor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PagoProveedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PagoProveedor', 'url'=>array('admin')),
);
?>

<h1>View PagoProveedor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idEmpresa',
		'idCompra',
		'idEmpleado',
		'idProveedor',
		'idCorredor',
		'fecha',
		'cantidad',
		'monto',
		'eliminado',
	),
)); ?>
