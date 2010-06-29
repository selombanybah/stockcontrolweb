<?php
$this->breadcrumbs=array(
	'Corredors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Corredor', 'url'=>array('index')),
	array('label'=>'Create Corredor', 'url'=>array('create')),
	array('label'=>'Update Corredor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Corredor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Corredor', 'url'=>array('admin')),
);
?>

<h1>View Corredor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idEmpresa',
		'idProveedor',
		'codigo',
		'nombre',
		'apellido',
		'telefono',
		'eliminado',
	),
)); ?>
