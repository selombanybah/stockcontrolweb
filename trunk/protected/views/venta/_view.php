<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEmpresa')); ?>:</b>
	<?php echo CHtml::encode($data->idEmpresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEmpleado')); ?>:</b>
	<?php echo CHtml::encode($data->idEmpleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCliente')); ?>:</b>
	<?php echo CHtml::encode($data->idCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFormaPagoVenta')); ?>:</b>
	<?php echo CHtml::encode($data->idFormaPagoVenta); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidadCuotas')); ?>:</b>
	<?php echo CHtml::encode($data->cantidadCuotas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioCuota')); ?>:</b>
	<?php echo CHtml::encode($data->precioCuota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentajeIncremento')); ?>:</b>
	<?php echo CHtml::encode($data->porcentajeIncremento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intervaloPagos')); ?>:</b>
	<?php echo CHtml::encode($data->intervaloPagos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->fechaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anticipo')); ?>:</b>
	<?php echo CHtml::encode($data->anticipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eliminado')); ?>:</b>
	<?php echo CHtml::encode($data->eliminado); ?>
	<br />

	*/ ?>

</div>
