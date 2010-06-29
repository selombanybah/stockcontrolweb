<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compra-cancelada-form',
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
		<?php echo $form->labelEx($model,'idCompra'); ?>
		<?php echo 1; ?>
		<?php echo $form->error($model,'idCompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importeCompra'); ?>
		<?php echo $form->textField($model,'importeCompra',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'importeCompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importeAbonado'); ?>
		<?php echo $form->textField($model,'importeAbonado',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'importeAbonado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importeDevuelto'); ?>
		<?php echo $form->textField($model,'importeDevuelto',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'importeDevuelto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentajeRetenido'); ?>
		<?php echo $form->textField($model,'porcentajeRetenido',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'porcentajeRetenido'); ?>
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
						'relation' => 'idCompra0',
						'fields' => 'idEmpresa',
						)
					); ?>
			
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
