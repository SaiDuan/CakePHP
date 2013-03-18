<div class="availabilities form">
<?php echo $this->Form->create('Availability');?>
	<fieldset>
		<legend><?php echo __('Add Availability'); ?></legend>
	<?php
		echo $this->Form->input('day');
		echo $this->Form->input('from_time');
		echo $this->Form->input('to_time');
		echo $this->Form->input('Hall');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Availabilities'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
