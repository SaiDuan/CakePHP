<div class="images view">
<h2><?php  echo __('Image');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($image['Image']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Name'); ?></dt>
		<dd>
			<?php echo h($image['Image']['image_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Display'); ?></dt>
		<dd class="datacentre"> 
			<?php  
			echo $this->Html->image('images/'.$image['Image']['image_name'], array('width'=>'320px','height'=>'240px')); 
			?>
		</dd>
		<dt><?php echo __('Hall'); ?></dt>
		<dd>
			<?php echo $this->Html->link($image['Hall']['hall_name'], array('controller' => 'halls', 'action' => 'view', $image['Hall']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Image'), array('action' => 'edit', $image['Image']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Image'), array('action' => 'delete', $image['Image']['id']), null, __('Are you sure you want to delete # %s?', $image['Image']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
