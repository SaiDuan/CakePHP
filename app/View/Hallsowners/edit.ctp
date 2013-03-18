<head>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
    </script>
</head>
<br></br>
<br></br>
<div class="hallsowners form">
<?php echo $this->Form->create('Hallsowner');?>
	<fieldset>
		<legend><?php echo __('Edit Contact Details'); ?></legend>
	<?php
		$currentdatetime = date('Y-m-d H:i:s');
		echo $this->Form->input('hallsowner_first_name', array('label' => 'First Name'));
		echo $this->Form->input('hallsowner_last_name', array('label'=>'Last Name'));
		echo $this->Form->input('hallsowner_address', array('label'=>'Address'));
		echo $this->Form->input('hallsowner_email', array('label'=>'Email Addressing'));
		echo $this->Form->input('hallsowner_fax', array('label'=>'Fax No'));
		echo $this->Form->input('hallsowner_phone_number', array('label'=>'Phone No'));
		echo $this->Form->input('hallsowner_secondary_contact', array('label' => 'Hallsowner Secondary Contact'));
		echo $this->Form->input('hallsowner_secondary_number', array('label'=>'Hallsowner Secondary No'));
		echo $this->Form->hidden('hallsowner_modified_time', array('value' => $currentdatetime));
		if ($current_user['user_group'] == 'admin'){
		echo $this->Form->input('subtypes_id', array('label'=>'Subtype ID'));
		echo $this->Form->input('users_id', array('label'=>'User ID'));
	}
	?>
<?php
if ($current_user['user_group'] == 'admin'){
		echo $this->Form->input('expire_date', array('label'=>'Expire Date'));
	}
?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hallsowner.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Hallsowner.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hallsowners'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subtypes'), array('controller' => 'subtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subtype'), array('controller' => 'subtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
