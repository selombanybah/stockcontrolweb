<?php
$this->breadcrumbs=array(
	'Venta Detalles'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List VentaDetalle', 'url'=>array('index')),
	array('label'=>'Manage VentaDetalle', 'url'=>array('admin')),
);
?>

<h1>Create VentaDetalle</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>