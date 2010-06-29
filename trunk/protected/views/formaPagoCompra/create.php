<?php
$this->breadcrumbs=array(
	'Forma Pago Compras'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List FormaPagoCompra', 'url'=>array('index')),
	array('label'=>'Manage FormaPagoCompra', 'url'=>array('admin')),
);
?>

<h1>Create FormaPagoCompra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>