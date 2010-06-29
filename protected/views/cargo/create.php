<?php
$this->breadcrumbs=array(
	'Cargos'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Cargo', 'url'=>array('index')),
	array('label'=>'Manage Cargo', 'url'=>array('admin')),
);
?>

<h1>Create Cargo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>