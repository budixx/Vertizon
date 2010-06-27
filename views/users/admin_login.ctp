<div class="users form">
<div class="title-content"><strong>Login</strong></div>
<?php
	echo  $session->flash('auth');
?>
<?php echo $this->Form->create('User',array('action' => 'login'));?>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
<?php echo $this->Form->end(__('Login', true));?>
</div>
