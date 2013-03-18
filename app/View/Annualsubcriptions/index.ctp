<div class="annualsubcriptions index">
	<h2><?php echo __('Annualsubcriptions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('start_date');?></th>
			<th><?php echo $this->Paginator->sort('expiry_date');?></th>
			<th><?php echo $this->Paginator->sort('subtypes_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($annualsubcriptions as $annualsubcription): ?>
	<tr>
		<td><?php echo h($annualsubcription['Annualsubcription']['id']); ?>&nbsp;</td>
		<td><?php echo h($annualsubcription['Annualsubcription']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($annualsubcription['Annualsubcription']['expiry_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($annualsubcription['Subtype']['hallsowner_type'], array('controller' => 'subtypes', 'action' => 'view', $annualsubcription['Subtype']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $annualsubcription['Annualsubcription']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $annualsubcription['Annualsubcription']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $annualsubcription['Annualsubcription']['id']), null, __('Are you sure you want to delete # %s?', $annualsubcription['Annualsubcription']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Annualsubcription'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Subtypes'), array('controller' => 'subtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subtype'), array('controller' => 'subtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
