<?php
$this->breadcrumbs=array(
	'Pago Proveedors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PagoProveedor', 'url'=>array('index')),
	array('label'=>'Manage PagoProveedor', 'url'=>array('admin')),
);
?>

<h1>Create PagoProveedor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>