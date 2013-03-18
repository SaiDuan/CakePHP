<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Edit Account Details'); ?></legend>
	<?php
		$currentdatetime = date('Y-m-d H:i:s');
		echo $this->Form->input('id');
		echo $this->Form->hidden('username');
		echo $this->Form->hidden('modified_time', array('value' => $currentdatetime));
		echo $this->Form->hidden('password_modified_time', array('value' => $currentdatetime));
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Hallsowners'), array('controller' => 'hallsowners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hallsowner'), array('controller' => 'hallsowners', 'action' => 'add')); ?> </li>
	</ul>
</div>
