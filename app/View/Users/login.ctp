

<br />
 <div class="moduletable"> 
<div id = "main2">


<div class="name">

<?php
echo $this->Form->create();?>

</div>


<?php

echo '<table width ="100%" align="left" style="margin-left:20%">';

echo '<tr><td><br/></td></tr>';

echo '<tr><td align ="left" width="30%"><h2 class:"componentheading">Login</h2></td></tr>';

echo '<tr><td align ="left"><h3> Username: </h3></td>


<td align ="left">';

echo $this->Form->input('username', array('class'=>'logininput','type'=>'text','size'=>'30','label'=>''));

echo '</td></tr>' ;


echo '<tr><td align ="left"><h3> Password: </h3></td>

<td align ="left">';

echo $this->Form->input('password', array('class'=>'logininput','size'=>'30','label'=>''));

echo '</td></tr>' ;
echo '<tr><td><br/></td></tr>';

echo '<tr><td>' ;
echo $this->Form->button('Login');
echo '</td>' ;

echo '<td align ="right" width="25%">';
echo $this->Html->link(__('Forgot Your Password?'), array('action'=>'forgetpassword'));
echo '</td>' ;
echo '<td align ="right" width="25%">';
echo $this->Html->link('Create New Account', array('controller'=>'users','action'=>'add'));
echo '</td>' ;
echo '</tr>' ;


//echo '<tr><td><br/></td></tr>';
//echo '<tr><td>';
//echo $this->Html->link('Create New Account', array('controller'=>'users','action'=>'add'));
//echo '</td>' ;
//echo '</tr>' ;
//?>
</div>

</div>


