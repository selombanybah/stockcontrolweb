<?php
$this->breadcrumbs=array(
	'Venta Canceladas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VentaCancelada', 'url'=>array('index')),
	array('label'=>'Create VentaCancelada', 'url'=>array('create')),
	array('label'=>'View VentaCancelada', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VentaCancelada', 'url'=>array('admin')),
);
?>

<h1>Update VentaCancelada <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>