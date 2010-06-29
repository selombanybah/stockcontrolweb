<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pago-proveedor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idEmpresa'); ?>
		<?php echo $form->textField($model,'idEmpresa'); ?>
		<?php echo $form->error($model,'idEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idCompra'); ?>
		<?php echo $form->textField($model,'idCompra'); ?>
		<?php echo $form->error($model,'idCompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idEmpleado'); ?>
		<?php echo $form->textField($model,'idEmpleado'); ?>
		<?php echo $form->error($model,'idEmpleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idProveedor'); ?>
		<?php echo $form->textField($model,'idProveedor'); ?>
		<?php echo $form->error($model,'idProveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idCorredor'); ?>
		<?php echo $form->textField($model,'idCorredor'); ?>
		<?php echo $form->error($model,'idCorredor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto'); ?>
		<?php echo $form->textField($model,'monto',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eliminado'); ?>
		<?php echo $form->textField($model,'eliminado'); ?>
		<?php echo $form->error($model,'eliminado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->