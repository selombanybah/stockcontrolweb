<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div class="container" id="header">
	<div class="span-18">
		<div id="logo"><?php echo Yii::app()->user->isGuest?CHtml::encode(Yii::app()->name):CHtml::encode(Yii::app()->user->nombreEmpresa); ?></div>
	</div>
	<div class="span-5 last" id="specialTasks">
		<?php
			if (Yii::app()->user->isGuest) { echo CHtml::link('Iniciar sesión', array('/site/login'),array('class'=>'login')); }
			else { echo CHtml::link('Cerrar sesión', array('/site/logout'),array('class'=>'logout')); }
		
			echo CHtml::link('Acerca de...', array('/site/page','view'=>'about'), array('class'=>'about'));
			
		?>

	</div>
</div>
<div class="container" id="page">
	<div id="mainmenu">
		<?php
			$isLogged = !Yii::app()->user->isGuest;
			$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'Clientes', 'url'=>array('/cliente/index'),'visible'=>$isLogged,'active'=>$this->id=='cliente'),
				array('label'=>'Proveedores', 'url'=>array('/proveedor/index'),'visible'=>$isLogged,'active'=>$this->id=='proveedor'),
				array('label'=>'Productos','url'=>array('/producto/index'),'visible'=>$isLogged,'active'=>$this->id=='producto'),
				array('label'=>'Empleados','url'=>array('/empleado/index'),'visible'=>$isLogged,'active'=>$this->id=='empleado'),
				array('label'=>'Reportes','url'=>array('/reporte/index'),'visible'=>$isLogged,'active'=>$this->id=='reporte'),
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); ?><!-- breadcrumbs -->

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by FreakSoft&reg;.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
</div><!-- page -->
</body>
</html>