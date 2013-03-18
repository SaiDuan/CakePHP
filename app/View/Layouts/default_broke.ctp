<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('template.css'));
           echo $this->Html->script(array('jquery-1.8.2.min','jquery-ui-1.8.24.custom.min',
'development-bundle/ui/jquery.ui.widget',
'development-bundle/ui/jquery.ui.datepicker',
'development-bundle/ui/jquery.ui.core',
'development-bundle/ui/jquery.ui.button',
'development-bundle/ui/jquery.ui.dialog',
'development-bundle/ui/jquery.ui.mouse',
'development-bundle/ui/jquery.ui.position',
'development-bundle/ui/jquery.ui.draggable',
'development-bundle/ui/jquery.ui.sortable',
'development-bundle/ui/jquery.ui.droppable',
'development-bundle/ui/jquery.ui.tabs'));
		echo $scripts_for_layout;
	?>
 <script>
    $(function() {
        $( "#tabs" ).tabs();
    });
    </script>
</head>
<body>
		<div id="content">
			<div id = "header">
                <!--<div id = "logo">-->

 <?php echo $this->Html->image('logo.png', array('alt' => 'Logo', 'url' => array('controller' => 'pages', 'action' => 'display', 'home'))); ?>

<!--<?php echo $this->Html->image('logo.png', array('alt'=>'Logo', 'url' => array('action' => 'pages/home')))?>-->

			<div id = "top_right">

<?php if (!isset($logged_in)) {$logged_in = false;}?>
				<?php if ($logged_in): ?>
					Welcome <?php echo $current_user['username']; ?>.  <?php echo $this->Html->link('Logout',array('controller'=>'users', 'action'=>'logout')); ?>
				<?php else: ?>
					Already Member? <?php echo $this->Html->link('Login',array('controller'=>'users', 'action'=>'login')); ?>
				<?php endif; ?>	

                </div>
			</div>	
			</div>
<div id="menu">
													<div class="moduletable">
					<ul class="menu" id="navlist"><li id="current" class="active item54"><a href="http://ie.infotech.monash.edu.au/project25/CakePHP/"><span>Search</span></a></li><li class="item55"><a href="/project25/hallsforhire/index.php/about"><span>About</span></a></li><li class="item83"><a href="/project25/CakePHP/halls"><span>List your hall</span></a></li><?php if ( ($current_user['user_group'] == 'admin') || ($current_user['user_group'] == 'active') || ($current_user['user_group'] == 'inactive')): ?><li class="item82"><a href="/project25/CakePHP/hallsowners"><span>My Profile Panel</span></a></li><?php endif; ?></ul>		</div>
	
										</div>	
<div id = "top_rest">
			<?php echo $this->Session->flash(); ?>
				<?php echo $this->Session->flash('auth'); ?>

			<?php echo $content_for_layout; ?>
	
		</div>
		
	</div>


</body>

</html>