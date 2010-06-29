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
		<?php echo $form->label($model,'idCompra'); ?>
		<?php echo 1; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importeCompra'); ?>
		<?php echo $form->textField($model,'importeCompra',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importeAbonado'); ?>
		<?php echo $form->textField($model,'importeAbonado',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importeDevuelto'); ?>
		<?php echo $form->textField($model,'importeDevuelto',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentajeRetenido'); ?>
		<?php echo $form->textField($model,'porcentajeRetenido',array('size'=>10,'maxlength'=>10)); ?>
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
