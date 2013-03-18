<div class="payments form">
<?php echo $this->Form->create('Payment');?>
	<fieldset>
		<legend><?php echo __('Add Payment'); ?></legend>
	<?php
		echo $this->Form->input('payment_date');
		echo $this->Form->input('receipt_number');
		echo $this->Form->input('annualsubcriptions_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Payments'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Annualsubcriptions'), array('controller' => 'annualsubcriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annualsubcription'), array('controller' => 'annualsubcriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
