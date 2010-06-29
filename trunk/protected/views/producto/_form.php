<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idEmpresa'); ?>
		<?php
			$this->widget('application.components.Relation', array(
				'model'=>$model,
				'field'=>'idEmpresa',
				'relation'=>'idEmpresa0',
				'fields'=>'nombre',
			));
		?>
		<?php echo $form->error($model,'idEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precioLista'); ?>
		<?php echo $form->textField($model,'precioLista',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'precioLista'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ganancia'); ?>
		<?php echo $form->textField($model,'ganancia',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ganancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'impuesto'); ?>
		<?php echo $form->textField($model,'impuesto',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'impuesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idSubcategoria'); ?>
		<?php
			$this->widget('application.components.Relation', array(
				'model'=>$model,
				'field'=>'idSubcategoria',
				'relation'=>'idSubcategoria0',
				'fields'=>'nombre',
			));
		?>
		<?php echo $form->error($model,'idSubcategoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stockActual'); ?>
		<?php echo $form->textField($model,'stockActual'); ?>
		<?php echo $form->error($model,'stockActual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stockMinimo'); ?>
		<?php echo $form->textField($model,'stockMinimo'); ?>
		<?php echo $form->error($model,'stockMinimo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stockMaximo'); ?>
		<?php echo $form->textField($model,'stockMaximo'); ?>
		<?php echo $form->error($model,'stockMaximo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagen'); ?>
		<?php echo $form->textField($model,'imagen',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eliminado'); ?>
		<?php echo $form->checkBox($model,'eliminado'); ?>
		<?php echo $form->error($model,'eliminado'); ?>
	</div>


				
						
						<?php 
				$this->widget('application.components.Relation', array(
						'model' => $model,
						'relation' => 'proveedors',
						'fields' => 'idEmpresa',
						)
					); ?>
			
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
