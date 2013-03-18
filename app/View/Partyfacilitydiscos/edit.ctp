<div class="partyfacilitydiscos form">
<?php echo $this->Form->create('Partyfacilitydisco');?>
	<fieldset>
		<legend><?php echo __('Edit Partyfacilitydisco'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('disco_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Partyfacilitydisco.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Partyfacilitydisco.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Partyfacilitydiscos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
