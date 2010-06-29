<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEmpresa')); ?>:</b>
	<?php echo CHtml::encode($data->idEmpresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idVenta')); ?>:</b>
	<?php echo CHtml::encode($data->idVenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importeVenta')); ?>:</b>
	<?php echo CHtml::encode($data->importeVenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importeAbonado')); ?>:</b>
	<?php echo CHtml::encode($data->importeAbonado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importeDevuelto')); ?>:</b>
	<?php echo CHtml::encode($data->importeDevuelto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentajeRetenido')); ?>:</b>
	<?php echo CHtml::encode($data->porcentajeRetenido); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('eliminado')); ?>:</b>
	<?php echo CHtml::encode($data->eliminado); ?>
	<br />

	*/ ?>

</div>
