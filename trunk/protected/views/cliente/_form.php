<div class="wide form">
<?php
$form = new CActiveForm();
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	'enableAjaxValidation'=>true,
));
?>
	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>
	<fieldset title="Datos obligatorios" >
		<legend>Datos obligatorios</legend>
		<div class="row">
			<?php echo $form->labelEx($model,'numero'); ?>
			<?php echo $form->textField($model,'numero',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'numero'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'nombre'); ?>
			<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'nombre'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'apellido'); ?>
			<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'apellido'); ?>
		</div>
	</fieldset>
	<fieldset title="Datos opcionales">
		<legend id="optional">Datos opcionales</legend>
		<div id="optionalRows">
			<div class="row">
				<?php echo $form->labelEx($model,'dni'); ?>
				<?php echo $form->textField($model,'dni',array('size'=>30,'maxlength'=>30)); ?>
				<?php echo $form->error($model,'dni'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'ciudad'); ?>
				<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'ciudad'); ?>
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
				<?php
					echo $form->labelEx($model,'fechaNacimiento');
					$this->widget('zii.widgets.jui.CJuiDatePicker',array(
						'model'=>$model,
						'attribute'=>'fechaNacimiento',
						'language'=>'es',
						'htmlOptions'=>array('size'=>10, 'style'=>'width:80px !important'),
					));
				?>
				<?php echo $form->error($model,'fechaNacimiento'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'genero'); ?>
			</div>
			<div class="row">
				<?php echo $form->radioButtonList($model, 'genero',
							array(
								0=>'No definido',
								1=>CHtml::image(Yii::app()->request->baseUrl.'/images/icons/female.png','Femenino'),
								2=> CHtml::image(Yii::app()->request->baseUrl.'/images/icons/male.png','Masculino')
							)); ?>
				<?php echo $form->error($model,'genero'); ?>
			</div>
		</div>
 	</fieldset>
	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('stockControl', 'Guardar')); ?>
		<?php echo CHtml::link('cancelar', array('cliente/index')); ?>
	</div>
<?php $this->endWidget(); ?>
</div><!-- form -->
<?php
Yii::app()->clientScript->registerScript('cliente_form', '
$("#optional").click(function(){
	$("#optionalRows").slideToggle();
	return false;
});
');
