<h2>Activate your Account</h2>
<?php echo $this->Form->create('User');?>

<?php

echo $this->Form->input('confirmActivateCode', array('label'=>'Please type in your account activate code: ','value'=>'', 'type' => 'password'));

?>
<?php echo $this->Form->end(__('Submit'));

?>
