<?php
$this->breadcrumbs=array(
	'Compra Canceladas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompraCancelada', 'url'=>array('index')),
	array('label'=>'Create CompraCancelada', 'url'=>array('create')),
	array('label'=>'View CompraCancelada', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CompraCancelada', 'url'=>array('admin')),
);
?>

<h1>Update CompraCancelada <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>