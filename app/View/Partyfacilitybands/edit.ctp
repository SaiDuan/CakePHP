<div class="partyfacilitybands form">
<?php echo $this->Form->create('Partyfacilityband');?>
	<fieldset>
		<legend><?php echo __('Edit Partyfacilityband'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('band_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Partyfacilityband.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Partyfacilityband.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Partyfacilitybands'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
