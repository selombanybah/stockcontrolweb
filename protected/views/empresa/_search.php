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
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cuit'); ?>
		<?php echo $form->textField($model,'cuit',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'counterIdFactura'); ?>
		<?php echo $form->textField($model,'counterIdFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'counterIdFacturaTemporal'); ?>
		<?php echo $form->textField($model,'counterIdFacturaTemporal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'counterNroFactura'); ?>
		<?php echo $form->textField($model,'counterNroFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maxLoginAttempts'); ?>
		<?php echo $form->textField($model,'maxLoginAttempts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentajeRetencion'); ?>
		<?php echo $form->textField($model,'porcentajeRetencion',array('size'=>10,'maxlength'=>10)); ?>
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
