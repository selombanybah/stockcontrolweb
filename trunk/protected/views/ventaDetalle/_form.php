<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'venta-detalle-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idVenta'); ?>
		<?php echo 1; ?>
		<?php echo $form->error($model,'idVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idProducto'); ?>
		<?php echo 1; ?>
		<?php echo $form->error($model,'idProducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precioUnitario'); ?>
		<?php echo $form->textField($model,'precioUnitario',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'precioUnitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eliminado'); ?>
		<?php echo $form->textField($model,'eliminado'); ?>
		<?php echo $form->error($model,'eliminado'); ?>
	</div>


				<?php 
				$this->widget('application.components.Relation', array(
						'model' => $model,
						'relation' => 'idVenta0',
						'fields' => 'idVenta',
						)
					); ?>
						<?php 
				$this->widget('application.components.Relation', array(
						'model' => $model,
						'relation' => 'idProducto0',
						'fields' => 'idVenta',
						)
					); ?>
			
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
