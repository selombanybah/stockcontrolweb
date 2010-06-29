<?php
$this->breadcrumbs=array(
	'Venta Detalles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VentaDetalle', 'url'=>array('index')),
	array('label'=>'Create VentaDetalle', 'url'=>array('create')),
	array('label'=>'View VentaDetalle', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VentaDetalle', 'url'=>array('admin')),
);
?>

<h1>Update VentaDetalle <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>