<?php
$this->breadcrumbs=array(
	'Empresas'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Empresa', 'url'=>array('index')),
	array('label'=>'Manage Empresa', 'url'=>array('admin')),
);
?>

<h1>Create Empresa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>