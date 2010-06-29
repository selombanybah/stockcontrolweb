<?php
$this->breadcrumbs=array(
	'Venta Canceladas'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List VentaCancelada', 'url'=>array('index')),
	array('label'=>'Manage VentaCancelada', 'url'=>array('admin')),
);
?>

<h1>Create VentaCancelada</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>