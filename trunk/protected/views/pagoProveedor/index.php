<?php
$this->breadcrumbs=array(
	'Pago Proveedors',
);

$this->menu=array(
	array('label'=>'Create PagoProveedor', 'url'=>array('create')),
	array('label'=>'Manage PagoProveedor', 'url'=>array('admin')),
);
?>

<h1>Pago Proveedors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
