<?php
$this->breadcrumbs=array(
	'Corredors'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Corredor', 'url'=>array('index')),
	array('label'=>'Manage Corredor', 'url'=>array('admin')),
);
?>

<h1>Create Corredor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>