<div class="annualsubcriptions form">
<?php echo $this->Form->create('Annualsubcription');?>
	<fieldset>
		<legend><?php echo __('Add Annualsubcription'); ?></legend>
	<?php
		echo $this->Form->input('start_date');
		echo $this->Form->input('expiry_date');
		echo $this->Form->input('subtypes_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Annualsubcriptions'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Subtypes'), array('controller' => 'subtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subtype'), array('controller' => 'subtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
