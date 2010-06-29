<?php
$this->breadcrumbs=array(
	//'Clientes'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Clientes'),
);

$this->menu=array(
	//array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Create Cliente', 'url'=>array('/cliente/create'),'linkOptions'=>array('class'=>'clienteCreate')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').slideToggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cliente-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

Yii::app()->clientScript->registerScript('help_click_handler',
'$("#cliente_help_button").click(function(){
	$("#clientesHelp").dialog("open");
	return false;
});'
);

?>

<div class="span-12"><h1>Clientes</h1></div>
<div class="span-5"><?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?></div>
<div class="span-1 last"><?php echo CHtml::link(CHtml::image('./images/icons/help.png', 'Ayuda'), array('cliente/help'), array('class'=>'help','id'=>'cliente_help_button',)); ?></div>
<div class="span-18">
	<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array('model'=>$model)); ?>
	</div><!-- search-form -->
	<?php
	$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'cliente-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'selectableRows'=>0,
		'columns'=>array(
			'numero',
			'dni',
			'nombre',
			'apellido',
			'telefono',
			array(
				'class'=>'CButtonColumn',
				'template'=>'{ficha} {venta}',
				'buttons'=>array(
					'ficha'=>array(
						'label'=>'Ficha',     // text label of the button
						'url'=>'Yii::app()->controller->createUrl("cliente/ficha",array("id"=>$data->primaryKey))',       // a PHP expression for generating the URL of the button
						'imageUrl'=>'images/icons/vcard.png',  // image URL of the button. If not set or false, a text link is used
						//'options'=>array(...), // HTML options for the button tag
						//'visible'=>'...',
					),
					'venta'=>array(
						'label'=>'Nueva venta',     // text label of the button
						'url'=>'Yii::app()->controller->createUrl("venta/create",array("idCliente"=>$data->primaryKey))',       // a PHP expression for generating the URL of the button
						'imageUrl'=>'images/icons/cart_add.png',  // image URL of the button. If not set or false, a text link is used
						//'options'=>array(...), // HTML options for the button tag
						//'visible'=>'...',
					)
				),
			),
			array(
				'class'=>'CButtonColumn',
			),
		),
		'summaryText'=>'Mostrando {start}-{end} de {count} clientes',
		'emptyText'=>'No hay clientes. Puede agregar un cliente haciendo click en '.CHtml::link('Agregar cliente', array('cliente/create'))
	));

	$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
		'id'=>'clientesHelp',
		// additional javascript options for the dialog plugin
		'options'=>array(
			'title'=>'Ayuda',
			'autoOpen'=>false,
		),
	));
	$this->renderPartial('_help');
	$this->endWidget('zii.widgets.jui.CJuiDialog');
	?>
</div>