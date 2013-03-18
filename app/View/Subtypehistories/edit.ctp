<div class="subtypehistories form">
<?php echo $this->Form->create('Subtypehistory');?>
	<fieldset>
		<legend><?php echo __('Edit Subtypehistory'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subtype_history_year');
		echo $this->Form->input('subtype_history_price');
		echo $this->Form->input('subtype_history_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subtypehistory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Subtypehistory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subtypehistories'), array('action' => 'index'));?></li>
	</ul>
</div>
