<br></br>
<br></br>


		<h2 class ="formTitle"><?php echo __('Search Hall'); ?></h2> 

<?php
		echo $this->Form->create('Halls', array('url'=>array('action' => 'search') , 'type' => 'get' )); //array('type' => 'get'));

echo $this->Form->input('q', array('label'=>'', 'type'=>'textbox'));

echo $this->Form->end(__('Submit'));

?>
</fieldset>
</div>


<div><b>Search Results: </b></div>

<?php if($query) {
    echo '<table>';
    echo '<tr><td><b>Halls ID</b></td><td><b>Halls Name</b></td><td><b>Halls Address</b></td></tr>';
 foreach($halls as $hall){
 ?>
 <div id="result">
 <tr>
     <td><div id="id"><?php echo $hall['Hall']['id'];?></div></td>
     <td><div id="name"><?php echo $hall['Hall']['hall_name'];?></div></td>
     <td><div id="name"><?php echo $hall['Hall']['street_address'];?></div></td>

 </tr>
<br></br><br></br>
<?php 
 }

 
 echo '</table>';
}
 ;?>


<div class="paging">

	 <?php

	 $this->Paginator->options(array('url' => array_merge($this->passedArgs,
 
array('?' => "&q=".urlencode($query))))); //Add this line

		 echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => 'prev disabled'));
 
		echo $this->Paginator->numbers(array('separator' => ' | '));

		 echo $this->Paginator->next(__(' next') . ' >', array(), null, array('class' => 'next disabled'));
 
	?>

	 </div>