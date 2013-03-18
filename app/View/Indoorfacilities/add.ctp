<div class="indoorfacilities form">
<?php echo $this->Form->create('Indoorfacility');?>
	<fieldset>
		<legend><?php echo __('Add Indoorfacility'); ?></legend>
	<?php
		echo $this->Form->input('indoor_facilities_name');
		echo $this->Form->input('Hall');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Indoorfacilities'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
