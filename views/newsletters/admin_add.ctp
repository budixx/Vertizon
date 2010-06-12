<div class="newsletters form">
<?php echo $this->Form->create('Newsletter');?>
	<fieldset>
 		<legend><?php __('Admin Add Newsletter'); ?></legend>
	<?php
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Newsletters', true), array('action' => 'index'));?></li>
	</ul>
</div>