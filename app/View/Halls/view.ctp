    <script>
    $(function() {
        $( "#tabs" ).tabs();
        $( "#accordion" ).accordion();
    });
    </script>


<br></br>
<br></br>


<div id="sresults">
<h2 class = "formTitle" style ="margin-left:30px, margin-top:100px">
<?php  echo __('Venue Listing');?>
</h2>
</div>

<table>
<td width="60%">
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
			<?php echo h($hall['Hall']['state']); ?>
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
</dl>
</td>
<td> 
<?php 
if($hall['Hall']['image'] != null) 
{ 
echo "Current Image: <br /><br />"; 
echo $this->Html->image('images/'.$hall['Hall']['image'], array('width'=>'250px','height'=>'200px')); 
} 
else 
{ 
echo "No image available"; 
} 
?> 
</td> 

</table>

<div id="tabs"> 
<ul> 
<li><a href="#tab1">Rooms & Capacity</a></li> 
<li><a href="#tab2">Hall Features</a></li> 
<li><a href="#tab3">Suitabilities</a></li> 
<li><a href="#tab4">Hall Inclusions</a></li> 
<li><a href="#tab5">Hall Availability</a></li> 
<li><a href="#tab6">Hall Restrictions</a></li> 
<li><a href="#tab7">Pricing</a></li> 
</ul>

<div id="tab1">
<dl style="background-color: white; border: 0px" >
<dt><?php echo __('Capacity'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['capacity']); ?>
			&nbsp;
		</dd>
</dl>
</div>

<div id = "tab2">
<dl style="background-color: white; border: 0px" >
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
</dl>
</div>
<div id="tab3">
<?php if (!empty($hall['Suitability'])):?>
	<table cellpadding = "0" cellspacing = "0">
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

<div id="tab4">
<div class="related">
	<h3><?php echo __('Technical Facilities');?></h3>
	<?php if (!empty($hall['TechnicalFacility'])):?>
	<table cellpadding = "0" cellspacing = "0">

	<?php
		$i = 0;
		foreach ($hall['TechnicalFacility'] as $technicalFacility): ?>
		<tr>
			<td><?php echo $technicalFacility['technical_facilities_name'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<h3><?php echo __('Indoorfacilities');?></h3>
	<?php if (!empty($hall['Indoorfacility'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<?php
		$i = 0;
		foreach ($hall['Indoorfacility'] as $indoorfacility): ?>
		<tr>
			<td><?php echo $indoorfacility['indoor_facilities_name'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<h3><?php echo __('Outdoorfacilities');?></h3>
	<?php if (!empty($hall['Outdoorfacility'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<?php
		$i = 0;
		foreach ($hall['Outdoorfacility'] as $outdoorfacility): ?>
		<tr>
						<td><?php echo $outdoorfacility['outdoor_facilities_name'];?></td>

		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<dl style="background-color: white; border: 0px" >
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
</dl>

</div>

<div id="tab5">
<h3><?php echo __('Availabilities');?></h3>
<?php if (!empty($hall['Availability'])):?>
<table cellpadding = "0" cellspacing = "0">
	<?php
		$i = 0;
		foreach ($hall['Availability'] as $availability): ?>
<th><?php echo __('Day'); ?></th>
<td><?php echo $availability['from_time'];?></td>
<td><?php echo $availability['to_time'];?></td>
<?php endforeach; ?>
</table>
<?php endif; ?>
</div>

<div id="tab6">
<dl style="background-color: white; border: 0px" >
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

<div id="tab7">
<h3><?php echo __('Pricings');?></h3>
<?php if (!empty($hall['Pricing'])):?>
<table cellpadding = "0" cellspacing = "0">
<?php
		$i = 0;
		foreach ($hall['Pricing'] as $pricing): ?>
<tr>
			<td><?php echo $pricing['id'];?></td>
			<td><?php echo $pricing['price_name'];?></td>
			<td><?php echo $pricing['HallsHasPricing']['price_fee'];?></td>
            <?php endforeach; ?>
</table>
<?php endif; ?>


</div>

</div>