<?php
$this->breadcrumbs=array(
	'Venta Canceladas',
);

$this->menu=array(
	array('label'=>'Create VentaCancelada', 'url'=>array('create')),
	array('label'=>'Manage VentaCancelada', 'url'=>array('admin')),
);
?>

<h1>Venta Canceladas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
