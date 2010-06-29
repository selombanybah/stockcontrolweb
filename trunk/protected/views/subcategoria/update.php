<?php
$this->breadcrumbs=array(
	'Subcategorias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subcategoria', 'url'=>array('index')),
	array('label'=>'Create Subcategoria', 'url'=>array('create')),
	array('label'=>'View Subcategoria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Subcategoria', 'url'=>array('admin')),
);
?>

<h1>Update Subcategoria <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>