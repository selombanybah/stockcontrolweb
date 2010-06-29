<?php
$this->breadcrumbs=array(
	'Pago Clientes',
);

$this->menu=array(
	array('label'=>'Create PagoCliente', 'url'=>array('create')),
	array('label'=>'Manage PagoCliente', 'url'=>array('admin')),
);
?>

<h1>Pago Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
