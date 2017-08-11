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
</head>
<body>
	<div id="container">
		<div id="content">
<?php echo $this->Session->flash(); ?>
<p>
	<?php
		$user = $this->Session->read('Auth.User');
		if(!empty($user)) {
		    echo 'Hi ', $user['username'], ' ', $this->Html->link('Logout', '/users/logout');
		} else {
				echo $this->Html->link('Login', '/users/login');
		}
		echo '<br/>';
		echo $this->Html->link('Go Home', '/') . ' - ' . $this->Html->link('Messages', '/messages');
	?>
</p>
<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
