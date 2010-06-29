<?php $this->beginContent('application.views.layouts.main'); ?>
<div class="container">
	<div class="span-19">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span-5 last">
		<div id="sidebarCommonTasks">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Tareas comunes',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>array(
					array('label'=>'Nueva venta', 'url'=>array('/venta/create'),'linkOptions'=>array('class'=>'itemNuevaVenta')),
					array('label'=>'Nueva compra', 'url'=>array('/compra/create'),'linkOptions'=>array('class'=>'itemNuevaCompra')),
					array('label'=>'Nueva pago de cliente', 'url'=>array('/pagoCliente/create'),'linkOptions'=>array('class'=>'itemNuevoPagoCliente')),
					array('label'=>'Nueva pago a proveedor', 'url'=>array('/pagoProveedor/create'),'linkOptions'=>array('class'=>'itemNuevoPagoProveedor')),
				),
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		</div><!-- sidebarCommonTasks -->


		<?php if (count($this->menu)) { ?>
		<div id="sidebar">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operaciones',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		</div><!-- sidebar -->
		<?php } ?>
	</div>

</div>
<?php $this->endContent(); ?>