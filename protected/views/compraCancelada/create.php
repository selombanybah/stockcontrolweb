<?php
$this->breadcrumbs=array(
	'Compra Canceladas'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List CompraCancelada', 'url'=>array('index')),
	array('label'=>'Manage CompraCancelada', 'url'=>array('admin')),
);
?>

<h1>Create CompraCancelada</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>