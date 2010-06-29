<?php
$this->breadcrumbs=array(
	'Compra Detalles',
);

$this->menu=array(
	array('label'=>'Create CompraDetalle', 'url'=>array('create')),
	array('label'=>'Manage CompraDetalle', 'url'=>array('admin')),
);
?>

<h1>Compra Detalles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
