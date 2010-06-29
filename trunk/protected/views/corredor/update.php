<?php
$this->breadcrumbs=array(
	'Corredors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Corredor', 'url'=>array('index')),
	array('label'=>'Create Corredor', 'url'=>array('create')),
	array('label'=>'View Corredor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Corredor', 'url'=>array('admin')),
);
?>

<h1>Update Corredor <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>