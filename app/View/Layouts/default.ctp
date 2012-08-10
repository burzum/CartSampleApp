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

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('app');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>CakePHP Cart Plugin Sample App <small>http://github.com/burzum/Cart</small></h1>
		</div>
		<ul class="nav">
			<li>
				<?php
					echo $this->Html->link(__('Items'), array(
						'plugin' => null, 'controller' => 'items', 'action' => 'index'));
				?>
			</li>
			<li>
				<?php
					echo $this->Html->link(__('Cart'), array(
						'plugin' => 'cart', 'controller' => 'carts', 'action' => 'view'));
				?>
			</li>
			<li>
				<?php
					echo $this->Html->link(__('Login'), array(
						'plugin' => 'users', 'controller' => 'users', 'action' => 'login'));
				?>
			</li>
		</ul>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => 'CakePHP', 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
