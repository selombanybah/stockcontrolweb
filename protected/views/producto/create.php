<?php
$this->breadcrumbs=array(
	'Productos'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Producto', 'url'=>array('index')),
	array('label'=>'Manage Producto', 'url'=>array('admin')),
);
?>

<h1>Create Producto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>