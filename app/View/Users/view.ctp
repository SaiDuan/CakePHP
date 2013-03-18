<div class="users view">
<br></br>
<br></br>
<h2 class = "formTitle" style ="margin-left:30px"><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Group'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_group']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Time'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password Modified Time'); ?></dt>
		<dd>
			<?php echo h($user['User']['password_modified_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<?php if ($current_user['id'] == $user['User']['id'] || $current_user['user_group'] == 'admin'): ?>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<?php endif; ?>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hallsowners'), array('controller' => 'hallsowners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hallsowner'), array('controller' => 'hallsowners', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Hallsowners');?></h3>
	<?php if (!empty($user['Hallsowner'])):?>
		<dl>
			<dt><?php echo __('Id');?></dt>
		<dd>
	<?php echo $user['Hallsowner']['id'];?>
&nbsp;</dd>
		<dt><?php echo __('Hallsowner First Name');?></dt>
		<dd>
	<?php echo $user['Hallsowner']['hallsowner_first_name'];?>
&nbsp;</dd>
		<dt><?php echo __('Hallsowner Last Name');?></dt>
		<dd>
	<?php echo $user['Hallsowner']['hallsowner_last_name'];?>
&nbsp;</dd>
		<dt><?php echo __('Hallsowner Address');?></dt>
		<dd>
	<?php echo $user['Hallsowner']['hallsowner_address'];?>
&nbsp;</dd>
		<dt><?php echo __('Hallsowner Email');?></dt>
		<dd>
	<?php echo $user['Hallsowner']['hallsowner_email'];?>
&nbsp;</dd>
		<dt><?php echo __('Hallsowner Fax');?></dt>
		<dd>
	<?php echo $user['Hallsowner']['hallsowner_fax'];?>
&nbsp;</dd>
		<dt><?php echo __('Hallsowner Phone Number');?></dt>
		<dd>
	<?php echo $user['Hallsowner']['hallsowner_phone_number'];?>
&nbsp;</dd>
		<dt><?php echo __('Hallsowner Secondary Contact');?></dt>
		<dd>
	<?php echo $user['Hallsowner']['hallsowner_secondary_contact'];?>
&nbsp;</dd>
		<dt><?php echo __('Hallsowner Modified Time');?></dt>
		<dd>
	<?php echo $user['Hallsowner']['hallsowner_modified_time'];?>
&nbsp;</dd>
		<dt><?php echo __('Registration Date');?></dt>
		<dd>
	<?php echo $user['Hallsowner']['registration_date'];?>
&nbsp;</dd>
		<dt><?php echo __('Subtypes Id');?></dt>
		<dd>
	<?php echo $user['Hallsowner']['subtypes_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Users Id');?></dt>
		<dd>
	<?php echo $user['Hallsowner']['users_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Hallsowner'), array('controller' => 'hallsowners', 'action' => 'edit', $user['Hallsowner']['id'])); ?></li>
			</ul>
		</div>
	</div>
	