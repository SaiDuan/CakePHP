<div class="restrictionnoises form">
<?php echo $this->Form->create('Restrictionnoise');?>
	<fieldset>
		<legend><?php echo __('Edit Restrictionnoise'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('noise_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Restrictionnoise.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Restrictionnoise.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Restrictionnoises'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
