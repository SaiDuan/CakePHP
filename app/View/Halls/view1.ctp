<br></br>
<br></br>
<div class="componentheading"></div>


<div id="sresults"><h2 class = "formTitle" style ="margin-left:30px, margin-top:100px"><?php  echo __('Venue Listing');?></h2>
</div>




<div id="sagain" align="right" style="margin-right:30px"><?php echo $this->Html->link('<< Back', "http://ie.infotech.monash.edu.au/project25/CakePHP/",
array('escape' => false)
	);?>
</div>
<table>
<td width="500">



                                    <div id="watermark_box2" style="margin-left:50px">
<h3 class="hallname" style="text-transform:uppercase">
<?php echo h($hall['Hall']['hall_name']); ?></h3>                                                                                <img src="http://ie.infotech.monash.edu.au/project25/hallsforhire/components/com_ezrealty/ezrealty/15bf545774a3f4d8a6d0790d0c549ef3.jpg" height="200" border="1" name="picture" alt="To change image, hover mouse over thumbnails below" />
</div>
<br />
<br />
<div class="related">
	<div class="moduletableHall"> <h3><?php echo __('Hall is Suitable for:');?></h3></div>
	<?php if (!empty($hall['Suitability'])):?>
	<table cellpadding = "0" cellspacing = "0" style="margin-left:50px">
	<?php
		$i = 0;
		foreach ($hall['Suitability'] as $suitability): ?>
		<tr>
			<td><li><?php echo $suitability['suitabilities_name'];?></li></td>
           	<!--<td><?php echo $suitability['suitabilities_name'];?></td>-->
		</tr>
	<?php endforeach; ?>
	</table>
     <?php endif; ?>
</div>


	<div class="moduletableHall"> <h3><?php echo __('Pricing Information:');?></h3></div>


	<div class="moduletableHall"> <h3><?php echo __('Hall Availability:');?></h3></div>




	<div class="moduletableHall"> <h3><?php echo __('Hall Restrictions:');?></h3></div>

</td>

<td>
<div>
	<h3 class="hallname" style="text-transform:uppercase">
<?php echo h($hall['Hall']['hall_name']); ?></h3>

<h3 style ="margin-right:30px"><?php echo h($hall['Hall']['street_address']); ?> </h3>

</div>
</td>

</table>


<div class="halls view">
<br></br>
<br></br>
<!--<ul> 
<li><a href="#tab1">Horse Details</a></li> 
<li><a href="#tab2">Skills</a></li> 
<li><a href="#tab3">Races</a></li> 
<li><a href="#tab4">Markings</a></li> 
</ul>-->

<h2 class = "formTitle" style ="margin-left:30px"><?php  echo __('Hall Information');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hall Name'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['hall_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Code'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['country_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Address'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['street_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suburb'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['suburb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State/province'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['state/province']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode/zipcode'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['postcode/zipcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hall Description'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['hall_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capacity'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['capacity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Features Private Area'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['features_private_area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Features Private Toilets'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['features_private_toilets']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Features Disabled Toilets'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['features_disabled_toilets']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Features Wheelchair Access'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['features_wheelchair_access']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Features Venue Catering'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['features_venue_catering']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Features Other Catering'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['features_other_catering']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indoor Facilities Other'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['indoor_facilities_other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Outdoor Facitilities Other'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['outdoor_facitilities_other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Technical Facilities Other'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['technical_facilities_other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Party Facilities Other'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['party_facilities_other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Halls Restriction Other'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['halls_restriction_other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hallsowner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hall['Hallsowner']['hallsowner_first_name'], array('controller' => 'hallsowners', 'action' => 'view', $hall['Hallsowner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Featureparking'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hall['Featureparking']['featureparkings_desciption'], array('controller' => 'featureparkings', 'action' => 'view', $hall['Featureparking']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Featureexternalcatering'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hall['Featureexternalcatering']['caterings_description'], array('controller' => 'featureexternalcaterings', 'action' => 'view', $hall['Featureexternalcatering']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partyfacilitiesdj'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hall['Partyfacilitiesdj']['dj_descriptions'], array('controller' => 'partyfacilitiesdjs', 'action' => 'view', $hall['Partyfacilitiesdj']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partyfacilitymusic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hall['Partyfacilitymusic']['music_description'], array('controller' => 'partyfacilitymusics', 'action' => 'view', $hall['Partyfacilitymusic']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partyfacilityband'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hall['Partyfacilityband']['band_description'], array('controller' => 'partyfacilitybands', 'action' => 'view', $hall['Partyfacilityband']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partyfacilitydisco'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hall['Partyfacilitydisco']['disco_description'], array('controller' => 'partyfacilitydiscos', 'action' => 'view', $hall['Partyfacilitydisco']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partyfacilitydancefloor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hall['Partyfacilitydancefloor']['dance_floor_description'], array('controller' => 'partyfacilitydancefloors', 'action' => 'view', $hall['Partyfacilitydancefloor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Restrictionnoise'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hall['Restrictionnoise']['noise_description'], array('controller' => 'restrictionnoises', 'action' => 'view', $hall['Restrictionnoise']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Restrictionevent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hall['Restrictionevent']['event_description'], array('controller' => 'restrictionevents', 'action' => 'view', $hall['Restrictionevent']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Restrictionminor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hall['Restrictionminor']['minor_description'], array('controller' => 'restrictionminors', 'action' => 'view', $hall['Restrictionminor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Restrictionanimal'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hall['Restrictionanimal']['animal_description'], array('controller' => 'restrictionanimals', 'action' => 'view', $hall['Restrictionanimal']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Restrictionsmoking'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hall['Restrictionsmoking']['smoking_description'], array('controller' => 'restrictionsmokings', 'action' => 'view', $hall['Restrictionsmoking']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Images');?></h3>
	<?php if (!empty($hall['Image'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Image Location'); ?></th>
		<th><?php echo __('Halls Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hall['Image'] as $image): ?>
		<tr>
			<td><?php echo $image['id'];?></td>
			<td><?php echo $image['image_location'];?></td>
			<td><?php echo $image['halls_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'images', 'action' => 'view', $image['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'images', 'action' => 'edit', $image['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'images', 'action' => 'delete', $image['id']), null, __('Are you sure you want to delete # %s?', $image['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<h3><?php echo __('Related Rooms');?></h3>
	<?php if (!empty($hall['Room'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Room Name'); ?></th>
		<th><?php echo __('Room Capacity'); ?></th>
		<th><?php echo __('Halls Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hall['Room'] as $room): ?>
		<tr>
			<td><?php echo $room['id'];?></td>
			<td><?php echo $room['room_name'];?></td>
			<td><?php echo $room['room_capacity'];?></td>
			<td><?php echo $room['halls_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rooms', 'action' => 'view', $room['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rooms', 'action' => 'edit', $room['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rooms', 'action' => 'delete', $room['id']), null, __('Are you sure you want to delete # %s?', $room['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<h3><?php echo __('Related Restrictiondecorations');?></h3>
	<?php if (!empty($hall['Restrictiondecoration'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Decoration Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hall['Restrictiondecoration'] as $restrictiondecoration): ?>
		<tr>
			<td><?php echo $restrictiondecoration['id'];?></td>
			<td><?php echo $restrictiondecoration['decoration_description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'restrictiondecorations', 'action' => 'view', $restrictiondecoration['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'restrictiondecorations', 'action' => 'edit', $restrictiondecoration['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'restrictiondecorations', 'action' => 'delete', $restrictiondecoration['id']), null, __('Are you sure you want to delete # %s?', $restrictiondecoration['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Restrictiondecoration'), array('controller' => 'restrictiondecorations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Featurecateringrestrictions');?></h3>
	<?php if (!empty($hall['Featurecateringrestriction'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cateringrestriction Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hall['Featurecateringrestriction'] as $featurecateringrestriction): ?>
		<tr>
			<td><?php echo $featurecateringrestriction['id'];?></td>
			<td><?php echo $featurecateringrestriction['cateringrestriction_description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'featurecateringrestrictions', 'action' => 'view', $featurecateringrestriction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'featurecateringrestrictions', 'action' => 'edit', $featurecateringrestriction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'featurecateringrestrictions', 'action' => 'delete', $featurecateringrestriction['id']), null, __('Are you sure you want to delete # %s?', $featurecateringrestriction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Featurecateringrestriction'), array('controller' => 'featurecateringrestrictions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="related">
	<h3><?php echo __('Related Availabilities');?></h3>
	<?php if (!empty($hall['Availability'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Day'); ?></th>
		<th><?php echo __('From Time'); ?></th>
		<th><?php echo __('To Time'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hall['Availability'] as $availability): ?>
		<tr>
			<td><?php echo $availability['id'];?></td>
			<td><?php echo $availability['day'];?></td>
			<td><?php echo $availability['from_time'];?></td>
			<td><?php echo $availability['to_time'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'availabilities', 'action' => 'view', $availability['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'availabilities', 'action' => 'edit', $availability['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'availabilities', 'action' => 'delete', $availability['id']), null, __('Are you sure you want to delete # %s?', $availability['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Availability'), array('controller' => 'availabilities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Suitabilities');?></h3>
	<?php if (!empty($hall['Suitability'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Suitabilities Name'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hall['Suitability'] as $suitability): ?>
		<tr>
			<td><?php echo $suitability['suitabilities_name'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>

<div class="related">
	<h3><?php echo __('Related Pricings');?></h3>
	<?php if (!empty($hall['Pricing'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Price Name'); ?></th>
		<th><?php echo __('Price/fee'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hall['Pricing'] as $pricing): ?>
		<tr>
			<td><?php echo $pricing['id'];?></td>
			<td><?php echo $pricing['price_name'];?></td>
			<td><?php echo $pricing['HallsHasPricing']['price_fee'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pricings', 'action' => 'view', $pricing['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pricings', 'action' => 'edit', $pricing['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pricings', 'action' => 'delete', $pricing['id']), null, __('Are you sure you want to delete # %s?', $pricing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pricing'), array('controller' => 'pricings', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Technical Facilities');?></h3>
	<?php if (!empty($hall['TechnicalFacility'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Technical Facilities Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hall['TechnicalFacility'] as $technicalFacility): ?>
		<tr>
			<td><?php echo $technicalFacility['id'];?></td>
			<td><?php echo $technicalFacility['technical_facilities_name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'technical_facilities', 'action' => 'view', $technicalFacility['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'technical_facilities', 'action' => 'edit', $technicalFacility['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'technical_facilities', 'action' => 'delete', $technicalFacility['id']), null, __('Are you sure you want to delete # %s?', $technicalFacility['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Technical Facility'), array('controller' => 'technical_facilities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Indoorfacilities');?></h3>
	<?php if (!empty($hall['Indoorfacility'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Indoor Facilities Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hall['Indoorfacility'] as $indoorfacility): ?>
		<tr>
			<td><?php echo $indoorfacility['id'];?></td>
			<td><?php echo $indoorfacility['indoor_facilities_name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'indoorfacilities', 'action' => 'view', $indoorfacility['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'indoorfacilities', 'action' => 'edit', $indoorfacility['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'indoorfacilities', 'action' => 'delete', $indoorfacility['id']), null, __('Are you sure you want to delete # %s?', $indoorfacility['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Indoorfacility'), array('controller' => 'indoorfacilities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Outdoorfacilities');?></h3>
	<?php if (!empty($hall['Outdoorfacility'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>

		<th><?php echo __('Outdoor Facilities Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hall['Outdoorfacility'] as $outdoorfacility): ?>
		<tr>
						<td><?php echo $outdoorfacility['outdoor_facilities_name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'outdoorfacilities', 'action' => 'view', $outdoorfacility['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'outdoorfacilities', 'action' => 'edit', $outdoorfacility['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'outdoorfacilities', 'action' => 'delete', $outdoorfacility['id']), null, __('Are you sure you want to delete # %s?', $outdoorfacility['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Outdoorfacility'), array('controller' => 'outdoorfacilities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
