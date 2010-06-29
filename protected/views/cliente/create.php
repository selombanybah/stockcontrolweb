<?php
$this->breadcrumbs=array(
	Yii::t('stockControl','Clientes')=>array('index'),
	$model->numero=>array('view','id'=>$model->id),
	Yii::t('stockControl','Agregar'),
);

/*$this->menu=array(
	array('label'=>'Clientes', 'url'=>array('index')),
);*/
?>

<h1>Agregar Cliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>