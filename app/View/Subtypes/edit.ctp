<div class="subtypes form">
<?php echo $this->Form->create('Subtype');?>
	<fieldset>
		<legend><?php echo __('Edit Subtype'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hallsowner_type');
		echo $this->Form->input('type_limitation');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subtype.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Subtype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subtypes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Hallsowners'), array('controller' => 'hallsowners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hallsowner'), array('controller' => 'hallsowners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Annualsubcriptions'), array('controller' => 'annualsubcriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Annualsubcription'), array('controller' => 'annualsubcriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
