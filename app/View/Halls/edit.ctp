<div class="halls form">
    
    
<?php echo $this->Form->create('Hall', array('enctype' => 'multipart/form-data'));  //change for image
        echo $this->Form->input('id'); // change for image


?>
	<fieldset>
		<legend><?php echo __('Edit Hall'); ?></legend>
<table cellpadding='1' width='50%'> 
<?php 
foreach ($availabilities as $id=>$label) 
{ 
echo "<tr>"; 
echo "<td class='heading'>".$label."</td>"; 
echo "<td class='data'>"; 
echo $this->Form->input('Availability.checkbox.$id', array('label'=>'','legend'=>false,'type'=>'checkbox',)); 
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
<table cellpadding='1' width='50%'> 
<?php 
foreach($pricings as $pricing) 
{ 
$price_fee = ""; 
$hmID = $pricing['Pricing']['id'];
$price_fee = $pricing['HallsHasPricing']['price_fee']; 
echo "<tr>"; 
echo "<td class='heading'>".$pricing['Pricing']['price_name']."</td>"; 
echo "<td class='data'>"; 
echo $this->Form->input("pricing.textbox.$hmID", array('label' =>'','size'=>'50', 'value'=>$price_fee)); 
echo "</td>"; 
echo "</tr>"; 
$price_fee = "";
} 
?> 
</table> 
<?php $halls=array('Yes'=>'Yes','No'=>'No'); $attributes=array('legend'=>false); echo $this->Form->radio('features_private_area',$halls,$attributes); ?>

	<?php
		echo $this->Form->input('id');
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
		echo $this->Form->input('hall_description');
		echo $this->Form->input('capacity');
		echo $this->Form->input('features_private_toilets');
		echo $this->Form->input('features_disabled_toilets');
		echo $this->Form->input('features_wheelchair_access');
		echo $this->Form->input('features_venue_catering');
		echo $this->Form->input('features_other_catering');
		echo $this->Form->input('indoor_facilities_other');
		echo $this->Form->input('outdoor_facitilities_other');
		echo $this->Form->input('technical_facilities_other');
		echo $this->Form->input('party_facilities_other');
		echo $this->Form->input('halls_restriction_other');
		echo $this->Form->input('hallsowners_id');
		echo $this->Form->input('featureparkings_id');
		echo $this->Form->input('featureexternalcaterings_id');
		echo $this->Form->input('partyfacilitiesdjs_id');
		echo $this->Form->input('partyfacilitymusics_id');
		echo $this->Form->input('partyfacilitybands_id');
		echo $this->Form->input('partyfacilitydiscos_id');
		echo $this->Form->input('partyfacilitydancefloors_id');
		echo $this->Form->input('restrictionnoises_id');
		echo $this->Form->input('restrictionevents_id');
		echo $this->Form->input('restrictionminors_id');
		echo $this->Form->input('restrictionanimals_id');
		echo $this->Form->input('restrictionsmokings_id');
		echo $this->Form->input('Restrictiondecoration');
		echo $this->Form->input('Featurecateringrestriction');
		echo $this->Form->input('Availability');
		echo $this->Form->input('Suitability');
		echo $this->Form->input('Pricing');
		echo $this->Form->input('TechnicalFacility');
		echo $this->Form->input('Indoorfacility');
		echo $this->Form->input('Outdoorfacility');
                
                if(isset($blnImage)) 
                { 
                    if($blnImage == "true") 
                { 
                    echo "<table width ='60%'>"; 
                    echo "<tr>"; 
                    echo "<td>"; 
                    $urlEdit = array('controller' => 'halls','action' => 'deleteImage',$hall['Hall']['id']); 
                    echo $this->Form->button('Delete Current Image', array('onclick' => "location.href='".$this->Html->url($urlEdit)."'")); 
                    echo "</td>"; 
                    echo "</tr>"; 
                    echo "</table>"; 
                } 
                } 
                echo $this->Form->file('image', array('label' =>'', 'size'=>'60'));
                if($blnImage) 
                { 
                    echo "Current Image: ";
                    echo $hall['Hall']['image']."<br /><br />"; 
                echo $this->Html->image('images/'.$hall['Hall']['image'], array('width'=>'250px','height'=>'200px')); 
                } 
                else 
                { 
                    echo "no image available"; 
                } 
                
                
                
	?>
	</fieldset>
<?php echo $this->Form->submit(__('Submit'));?>
</div>
