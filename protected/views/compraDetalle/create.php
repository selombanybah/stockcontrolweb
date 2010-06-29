<?php
$this->breadcrumbs=array(
	'Compra Detalles'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List CompraDetalle', 'url'=>array('index')),
	array('label'=>'Manage CompraDetalle', 'url'=>array('admin')),
);
?>

<h1>Create CompraDetalle</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>