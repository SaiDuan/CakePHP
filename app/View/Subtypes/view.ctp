<div class="subtypes view">
<h2><?php  echo __('Subtype');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subtype['Subtype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hallsowner Type'); ?></dt>
		<dd>
			<?php echo h($subtype['Subtype']['hallsowner_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Limitation'); ?></dt>
		<dd>
			<?php echo h($subtype['Subtype']['type_limitation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($subtype['Subtype']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subtype'), array('action' => 'edit', $subtype['Subtype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subtype'), array('action' => 'delete', $subtype['Subtype']['id']), null, __('Are you sure you want to delete # %s?', $subtype['Subtype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subtypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subtype'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hallsowners'), array('controller' => 'hallsowners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hallsowner'), array('controller' => 'hallsowners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Annualsubcriptions'), array('controller' => 'annualsubcriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annualsubcription'), array('controller' => 'annualsubcriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Hallsowners');?></h3>
	<?php if (!empty($subtype['Hallsowner'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hallsowner First Name'); ?></th>
		<th><?php echo __('Hallsowner Last Name'); ?></th>
		<th><?php echo __('Hallsowner Address'); ?></th>
		<th><?php echo __('Hallsowner Email'); ?></th>
		<th><?php echo __('Hallsowner Fax'); ?></th>
		<th><?php echo __('Hallsowner Country Code'); ?></th>
		<th><?php echo __('Hallsowner Phone Number'); ?></th>
		<th><?php echo __('Hallsowner Secondary Contact'); ?></th>
		<th><?php echo __('Hallsowner Modified Time'); ?></th>
		<th><?php echo __('Registration Date'); ?></th>
		<th><?php echo __('Subtypes Id'); ?></th>
		<th><?php echo __('Users Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subtype['Hallsowner'] as $hallsowner): ?>
		<tr>
			<td><?php echo $hallsowner['id'];?></td>
			<td><?php echo $hallsowner['hallsowner_first_name'];?></td>
			<td><?php echo $hallsowner['hallsowner_last_name'];?></td>
			<td><?php echo $hallsowner['hallsowner_address'];?></td>
			<td><?php echo $hallsowner['hallsowner_email'];?></td>
			<td><?php echo $hallsowner['hallsowner_fax'];?></td>
			<td><?php echo $hallsowner['hallsowner_country_code'];?></td>
			<td><?php echo $hallsowner['hallsowner_phone_number'];?></td>
			<td><?php echo $hallsowner['hallsowner_secondary_contact'];?></td>
			<td><?php echo $hallsowner['hallsowner_modified_time'];?></td>
			<td><?php echo $hallsowner['registration_date'];?></td>
			<td><?php echo $hallsowner['subtypes_id'];?></td>
			<td><?php echo $hallsowner['users_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hallsowners', 'action' => 'view', $hallsowner['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hallsowners', 'action' => 'edit', $hallsowner['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hallsowners', 'action' => 'delete', $hallsowner['id']), null, __('Are you sure you want to delete # %s?', $hallsowner['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hallsowner'), array('controller' => 'hallsowners', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Annualsubcriptions');?></h3>
	<?php if (!empty($subtype['Annualsubcription'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('Expiry Date'); ?></th>
		<th><?php echo __('Subtypes Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subtype['Annualsubcription'] as $annualsubcription): ?>
		<tr>
			<td><?php echo $annualsubcription['id'];?></td>
			<td><?php echo $annualsubcription['start_date'];?></td>
			<td><?php echo $annualsubcription['expiry_date'];?></td>
			<td><?php echo $annualsubcription['subtypes_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'annualsubcriptions', 'action' => 'view', $annualsubcription['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'annualsubcriptions', 'action' => 'edit', $annualsubcription['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'annualsubcriptions', 'action' => 'delete', $annualsubcription['id']), null, __('Are you sure you want to delete # %s?', $annualsubcription['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Annualsubcription'), array('controller' => 'annualsubcriptions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
