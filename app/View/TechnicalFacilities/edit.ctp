<div class="technicalFacilities form">
<?php echo $this->Form->create('TechnicalFacility');?>
	<fieldset>
		<legend><?php echo __('Edit Technical Facility'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('technical_facilities_name');
		echo $this->Form->input('Hall');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TechnicalFacility.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TechnicalFacility.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Technical Facilities'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
