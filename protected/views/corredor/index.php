<?php
$this->breadcrumbs=array(
	'Corredors',
);

$this->menu=array(
	array('label'=>'Create Corredor', 'url'=>array('create')),
	array('label'=>'Manage Corredor', 'url'=>array('admin')),
);
?>

<h1>Corredors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
