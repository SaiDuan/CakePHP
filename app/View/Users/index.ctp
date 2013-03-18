

<br></br>
<br></br>
<br></br>
<div id = "main2_Centre">
<div class="users index">

<h2 class = "componentheading"><?php echo __('My Account Details');?></h2>

	<table>

	<tr>
			<th><?php echo __('ID'); ?></th>
</th>
		<th><?php echo __('User Name'); ?></th>

		<th><?php echo __('Email'); ?></th>
		
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user): ?>
	<?php if ($current_user['id'] == $user['User']['id'] || $current_user['user_group'] == 'admin'): ?>	
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username'] ); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		
		<td class="actions" style = "width:320px">

<?php if ($current_user['id'] == $user['User']['id'] || $current_user['user_group'] == 'admin'): ?>

			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Change Password'), array('action' => 'changepassword', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php endif; ?>
			<?php if ($current_user['user_group'] == 'admin'): ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>

			<?php endif; ?>

		</td>
	</tr>
<?php endif; ?>
<?php endforeach; ?>

	</table>
	<p>
	<?php
//	echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));
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
	<?php echo __('Actions'); ?>
	<ul>
		<?php if ( $current_user['user_group'] == 'admin'): ?>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		
		<li><?php echo $this->Html->link(__('List Hallsowners'), array('controller' => 'hallsowners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hallsowner'), array('controller' => 'hallsowners', 'action' => 'add')); ?> </li>
		<?php endif; ?>
	</ul>
</div>
</div>


