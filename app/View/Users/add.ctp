
<div class="navbar navbar-inverse navbar-static-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          
        </div>
      </div>
    </div><Br><br>

<div class="users form">

<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Register with Halls for Hire! '); ?></legend>

<?php
echo '<table width ="80%" align="left">';
echo '<tr><td><br/></td></tr>';

echo '<tr><td align ="left"><w5><b>Username: </b></w5></td><td align ="left">';

echo $this->Form->input('username', array('type'=>'text','size'=>'30','label'=>''));

echo '</td></tr>' ;
?>

	<?php
		$currentdatetime = date('Y-m-d H:i:s');
		$expiredate = date('Y-m-d H:i:s');
		echo $this->Form->input('User.username', array('label' => 'Username'));
		echo $this->Form->input('User.password');
		echo $this->Form->input('User.password_confirmation',array('type'=>'password', 'label' => 'Password Confirmation'));
		echo $this->Form->hidden('User.modified_time', array('value' => $currentdatetime));
		echo $this->Form->hidden('User.password_modified_time', array('value' => $currentdatetime));
		echo $this->Form->input('User.email');
		$expiredate = date('Y-m-d H:i:s', strtotime('+1 year',strtotime($currentdatetime)));
		echo $this->Form->hidden('User.activate_code', array('value' => $activate));

		echo $this->Form->input('Hallsowner.hallsowner_first_name', array('label' => 'First name'));
		echo $this->Form->input('Hallsowner.hallsowner_last_name', array('label' => 'Last name'));
		echo $this->Form->input('Hallsowner.hallsowner_address', array('label' => 'Address'));
		echo $this->Form->input('Hallsowner.hallsowner_email', array('label' => 'E-mail'));
		echo $this->Form->input('Hallsowner.hallsowner_fax', array('label' => 'Fax'));
		echo $this->Form->input('Hallsowner.hallsowner_phone_number', array('label' => 'Contact Number'));
		echo $this->Form->input('Hallsowner.hallsowner_secondary_contract');
		echo $this->Form->hidden('Hallsowner.hallsowner_modified_time', array('value' => $currentdatetime));
		echo $this->Form->hidden('Hallsowner.registration_date', array('value' => $currentdatetime));
		echo $this->Form->hidden('Hallsowner.subtypes_id', array('value' => '2'));
		echo $this->Form->hidden('Hallsowner.start_date', array('value' => $currentdatetime));
		echo $this->Form->hidden('Hallsowner.expire_date', array('value' => $expiredate));

	?>
	</fieldset>

<?php echo $this->Form->end(__('Register'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Hallsowners'), array('controller' => 'hallsowners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hallsowner'), array('controller' => 'hallsowners', 'action' => 'add')); ?> </li>
	</ul>
</div>
