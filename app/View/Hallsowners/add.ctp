<br></br>
<br></br>

<div class="hallsowners form">
<?php echo $this->Form->create('Hallsowner');?>

		<h2><?php echo __('Please provide your contact details '); ?></h2>
<br></br>

	<?php
		echo $this->Form->input('First_name');
		echo $this->Form->input('Last_name');
		echo $this->Form->input('Address');
		echo $this->Form->input('Email');
		echo $this->Form->input('Fax');
		echo $this->Form->hidden('Country code');
		echo $this->Form->input('Phone Number');
		echo $this->Form->input('Secondary_Contact');
		echo $this->Form->hidden('hallsowner_modified_time');
		echo $this->Form->hidden('registration_date');
		echo $this->Form->hidden('subtypes_id');
		echo $this->Form->hidden('users_id');
	?>


<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<!--<li><?php echo $this->Html->link(__('List Hallsowners'), array('action' => 'index'));?></li>-->
		<!--<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('List Subtypes'), array('controller' => 'subtypes', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Subtype'), array('controller' => 'subtypes', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('View my listings'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Add new Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
