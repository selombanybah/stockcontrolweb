<?php
$this->breadcrumbs=array(
	'Pago Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PagoCliente', 'url'=>array('index')),
	array('label'=>'Create PagoCliente', 'url'=>array('create')),
	array('label'=>'View PagoCliente', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PagoCliente', 'url'=>array('admin')),
);
?>

<h1>Update PagoCliente <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>