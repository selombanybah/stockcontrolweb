<?php
$this->breadcrumbs=array(
	'Subcategorias'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Subcategoria', 'url'=>array('index')),
	array('label'=>'Manage Subcategoria', 'url'=>array('admin')),
);
?>

<h1>Create Subcategoria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>