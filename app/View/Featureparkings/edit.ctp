<div class="featureparkings form">
<?php echo $this->Form->create('Featureparking');?>
	<fieldset>
		<legend><?php echo __('Edit Featureparking'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('featureparkings_desciption');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Featureparking.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Featureparking.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Featureparkings'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
