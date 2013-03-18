<?=$form->create('Halls',array('id'=>'HallsForm','url'=>$this->here));?> 
<h2>Step 1</h2>
<ul>
<li><?=$form->input('hall_name', array('label'=>'Hall's Name:','size'=>20,'div'=>false));?></li> 

</ul>
<div class="submit">
<?=$form->submit('Continue', array('div'=>false));?>
<?=$form->submit('Cancel', array('name'=>'Cancel','div'=>false));?>
</div> 
<?=$form->end();?>
