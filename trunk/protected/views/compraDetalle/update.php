<?php
$this->breadcrumbs=array(
	'Compra Detalles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompraDetalle', 'url'=>array('index')),
	array('label'=>'Create CompraDetalle', 'url'=>array('create')),
	array('label'=>'View CompraDetalle', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CompraDetalle', 'url'=>array('admin')),
);
?>

<h1>Update CompraDetalle <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>