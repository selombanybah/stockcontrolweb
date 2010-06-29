<?php
$this->breadcrumbs=array(
	'Forma Pago Ventas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormaPagoVenta', 'url'=>array('index')),
	array('label'=>'Create FormaPagoVenta', 'url'=>array('create')),
	array('label'=>'View FormaPagoVenta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FormaPagoVenta', 'url'=>array('admin')),
);
?>

<h1>Update FormaPagoVenta <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>