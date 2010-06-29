<?php
$this->breadcrumbs=array(
	'Forma Pago Ventas'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List FormaPagoVenta', 'url'=>array('index')),
	array('label'=>'Manage FormaPagoVenta', 'url'=>array('admin')),
);
?>

<h1>Create FormaPagoVenta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>