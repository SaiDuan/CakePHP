



    <script>
    $(function() {
        $( "#tabs" ).tabs();
        $( "#accordion" ).accordion();
    });
    </script>

<br></br>
<br></br>


<div class="halls form">
<?php echo $this->Form->create('Hall', array('enctype' => 'multipart/form-data')); //change for image?> 

		<h2 class ="formTitle"><?php echo __('Add Hall'); ?></h2> 
<div id="tabs"> 
<ul> 
<li><a href="#tab1">Halls Details</a></li> 
<li><a href="#tab2">Rooms & Capacity</a></li> 
<li><a href="#tab3">Hall Features</a></li> 
<li><a href="#tab4">Suitabilities</a></li> 
<li><a href="#tab5">Hall Inclusions</a></li> 
<li><a href="#tab6">Hall Availability</a></li> 
<li><a href="#tab7">Hall Restrictions</a></li> 
<li><a href="#tab8">Pricing</a></li> 
</ul>
<div id = "tab1">
<fieldset>
<legend>Hall Details</legend>
<?php
echo '<table width ="80%" align="left">';
echo '<tr><td><br/></td></tr>';
echo '<tr><td align ="left" width="30%"><w5><b><u>Hall Details</u></b></w5></td></tr>';
echo '<tr><td align ="left"><w5><b>Hall Name: </b></w5></td><td align ="left">';
echo '<w5>';
echo $this->Form->input('hall_name', array('type'=>'text','size'=>'30','label'=>''));
echo '</w5>';
echo '</td></tr>' ;
?>
<?php
		echo $this->Form->input('hall_name');
		echo $this->Form->input('country_code');
		echo $this->Form->input('phone_number');
		echo $this->Form->input('street_address');
		echo $this->Form->input('suburb');
		echo $this->Form->input('state');
		echo $this->Form->input('country');
		echo $this->Form->input('postcode/zipcode');
		echo $this->Form->input('website');
		echo $this->Form->input('email');
		echo $this->Form->input('hall_description', array('type'=>'textarea') );
                echo $this->Form->file('image', array('label' =>'Image: ','size'=>'50')); //change for image

?>
</fieldset>
</div>
<div id = "tab2">
<fieldset>
	<legend>Rooms & Capacity</legend>

	<?php
		echo $this->Form->input('capacity');
	?>

</fieldset>

</div>
<div id = "tab3">
<fieldset>
<br></br>

	<legend>Hall Features</legend>

<table>

<?php
echo "<tr>";
echo "<td>"; 
echo __('Features Private Area ');
echo "</td>";
echo "<td>";
$halls=array('Yes'=>'Yes','No'=>'No'); $attributes=array('legend'=>false); echo $this->Form->radio('features_private_area',$halls,$attributes);
echo "</td>";
echo "</tr>";
?>


<?php
echo "<tr>"; 
echo "<td>"; 
echo __('Features Private Toilets ');
echo "</td>";
echo "<td>";
$halls=array('Yes'=>'Yes','No'=>'No'); $attributes=array('legend'=>false); echo $this->Form->radio('features_private_toilets',$halls,$attributes);
echo "</td>";
echo "</tr>"; 
?> 

<?php
echo "<tr>"; 
echo "<td>"; 
echo __('Features Disabled Toilets');
echo "</td>";
echo "<td>";
$halls=array('Yes'=>'Yes','No'=>'No'); $attributes=array('legend'=>false); echo $this->Form->radio('features_disabled_toilets',$halls,$attributes);
echo "</td>";
echo "</tr>"; 
?> 



<?php
echo "<tr>"; 
echo "<td>"; 
echo __('Features Wheelchair Access');
echo "</td>";
echo "<td>";
$halls=array('Yes'=>'Yes','No'=>'No'); $attributes=array('legend'=>false); echo $this->Form->radio('features_wheelchair_access',$halls,$attributes);
echo "</td>";
echo "<tr>"; 
?> 




<?php
echo "<tr>";
echo "<td>";  
echo __('Features Venue Catering');
echo "</td>";
echo "<td>";
$halls=array('Yes'=>'Yes','No'=>'No'); $attributes=array('legend'=>false); echo $this->Form->radio('features_venue_catering',$halls,$attributes);
echo "</td>";
echo "</tr>"; 
?> 



<?php
echo "<tr>";
echo "<td>";  
echo __('Features Other Catering');
echo "</td>";
echo "<td>";
$halls=array('Yes'=>'Yes','No'=>'No'); $attributes=array('legend'=>false); echo $this->Form->radio('features_other_catering',$halls,$attributes);
echo "</td>";
echo "</tr>"; 

echo "<tr>"; 
echo "<td>"; 
echo $this->Form->input('featureexternalcaterings_id');
echo "</td>"; 
echo "</tr>"; 

echo "<tr>"; 
echo "<td>"; 
echo $this->Form->input('featureparkings_id');
echo "</td>"; 
echo "</tr>"; 
?> 

</table>

</fieldset>
</div>
<div id = "tab4">		
<fieldset>
		<legend>Suitabilities</legend>
<table cellpadding='1' width='50%'> 
<?php 
foreach ($suitabilities as $id=>$label) 
{ 
echo "<tr>"; 
echo "<td class='heading'>".$label."</td>"; 
echo "<td class='data'>"; 
echo $this->Form->input("Suitability.checkbox.$id", array('label'=>'','legend'=>false,'type'=>'checkbox',)); 
echo "</td>"; 
echo "</tr>"; 
} 
?> 
</table> 
</fieldset>
</div>
<div id = "tab5">

<fieldset>
		<legend>Hall Inclusions</legend>
<div id="accordion">
<legend>Indoor Facilties</legend>
<div>

			<?php
				echo $this->Form->input('Indoorfacility');
				echo $this->Form->input('indoor_facilities_other', array('type'=>'textarea') );
			?>

</div>
<legend>Outdoor Facilities</legend> 
<div>

			<?php
				echo $this->Form->input('Outdoorfacility');
				echo $this->Form->input('outdoor_facitilities_other', array('type'=>'textarea') );
				
			?>

</div>
<legend>Technical Facilities</legend>
<div> 

			<?php
				echo $this->Form->input('TechnicalFacility');
				echo $this->Form->input('technical_facilities_other',array('type'=>'textarea') );
			?>

</div>
<legend>Party Facilities</legend>
<div>

			<?php
				echo $this->Form->input('partyfacilitiesdjs_id');
		echo $this->Form->input('partyfacilitymusics_id');
		echo $this->Form->input('partyfacilitybands_id');
		echo $this->Form->input('partyfacilitydiscos_id');
		echo $this->Form->input('partyfacilitydancefloors_id');
		echo $this->Form->input('party_facilities_other' , array('type'=>'textarea') );
			?>

</div>
</div>
</fieldset>

</div>
<div id = "tab6">
<fieldset>
	<legend>Hall Availability</legend>
<table cellpadding='1' width='50%'> 
<?php 
foreach ($availabilities as $id=>$label) 
{ 
echo "<tr>"; 
echo "<td class='heading'>".$label."</td>"; 
echo "<td class='data'>"; 
echo $this->Form->input("Availability.checkbox.$id", array('label'=>'','legend'=>false,'type'=>'checkbox',)); 
echo "</td>"; 
echo "</tr>"; 
} 
?> 
</table> 
</fieldset>

</div>
<div id = "tab7">
<fieldset>
	<legend>Hall Restrictions</legend>
	<?php

		echo $this->Form->input('restrictionnoises_id');
		echo $this->Form->input('restrictionevents_id');
		echo $this->Form->input('restrictionminors_id');
		echo $this->Form->input('restrictionanimals_id');
		echo $this->Form->input('restrictionsmokings_id');
		?>
<table cellpadding='1' width='50%'> 
<?php 
foreach ($featurecateringrestrictions as $id=>$label) 
{ 
echo "<tr>"; 
echo "<td class='heading'>".$label."</td>"; 
echo "<td class='data'>"; 
echo $this->Form->input("Featurecateringrestriction.checkbox.$id", array('label'=>'','legend'=>false,'type'=>'checkbox',)); 
echo "</td>"; 
echo "</tr>"; 
} 
?> 
</table>
<table cellpadding='1' width='50%'> 
<?php 
foreach ($restrictiondecorations as $id=>$label) 
{ 
echo "<tr>"; 
echo "<td class='heading'>".$label."</td>"; 
echo "<td class='data'>"; 
echo $this->Form->input("Restrictiondecoration.checkbox.$id", array('label'=>'','legend'=>false,'type'=>'checkbox',)); 
echo "</td>"; 
echo "</tr>"; 
} 
?> 
</table>
<?php echo $this->Form->input('halls_restriction_other', array('type'=>'textarea'));?>
</fieldset>
</div>
<div id = "tab8">
<fieldset>
<legend>Pricing</legend>
<?php

echo $this->Form->input('Pricing');
?>


</fieldset>
<br></br>
<?php echo $this->Form->input('hallsowners_id'); ?>
	
<?php echo $this->Form->end(__('Submit'));?>
</div>
</div>
</div>

