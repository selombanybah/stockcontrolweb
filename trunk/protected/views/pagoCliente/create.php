<?php
$this->breadcrumbs=array(
	'Pago Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PagoCliente', 'url'=>array('index')),
	array('label'=>'Manage PagoCliente', 'url'=>array('admin')),
);
?>

<h1>Create PagoCliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>