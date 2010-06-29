<?php
$this->breadcrumbs=array(
	'Compras'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Compra', 'url'=>array('index')),
	array('label'=>'Manage Compra', 'url'=>array('admin')),
);
?>

<h1>Create Compra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>