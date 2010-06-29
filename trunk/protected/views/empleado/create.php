<?php
$this->breadcrumbs=array(
	'Empleados'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Empleado', 'url'=>array('index')),
	array('label'=>'Manage Empleado', 'url'=>array('admin')),
);
?>

<h1>Create Empleado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>