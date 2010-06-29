<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuit')); ?>:</b>
	<?php echo CHtml::encode($data->cuit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('counterIdFactura')); ?>:</b>
	<?php echo CHtml::encode($data->counterIdFactura); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('counterIdFacturaTemporal')); ?>:</b>
	<?php echo CHtml::encode($data->counterIdFacturaTemporal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('counterNroFactura')); ?>:</b>
	<?php echo CHtml::encode($data->counterNroFactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maxLoginAttempts')); ?>:</b>
	<?php echo CHtml::encode($data->maxLoginAttempts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentajeRetencion')); ?>:</b>
	<?php echo CHtml::encode($data->porcentajeRetencion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eliminado')); ?>:</b>
	<?php echo CHtml::encode($data->eliminado); ?>
	<br />

	*/ ?>

</div>
