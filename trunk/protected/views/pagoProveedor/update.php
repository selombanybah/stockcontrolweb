<?php
$this->breadcrumbs=array(
	'Pago Proveedors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PagoProveedor', 'url'=>array('index')),
	array('label'=>'Create PagoProveedor', 'url'=>array('create')),
	array('label'=>'View PagoProveedor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PagoProveedor', 'url'=>array('admin')),
);
?>

<h1>Update PagoProveedor <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>