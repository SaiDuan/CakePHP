<div class="partyfacilitydancefloors form">
<?php echo $this->Form->create('Partyfacilitydancefloor');?>
	<fieldset>
		<legend><?php echo __('Edit Partyfacilitydancefloor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dance_floor_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Partyfacilitydancefloor.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Partyfacilitydancefloor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Partyfacilitydancefloors'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
