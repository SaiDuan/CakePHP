<div class="rooms view">
<h2><?php  echo __('Room');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($room['Room']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Name'); ?></dt>
		<dd>
			<?php echo h($room['Room']['room_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Capacity'); ?></dt>
		<dd>
			<?php echo h($room['Room']['room_capacity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hall'); ?></dt>
		<dd>
			<?php echo $this->Html->link($room['Hall']['hall_name'], array('controller' => 'halls', 'action' => 'view', $room['Hall']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Room'), array('action' => 'edit', $room['Room']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Room'), array('action' => 'delete', $room['Room']['id']), null, __('Are you sure you want to delete # %s?', $room['Room']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rooms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Room'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
