<?php
$this->breadcrumbs=array(
	'Venta Detalles',
);

$this->menu=array(
	array('label'=>'Create VentaDetalle', 'url'=>array('create')),
	array('label'=>'Manage VentaDetalle', 'url'=>array('admin')),
);
?>

<h1>Venta Detalles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
