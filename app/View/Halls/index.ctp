<br></br>
<br></br>

<script language="javascript">
	
	$(document).ready( function () {
		$('#data').dataTable(
		{
			"sDom": '<"lf"lf>tip',
			"bAutoWidth": true,
			"aaSorting": [], //no sorting when initialize.
			"sPaginationType": "full_numbers",
			//"bJQueryUI": false
			
			//change the number of entries per page.
			//"iDisplayLength": 25, initial display.
			//"aLengthMenu": [[10, 20, 30, -1], [10, 20, 30, "All"]]
		
		});
		
		$('#data tbody tr:even').addClass("listeven");
		$('#data tbody tr').mouseover(function()
			{
				$(this).addClass('dataHover');
			}
		);
		
		$('#data tbody tr').mouseout(function()
			{
				$(this).removeClass('dataHover');
	
			}
		);
		
		
				
		//enable to click the table row
		//$('#data tbody tr').click(function(){
		//	window.location = $(this).attr('href');
		//	return false;
		//});
		
	});
	
</script>




<div class="halls index">
	<h2 class="formTitle"><?php echo __('Halls');?></h2>
<br></br>

	<table cellpadding="5" cellspacing="0" width="100px" style ="margin-left:100px">
	<tr>
			<th><?php echo __('ID'); ?></th>
</th>
			<th><?php echo __('Hall Name'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('country_code');?></th>-->
			<th><?php echo __('Phone Number'); ?></th>
			<th><?php echo __('Address'); ?></th>
			<th><?php echo __('Suburb'); ?></th>
			<th><?php echo __('State'); ?></th>
		<th><?php echo __('Country'); ?></th>
			<th><?php echo __('Postal Code'); ?></th>
			
			<th class="actions"><!--<?php echo __('Action');?>--></th>
	</tr>
	<?php
	$i = 0;
	foreach ($halls as $hall): ?>
	<tr>
		<td><?php echo h($hall['Hall']['id']); ?>&nbsp;</td>
		<td><?php echo h($hall['Hall']['hall_name']); ?>&nbsp;</td>
		<!--<td><?php echo h($hall['Hall']['country_code']); ?>&nbsp;</td>-->
		<td><?php echo h($hall['Hall']['phone_number']); ?>&nbsp;</td>
		<td><?php echo h($hall['Hall']['street_address']); ?>&nbsp;</td>
		<td><?php echo h($hall['Hall']['suburb']); ?>&nbsp;</td>
		<td><?php echo h($hall['Hall']['state']); ?>&nbsp;</td>
		<td><?php echo h($hall['Hall']['country']); ?>&nbsp;</td>
		<td><?php echo h($hall['Hall']['postcode/zipcode']); ?>&nbsp;</td>
		
		<td class="actions" style ="width:10px">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hall['Hall']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hall['Hall']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hall['Hall']['id']), null, __('Are you sure you want to delete # %s?', $hall['Hall']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<br></br>
	<br></br>
	<br></br>
	<br></br>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<!--<button><?php echo $this->Html->link(__('New Hall'), array('action' => 'add')); ?> </button>-->
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li> <?php echo $this->Html->link(__('New Hall'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hallsowners'), array('controller' => 'hallsowners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hallsowner'), array('controller' => 'hallsowners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Featureparkings'), array('controller' => 'featureparkings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Featureparking'), array('controller' => 'featureparkings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Featureexternalcaterings'), array('controller' => 'featureexternalcaterings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Featureexternalcatering'), array('controller' => 'featureexternalcaterings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partyfacilitiesdjs'), array('controller' => 'partyfacilitiesdjs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partyfacilitiesdj'), array('controller' => 'partyfacilitiesdjs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partyfacilitymusics'), array('controller' => 'partyfacilitymusics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partyfacilitymusic'), array('controller' => 'partyfacilitymusics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partyfacilitybands'), array('controller' => 'partyfacilitybands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partyfacilityband'), array('controller' => 'partyfacilitybands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partyfacilitydiscos'), array('controller' => 'partyfacilitydiscos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partyfacilitydisco'), array('controller' => 'partyfacilitydiscos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partyfacilitydancefloors'), array('controller' => 'partyfacilitydancefloors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partyfacilitydancefloor'), array('controller' => 'partyfacilitydancefloors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restrictionnoises'), array('controller' => 'restrictionnoises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restrictionnoise'), array('controller' => 'restrictionnoises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restrictionevents'), array('controller' => 'restrictionevents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restrictionevent'), array('controller' => 'restrictionevents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restrictionminors'), array('controller' => 'restrictionminors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restrictionminor'), array('controller' => 'restrictionminors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restrictionanimals'), array('controller' => 'restrictionanimals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restrictionanimal'), array('controller' => 'restrictionanimals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restrictionsmokings'), array('controller' => 'restrictionsmokings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restrictionsmoking'), array('controller' => 'restrictionsmokings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Upload Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rooms'), array('controller' => 'rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Room'), array('controller' => 'rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restrictiondecorations'), array('controller' => 'restrictiondecorations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restrictiondecoration'), array('controller' => 'restrictiondecorations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Featurecateringrestrictions'), array('controller' => 'featurecateringrestrictions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Featurecateringrestriction'), array('controller' => 'featurecateringrestrictions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Availabilities'), array('controller' => 'availabilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Availability'), array('controller' => 'availabilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suitabilities'), array('controller' => 'suitabilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Suitability'), array('controller' => 'suitabilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pricings'), array('controller' => 'pricings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pricing'), array('controller' => 'pricings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Technical Facilities'), array('controller' => 'technical_facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technical Facility'), array('controller' => 'technical_facilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indoorfacilities'), array('controller' => 'indoorfacilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indoorfacility'), array('controller' => 'indoorfacilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Outdoorfacilities'), array('controller' => 'outdoorfacilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Outdoorfacility'), array('controller' => 'outdoorfacilities', 'action' => 'add')); ?> </li>
	</ul>
</div>
