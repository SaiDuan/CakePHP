 
<div class="hallsowners view">
<br></br>
<br></br>
<h2 class = "formTitle" style ="margin-left:30px"><?php  echo __('My Contact Details');?></h2>
	<dl>
		<!--<dt><?php echo __('ID'); ?></dt>-->
		<!--<dd>
			<?php echo h($hallsowner['My Contact Details']['id']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($hallsowner['Hallsowner']['hallsowner_first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($hallsowner['Hallsowner']['hallsowner_last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($hallsowner['Hallsowner']['hallsowner_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($hallsowner['Hallsowner']['hallsowner_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($hallsowner['Hallsowner']['hallsowner_fax']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Phone Number'); ?></dt>
		<dd>
			<?php echo h($hallsowner['Hallsowner']['hallsowner_phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Secondary Contact'); ?></dt>
		<dd>
			<?php echo h($hallsowner['Hallsowner']['hallsowner_secondary_contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Time'); ?></dt>
		<dd>
			<?php echo h($hallsowner['Hallsowner']['hallsowner_modified_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registration Date'); ?></dt>
		<dd>
			<?php echo h($hallsowner['Hallsowner']['registration_date']); ?>
			&nbsp;
		</dd>
		<!--<dt><?php echo __('Membership Type'); ?></dt>
		<dd>-->
			<?php echo $this->Html->link($hallsowner['Subtype']['hallsowner_type'], array('controller' => 'subtypes', 'action' => 'view', $hallsowner['Subtype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hallsowner['User']['username'], array('controller' => 'users', 'action' => 'view', $hallsowner['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hallsowner'), array('action' => 'edit', $hallsowner['Hallsowner']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hallsowner'), array('action' => 'delete', $hallsowner['Hallsowner']['id']), null, __('Are you sure you want to delete # %s?', $hallsowner['Hallsowner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hallsowners'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hallsowner'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subtypes'), array('controller' => 'subtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subtype'), array('controller' => 'subtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Halls');?></h3>
	<?php if (!empty($hallsowner['Hall'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hall Name'); ?></th>
		<th><?php echo __('Country Code'); ?></th>
		<th><?php echo __('Phone Number'); ?></th>
		<th><?php echo __('Street Address'); ?></th>
		<th><?php echo __('Suburb'); ?></th>
		<th><?php echo __('State/province'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('Postcode/zipcode'); ?></th>
		
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hallsowner['Hall'] as $hall): ?>
		<tr>
			<td><?php echo $hall['id'];?></td>
			<td><?php echo $hall['hall_name'];?></td>
			<td><?php echo $hall['country_code'];?></td>
			<td><?php echo $hall['phone_number'];?></td>
			<td><?php echo $hall['street_address'];?></td>
			<td><?php echo $hall['suburb'];?></td>
			<td><?php echo $hall['state/province'];?></td>
			<td><?php echo $hall['country'];?></td>
			<td><?php echo $hall['postcode/zipcode'];?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'halls', 'action' => 'view', $hall['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'halls', 'action' => 'edit', $hall['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'halls', 'action' => 'delete', $hall['id']), null, __('Are you sure you want to delete # %s?', $hall['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
