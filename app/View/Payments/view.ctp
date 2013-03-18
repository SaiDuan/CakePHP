<div class="payments view">
<h2><?php  echo __('Payment');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Date'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['payment_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Receipt Number'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['receipt_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Annualsubcription'); ?></dt>
		<dd>
			<?php echo $this->Html->link($payment['Annualsubcription']['id'], array('controller' => 'annualsubcriptions', 'action' => 'view', $payment['Annualsubcription']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment'), array('action' => 'edit', $payment['Payment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment'), array('action' => 'delete', $payment['Payment']['id']), null, __('Are you sure you want to delete # %s?', $payment['Payment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Annualsubcriptions'), array('controller' => 'annualsubcriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annualsubcription'), array('controller' => 'annualsubcriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
