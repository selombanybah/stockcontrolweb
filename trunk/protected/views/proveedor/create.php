<?php
$this->breadcrumbs=array(
	'Proveedors'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Proveedor', 'url'=>array('index')),
	array('label'=>'Manage Proveedor', 'url'=>array('admin')),
);
?>

<h1>Create Proveedor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>