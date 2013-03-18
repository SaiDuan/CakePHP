<div class="partyfacilitiesdjs index">
	<h2><?php echo __('Partyfacilitiesdjs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('dj_descriptions');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($partyfacilitiesdjs as $partyfacilitiesdj): ?>
	<tr>
		<td><?php echo h($partyfacilitiesdj['Partyfacilitiesdj']['id']); ?>&nbsp;</td>
		<td><?php echo h($partyfacilitiesdj['Partyfacilitiesdj']['dj_descriptions']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $partyfacilitiesdj['Partyfacilitiesdj']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $partyfacilitiesdj['Partyfacilitiesdj']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $partyfacilitiesdj['Partyfacilitiesdj']['id']), null, __('Are you sure you want to delete # %s?', $partyfacilitiesdj['Partyfacilitiesdj']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Partyfacilitiesdj'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
