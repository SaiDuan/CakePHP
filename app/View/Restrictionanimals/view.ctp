<div class="restrictionanimals view">
<h2><?php  echo __('Restrictionanimal');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($restrictionanimal['Restrictionanimal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Animal Description'); ?></dt>
		<dd>
			<?php echo h($restrictionanimal['Restrictionanimal']['animal_description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Restrictionanimal'), array('action' => 'edit', $restrictionanimal['Restrictionanimal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Restrictionanimal'), array('action' => 'delete', $restrictionanimal['Restrictionanimal']['id']), null, __('Are you sure you want to delete # %s?', $restrictionanimal['Restrictionanimal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Restrictionanimals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restrictionanimal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Halls');?></h3>
	<?php if (!empty($restrictionanimal['Hall'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hall Name'); ?></th>
		<th><?php echo __('Country Code'); ?></th>
		<th><?php echo __('Phone Number'); ?></th>
		<th><?php echo __('Street Address'); ?></th>
		<th><?php echo __('Suburb'); ?></th>
		<th><?php echo __('State/province'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('Postcode/zipcode'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Hall Description'); ?></th>
		<th><?php echo __('Capacity'); ?></th>
		<th><?php echo __('Features Private Area'); ?></th>
		<th><?php echo __('Features Private Toilets'); ?></th>
		<th><?php echo __('Features Disabled Toilets'); ?></th>
		<th><?php echo __('Features Wheelchair Access'); ?></th>
		<th><?php echo __('Features Venue Catering'); ?></th>
		<th><?php echo __('Features Other Catering'); ?></th>
		<th><?php echo __('Indoor Facilities Other'); ?></th>
		<th><?php echo __('Outdoor Facitilities Other'); ?></th>
		<th><?php echo __('Technical Facilities Other'); ?></th>
		<th><?php echo __('Party Facilities Other'); ?></th>
		<th><?php echo __('Halls Restriction Other'); ?></th>
		<th><?php echo __('Hallsowners Id'); ?></th>
		<th><?php echo __('Featureparkings Id'); ?></th>
		<th><?php echo __('Featureexternalcaterings Id'); ?></th>
		<th><?php echo __('Partyfacilitiesdjs Id'); ?></th>
		<th><?php echo __('Partyfacilitymusics Id'); ?></th>
		<th><?php echo __('Partyfacilitybands Id'); ?></th>
		<th><?php echo __('Partyfacilitydiscos Id'); ?></th>
		<th><?php echo __('Partyfacilitydancefloors Id'); ?></th>
		<th><?php echo __('Restrictionnoises Id'); ?></th>
		<th><?php echo __('Restrictionevents Id'); ?></th>
		<th><?php echo __('Restrictionminors Id'); ?></th>
		<th><?php echo __('Restrictionanimals Id'); ?></th>
		<th><?php echo __('Restrictionsmokings Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($restrictionanimal['Hall'] as $hall): ?>
		<tr>
			<td><?php echo $hall['id'];?></td>
			<td><?php echo $hall['hall_name'];?></td>
			<td><?php echo $hall['country_code'];?></td>
			<td><?php echo $hall['phone_number'];?></td>
			<td><?php echo $hall['street_address'];?></td>
			<td><?php echo $hall['suburb'];?></td>
			<td><?php echo $hall['state/province'];?></td>
			<td><?php echo $hall['country'];?></td>
			<td><?php echo $hall['postcode/zipcode'];?></td>
			<td><?php echo $hall['website'];?></td>
			<td><?php echo $hall['email'];?></td>
			<td><?php echo $hall['hall_description'];?></td>
			<td><?php echo $hall['capacity'];?></td>
			<td><?php echo $hall['features_private_area'];?></td>
			<td><?php echo $hall['features_private_toilets'];?></td>
			<td><?php echo $hall['features_disabled_toilets'];?></td>
			<td><?php echo $hall['features_wheelchair_access'];?></td>
			<td><?php echo $hall['features_venue_catering'];?></td>
			<td><?php echo $hall['features_other_catering'];?></td>
			<td><?php echo $hall['indoor_facilities_other'];?></td>
			<td><?php echo $hall['outdoor_facitilities_other'];?></td>
			<td><?php echo $hall['technical_facilities_other'];?></td>
			<td><?php echo $hall['party_facilities_other'];?></td>
			<td><?php echo $hall['halls_restriction_other'];?></td>
			<td><?php echo $hall['hallsowners_id'];?></td>
			<td><?php echo $hall['featureparkings_id'];?></td>
			<td><?php echo $hall['featureexternalcaterings_id'];?></td>
			<td><?php echo $hall['partyfacilitiesdjs_id'];?></td>
			<td><?php echo $hall['partyfacilitymusics_id'];?></td>
			<td><?php echo $hall['partyfacilitybands_id'];?></td>
			<td><?php echo $hall['partyfacilitydiscos_id'];?></td>
			<td><?php echo $hall['partyfacilitydancefloors_id'];?></td>
			<td><?php echo $hall['restrictionnoises_id'];?></td>
			<td><?php echo $hall['restrictionevents_id'];?></td>
			<td><?php echo $hall['restrictionminors_id'];?></td>
			<td><?php echo $hall['restrictionanimals_id'];?></td>
			<td><?php echo $hall['restrictionsmokings_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'halls', 'action' => 'view', $hall['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'halls', 'action' => 'edit', $hall['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'halls', 'action' => 'delete', $hall['id']), null, __('Are you sure you want to delete # %s?', $hall['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
