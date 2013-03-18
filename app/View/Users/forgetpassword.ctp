<br></br>
<br></br>
<h2 style="margin-left:30px">Forgot your password?</h2>
<?php echo $this->Form->create('User');?>

<div style="margin-left:30px"><?php 
	echo $this->Form->input('email', array('label'=>'Please type in your email address'));

?>
<?php echo $this->Form->end(__('Submit'));?>
<!--<?php echo $this->element('sql_dump'); ?>-->
</div>