<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEmpresa')); ?>:</b>
	<?php echo CHtml::encode($data->idEmpresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioLista')); ?>:</b>
	<?php echo CHtml::encode($data->precioLista); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ganancia')); ?>:</b>
	<?php echo CHtml::encode($data->ganancia); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('impuesto')); ?>:</b>
	<?php echo CHtml::encode($data->impuesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSubcategoria')); ?>:</b>
	<?php echo CHtml::encode($data->idSubcategoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stockActual')); ?>:</b>
	<?php echo CHtml::encode($data->stockActual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stockMinimo')); ?>:</b>
	<?php echo CHtml::encode($data->stockMinimo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stockMaximo')); ?>:</b>
	<?php echo CHtml::encode($data->stockMaximo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::encode($data->imagen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eliminado')); ?>:</b>
	<?php echo CHtml::encode($data->eliminado); ?>
	<br />

	*/ ?>

</div>
