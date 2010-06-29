<?php
$this->breadcrumbs=array(
	Yii::t('stockControl','Clientes')=>array('index'),
	$model->numero=>array('view','id'=>$model->id),
	Yii::t('stockControl','Editar'),
);

$this->menu=array(
	array('label'=>'Clientes', 'url'=>array('index')),
	array('label'=>'Agregar cliente', 'url'=>array('create')),
	array('label'=>'Detalle: '.$model->numero, 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Ficha: '.$model->numero, 'url'=>array('ficha', 'id'=>$model->id)),
);
?>

<h1><?php echo Yii::t('stockControl','Editar cliente'); ?>: <?php echo $model->numero; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>