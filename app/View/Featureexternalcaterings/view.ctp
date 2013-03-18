<div class="featureexternalcaterings view">
<h2><?php  echo __('Featureexternalcatering');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($featureexternalcatering['Featureexternalcatering']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caterings Description'); ?></dt>
		<dd>
			<?php echo h($featureexternalcatering['Featureexternalcatering']['caterings_description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Featureexternalcatering'), array('action' => 'edit', $featureexternalcatering['Featureexternalcatering']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Featureexternalcatering'), array('action' => 'delete', $featureexternalcatering['Featureexternalcatering']['id']), null, __('Are you sure you want to delete # %s?', $featureexternalcatering['Featureexternalcatering']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Featureexternalcaterings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Featureexternalcatering'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Halls'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Halls');?></h3>
	<?php if (!empty($featureexternalcatering['Halls'])):?>
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
		foreach ($featureexternalcatering['Halls'] as $halls): ?>
		<tr>
			<td><?php echo $halls['id'];?></td>
			<td><?php echo $halls['hall_name'];?></td>
			<td><?php echo $halls['country_code'];?></td>
			<td><?php echo $halls['phone_number'];?></td>
			<td><?php echo $halls['street_address'];?></td>
			<td><?php echo $halls['suburb'];?></td>
			<td><?php echo $halls['state/province'];?></td>
			<td><?php echo $halls['country'];?></td>
			<td><?php echo $halls['postcode/zipcode'];?></td>
			<td><?php echo $halls['website'];?></td>
			<td><?php echo $halls['email'];?></td>
			<td><?php echo $halls['hall_description'];?></td>
			<td><?php echo $halls['capacity'];?></td>
			<td><?php echo $halls['features_private_area'];?></td>
			<td><?php echo $halls['features_private_toilets'];?></td>
			<td><?php echo $halls['features_disabled_toilets'];?></td>
			<td><?php echo $halls['features_wheelchair_access'];?></td>
			<td><?php echo $halls['features_venue_catering'];?></td>
			<td><?php echo $halls['features_other_catering'];?></td>
			<td><?php echo $halls['indoor_facilities_other'];?></td>
			<td><?php echo $halls['outdoor_facitilities_other'];?></td>
			<td><?php echo $halls['technical_facilities_other'];?></td>
			<td><?php echo $halls['party_facilities_other'];?></td>
			<td><?php echo $halls['halls_restriction_other'];?></td>
			<td><?php echo $halls['hallsowners_id'];?></td>
			<td><?php echo $halls['featureparkings_id'];?></td>
			<td><?php echo $halls['featureexternalcaterings_id'];?></td>
			<td><?php echo $halls['partyfacilitiesdjs_id'];?></td>
			<td><?php echo $halls['partyfacilitymusics_id'];?></td>
			<td><?php echo $halls['partyfacilitybands_id'];?></td>
			<td><?php echo $halls['partyfacilitydiscos_id'];?></td>
			<td><?php echo $halls['partyfacilitydancefloors_id'];?></td>
			<td><?php echo $halls['restrictionnoises_id'];?></td>
			<td><?php echo $halls['restrictionevents_id'];?></td>
			<td><?php echo $halls['restrictionminors_id'];?></td>
			<td><?php echo $halls['restrictionanimals_id'];?></td>
			<td><?php echo $halls['restrictionsmokings_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'halls', 'action' => 'view', $halls['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'halls', 'action' => 'edit', $halls['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'halls', 'action' => 'delete', $halls['id']), null, __('Are you sure you want to delete # %s?', $halls['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Halls'), array('controller' => 'halls', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
