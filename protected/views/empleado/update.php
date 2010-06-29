<?php
$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Empleado', 'url'=>array('index')),
	array('label'=>'Create Empleado', 'url'=>array('create')),
	array('label'=>'View Empleado', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Empleado', 'url'=>array('admin')),
);
?>

<h1>Update Empleado <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>