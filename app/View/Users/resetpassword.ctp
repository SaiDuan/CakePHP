<br></br>
<br></br>
<h2 style="margin-left:30px">Reset Password</h2>
<?php
if(isset($errors)){
echo '<div class="error">';
echo "<ul>";
foreach($errors as $error){
echo"<li><div class='error-message'>$error</div></li>";
}
echo"</ul>";
echo'</div>';
}
?>
<form method="post">
<?php
echo $this->Form->input('password',array("type"=>"password","name"=>"data[User][password]"));
echo $this->Form->input('password_confirmation',array("type"=>"password","name"=>"data[User][password_confirmation]"));
?>
<input type="submit" class="button" style="float:left;margin-left:3px;" value="Save" />
</form>
</div>