<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuit'); ?>
		<?php echo $form->textField($model,'cuit',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'cuit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'counterIdFactura'); ?>
		<?php echo $form->textField($model,'counterIdFactura'); ?>
		<?php echo $form->error($model,'counterIdFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'counterIdFacturaTemporal'); ?>
		<?php echo $form->textField($model,'counterIdFacturaTemporal'); ?>
		<?php echo $form->error($model,'counterIdFacturaTemporal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'counterNroFactura'); ?>
		<?php echo $form->textField($model,'counterNroFactura'); ?>
		<?php echo $form->error($model,'counterNroFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maxLoginAttempts'); ?>
		<?php echo $form->textField($model,'maxLoginAttempts'); ?>
		<?php echo $form->error($model,'maxLoginAttempts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentajeRetencion'); ?>
		<?php echo $form->textField($model,'porcentajeRetencion',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'porcentajeRetencion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eliminado'); ?>
		<?php echo $form->textField($model,'eliminado'); ?>
		<?php echo $form->error($model,'eliminado'); ?>
	</div>


	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
