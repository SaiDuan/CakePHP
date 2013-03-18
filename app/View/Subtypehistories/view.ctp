<div class="subtypehistories view">
<h2><?php  echo __('Subtypehistory');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subtypehistory['Subtypehistory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtype History Year'); ?></dt>
		<dd>
			<?php echo h($subtypehistory['Subtypehistory']['subtype_history_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtype History Price'); ?></dt>
		<dd>
			<?php echo h($subtypehistory['Subtypehistory']['subtype_history_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtype History Type'); ?></dt>
		<dd>
			<?php echo h($subtypehistory['Subtypehistory']['subtype_history_type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subtypehistory'), array('action' => 'edit', $subtypehistory['Subtypehistory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subtypehistory'), array('action' => 'delete', $subtypehistory['Subtypehistory']['id']), null, __('Are you sure you want to delete # %s?', $subtypehistory['Subtypehistory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subtypehistories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subtypehistory'), array('action' => 'add')); ?> </li>
	</ul>
</div>
