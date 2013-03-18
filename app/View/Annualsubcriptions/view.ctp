<div class="annualsubcriptions view">
<h2><?php  echo __('Annualsubcription');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($annualsubcription['Annualsubcription']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($annualsubcription['Annualsubcription']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expiry Date'); ?></dt>
		<dd>
			<?php echo h($annualsubcription['Annualsubcription']['expiry_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($annualsubcription['Subtype']['hallsowner_type'], array('controller' => 'subtypes', 'action' => 'view', $annualsubcription['Subtype']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Annualsubcription'), array('action' => 'edit', $annualsubcription['Annualsubcription']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Annualsubcription'), array('action' => 'delete', $annualsubcription['Annualsubcription']['id']), null, __('Are you sure you want to delete # %s?', $annualsubcription['Annualsubcription']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Annualsubcriptions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annualsubcription'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subtypes'), array('controller' => 'subtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subtype'), array('controller' => 'subtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Payments');?></h3>
	<?php if (!empty($annualsubcription['Payment'])):?>
		<dl>
			<dt><?php echo __('Id');?></dt>
		<dd>
	<?php echo $annualsubcription['Payment']['id'];?>
&nbsp;</dd>
		<dt><?php echo __('Payment Date');?></dt>
		<dd>
	<?php echo $annualsubcription['Payment']['payment_date'];?>
&nbsp;</dd>
		<dt><?php echo __('Receipt Number');?></dt>
		<dd>
	<?php echo $annualsubcription['Payment']['receipt_number'];?>
&nbsp;</dd>
		<dt><?php echo __('Annualsubcriptions Id');?></dt>
		<dd>
	<?php echo $annualsubcription['Payment']['annualsubcriptions_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Payment'), array('controller' => 'payments', 'action' => 'edit', $annualsubcription['Payment']['id'])); ?></li>
			</ul>
		</div>
	</div>
	