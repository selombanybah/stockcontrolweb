<?php
$this->breadcrumbs=array(
	'Ventas'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Venta', 'url'=>array('index')),
	array('label'=>'Manage Venta', 'url'=>array('admin')),
);
?>

<h1>Create Venta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>