<div class="rooms index">
	<h2><?php echo __('Rooms');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('room_name');?></th>
			<th><?php echo $this->Paginator->sort('room_capacity');?></th>
			<th><?php echo $this->Paginator->sort('halls_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($rooms as $room): ?>
	<tr>
		<td><?php echo h($room['Room']['id']); ?>&nbsp;</td>
		<td><?php echo h($room['Room']['room_name']); ?>&nbsp;</td>
		<td><?php echo h($room['Room']['room_capacity']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($room['Hall']['hall_name'], array('controller' => 'halls', 'action' => 'view', $room['Hall']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $room['Room']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $room['Room']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $room['Room']['id']), null, __('Are you sure you want to delete # %s?', $room['Room']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Room'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
