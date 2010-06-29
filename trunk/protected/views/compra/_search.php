<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idEmpresa'); ?>
		<?php echo 1; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idEmpleado'); ?>
		<?php echo 1; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idCliente'); ?>
		<?php echo 1; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero'); ?>
		<?php echo $form->textField($model,'numero',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker',
						 array(
								 'model'=>'$model',
								 'name'=>'{$model}[fecha]',
								 'language'=>'es',
								 //'mode'=>'imagebutton',
								 //'theme'=>'smoothness',
								 'value'=>$model->fecha,
								 /*'htmlOptions'=>array('size'=>10, 'style'=>'width:80px !important'),
									 'options'=>array(
									 'showButtonPanel'=>true,
									 'changeYear'=>true,                                      
									 'changeYear'=>true,
									 ),*/
								 )
							 );
					; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idFormaPagoCompra'); ?>
		<?php echo 1; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidadCuotas'); ?>
		<?php echo $form->textField($model,'cantidadCuotas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precioCuota'); ?>
		<?php echo $form->textField($model,'precioCuota',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentajeIncremento'); ?>
		<?php echo $form->textField($model,'porcentajeIncremento',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intervaloPagos'); ?>
		<?php echo $form->textField($model,'intervaloPagos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaInicio'); ?>
		<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker',
						 array(
								 'model'=>'$model',
								 'name'=>'{$model}[fechaInicio]',
								 'language'=>'es',
								 //'mode'=>'imagebutton',
								 //'theme'=>'smoothness',
								 'value'=>$model->fechaInicio,
								 /*'htmlOptions'=>array('size'=>10, 'style'=>'width:80px !important'),
									 'options'=>array(
									 'showButtonPanel'=>true,
									 'changeYear'=>true,                                      
									 'changeYear'=>true,
									 ),*/
								 )
							 );
					; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anticipo'); ?>
		<?php echo $form->textField($model,'anticipo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eliminado'); ?>
		<?php echo $form->textField($model,'eliminado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
