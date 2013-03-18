<div class="restrictionnoises form">
<?php echo $this->Form->create('Restrictionnoise');?>
	<fieldset>
		<legend><?php echo __('Add Restrictionnoise'); ?></legend>
	<?php
		echo $this->Form->input('noise_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Restrictionnoises'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
