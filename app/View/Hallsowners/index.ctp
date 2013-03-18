<br></br>
<br></br>
<br></br>
<div id = "main2_Centre">

<div class="hallsowners index">
	<h2><?php echo __('My Contact Details');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<!--- <th><?php echo __('ID'); ?></th>-->
</th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Email'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('Fax');?></th>-->
			<!--<th><?php echo $this->Paginator->sort('Country_code');?></th>-->
			<!--<th><?php echo $this->Paginator->sort('Phone_number');?></th>-->
			<!--<th><?php echo $this->Paginator->sort('Secondary_contact');?></th>-->
			<!--<th><?php echo $this->Paginator->sort('hallsowner_modified_time');?></th>-->
			<th><?php echo __('Registration Date'); ?></th>

			<th><?php echo __('Membership Type');?></th>
			<!--<th><?php echo $this->Paginator->sort('users_id');?></th>-->
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($hallsowners as $hallsowner): ?>
<?php if ($current_user['id'] == $hallsowner['Hallsowner']['users_id'] || $current_user['user_group'] == 'admin'): ?>
	<tr>
		<!--<td><?php echo h($hallsowner['Hallsowner']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($hallsowner['Hallsowner']['hallsowner_first_name']); ?>&nbsp;</td>
		<td><?php echo h($hallsowner['Hallsowner']['hallsowner_last_name']); ?>&nbsp;</td>
		<td><?php echo h($hallsowner['Hallsowner']['hallsowner_address']); ?>&nbsp;</td>
		<td><?php echo h($hallsowner['Hallsowner']['hallsowner_email']); ?>&nbsp;</td>
		<!--<td><?php echo h($hallsowner['Hallsowner']['hallsowner_fax']); ?>&nbsp;</td>-->
		<!--<td><?php echo h($hallsowner['Hallsowner']['hallsowner_country_code']); ?>&nbsp;</td>-->
		<!--<td><?php echo h($hallsowner['Hallsowner']['hallsowner_phone_number']); ?>&nbsp;</td>-->
		<!--<td><?php echo h($hallsowner['Hallsowner']['hallsowner_secondary_contact']); ?>&nbsp;</td>-->
		<!--<td><?php echo h($hallsowner['Hallsowner']['hallsowner_modified_time']); ?>&nbsp;</td>-->
		<td><?php echo h($hallsowner['Hallsowner']['registration_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hallsowner['Subtype']['hallsowner_type'], array('controller' => 'subtypes', 'action' => 'view', $hallsowner['Subtype']['id'])); ?>
		</td>
		<!--<td>
			<?php echo $this->Html->link($hallsowner['User']['username'], array('controller' => 'users', 'action' => 'view', $hallsowner['User']['id'])); ?>
		</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('View More'), array('action' => 'view', $hallsowner['Hallsowner']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hallsowner['Hallsowner']['id'])); ?>
<?php if ($current_user['user_group'] == 'admin'): ?>

			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hallsowner['Hallsowner']['id']), null, __('Are you sure you want to delete # %s?', $hallsowner['Hallsowner']['id'])); ?>
	<?php endif; ?>
		</td>
	</tr>
<?php endif; ?>
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
		<?php if ($current_user['user_group'] == 'admin'): ?>
		<li><?php echo $this->Html->link(__('New Hallsowner'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subtypes'), array('controller' => 'subtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subtype'), array('controller' => 'subtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<?php endif; ?>
		<li><?php echo $this->Html->link(__('View Account Details'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Add New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
