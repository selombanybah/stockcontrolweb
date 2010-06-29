<?php
$this->breadcrumbs=array(
	'Forma Pago Ventas',
);

$this->menu=array(
	array('label'=>'Create FormaPagoVenta', 'url'=>array('create')),
	array('label'=>'Manage FormaPagoVenta', 'url'=>array('admin')),
);
?>

<h1>Forma Pago Ventas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
