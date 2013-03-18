<div class="partyfacilitydiscos form">
<?php echo $this->Form->create('Partyfacilitydisco');?>
	<fieldset>
		<legend><?php echo __('Add Partyfacilitydisco'); ?></legend>
	<?php
		echo $this->Form->input('disco_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Partyfacilitydiscos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
