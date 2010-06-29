<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compra-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idEmpresa'); ?>
		<?php echo 1; ?>
		<?php echo $form->error($model,'idEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idEmpleado'); ?>
		<?php echo 1; ?>
		<?php echo $form->error($model,'idEmpleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idCliente'); ?>
		<?php echo 1; ?>
		<?php echo $form->error($model,'idCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
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
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idFormaPagoCompra'); ?>
		<?php echo 1; ?>
		<?php echo $form->error($model,'idFormaPagoCompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidadCuotas'); ?>
		<?php echo $form->textField($model,'cantidadCuotas'); ?>
		<?php echo $form->error($model,'cantidadCuotas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precioCuota'); ?>
		<?php echo $form->textField($model,'precioCuota',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'precioCuota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentajeIncremento'); ?>
		<?php echo $form->textField($model,'porcentajeIncremento',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'porcentajeIncremento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intervaloPagos'); ?>
		<?php echo $form->textField($model,'intervaloPagos'); ?>
		<?php echo $form->error($model,'intervaloPagos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaInicio'); ?>
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
		<?php echo $form->error($model,'fechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anticipo'); ?>
		<?php echo $form->textField($model,'anticipo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'anticipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eliminado'); ?>
		<?php echo $form->textField($model,'eliminado'); ?>
		<?php echo $form->error($model,'eliminado'); ?>
	</div>


				<?php 
				$this->widget('application.components.Relation', array(
						'model' => $model,
						'relation' => 'idEmpresa0',
						'fields' => 'idEmpresa',
						)
					); ?>
						<?php 
				$this->widget('application.components.Relation', array(
						'model' => $model,
						'relation' => 'idEmpleado0',
						'fields' => 'idEmpresa',
						)
					); ?>
						<?php 
				$this->widget('application.components.Relation', array(
						'model' => $model,
						'relation' => 'idCliente0',
						'fields' => 'idEmpresa',
						)
					); ?>
						<?php 
				$this->widget('application.components.Relation', array(
						'model' => $model,
						'relation' => 'idFormaPagoCompra0',
						'fields' => 'idEmpresa',
						)
					); ?>
			
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
