<?php
$this->breadcrumbs=array(
	'Forma Pago Compras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormaPagoCompra', 'url'=>array('index')),
	array('label'=>'Create FormaPagoCompra', 'url'=>array('create')),
	array('label'=>'View FormaPagoCompra', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FormaPagoCompra', 'url'=>array('admin')),
);
?>

<h1>Update FormaPagoCompra <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>