<?php
$this->breadcrumbs=array(
	'Compra Detalles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CompraDetalle', 'url'=>array('index')),
	array('label'=>'Create CompraDetalle', 'url'=>array('create')),
	array('label'=>'Update CompraDetalle', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CompraDetalle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompraDetalle', 'url'=>array('admin')),
);
?>

<h1>View CompraDetalle #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idCompra',
		'idProducto',
		'cantidad',
		'precioUnitario',
		'eliminado',
	),
)); ?>
