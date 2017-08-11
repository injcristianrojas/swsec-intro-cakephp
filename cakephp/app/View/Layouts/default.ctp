<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Make it secure.
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<style type="text/css">
		.Praetorian {
			font-family: sans-serif;
			font-size: 14pt;
			position: fixed;
			bottom: 1%;
			right: 1%;
			color: black;
			text-decoration: none;
		}
</style>
</head>
<body>
	<div id="container">
		<div id="content">
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<p><?php echo $this->Html->link('Go Home', '/') . ' - ' . $this->Html->link('Messages', '/messages'); ?></p>
</body>
</html>
