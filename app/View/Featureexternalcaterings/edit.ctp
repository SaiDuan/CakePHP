<div class="featureexternalcaterings form">
<?php echo $this->Form->create('Featureexternalcatering');?>
	<fieldset>
		<legend><?php echo __('Edit Featureexternalcatering'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('caterings_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Featureexternalcatering.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Featureexternalcatering.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Featureexternalcaterings'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Halls'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
