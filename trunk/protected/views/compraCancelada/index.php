<?php
$this->breadcrumbs=array(
	'Compra Canceladas',
);

$this->menu=array(
	array('label'=>'Create CompraCancelada', 'url'=>array('create')),
	array('label'=>'Manage CompraCancelada', 'url'=>array('admin')),
);
?>

<h1>Compra Canceladas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
