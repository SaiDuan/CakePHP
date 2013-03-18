<div class="rooms form">
<?php echo $this->Form->create('Room');?>
	<fieldset>
		<legend><?php echo __('Edit Room'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('room_name');
		echo $this->Form->input('room_capacity');
		echo $this->Form->input('halls_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Room.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Room.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rooms'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
