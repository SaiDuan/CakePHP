<br />
<br />
<h2 class ="componentheading">Change Password</h2>
<?php echo $this->Form->create('User');?>

<?php
		$currentdatetime = date('Y-m-d H:i:s');

		
echo $this->Form->input('oldpassword', array('label'=>'Current Password', 'value'=>'', 'type'=>'password'));

echo $this->Form->input('password', array('label'=>'New Password','value'=>'', 'type' => 'password'));

		echo $this->Form->input('password_confirmation', array('label'=>'New Password Confirmation', 'type'=>'password'));

		echo $this->Form->hidden('password_modified_time', array('value' => $currentdatetime));

?>
<?php echo $this->Form->end(__('Submit'));

?>