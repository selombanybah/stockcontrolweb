<?php
$this->breadcrumbs=array(
	'Forma Pago Compras',
);

$this->menu=array(
	array('label'=>'Create FormaPagoCompra', 'url'=>array('create')),
	array('label'=>'Manage FormaPagoCompra', 'url'=>array('admin')),
);
?>

<h1>Forma Pago Compras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
