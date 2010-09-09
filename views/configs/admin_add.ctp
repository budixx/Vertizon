<div class="configs form">
<?php echo $this->Form->create('Config');?>
	<fieldset>
 		<legend><?php __('Admin Add Config'); ?></legend>
	<?php
		echo $this->Form->input('config');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Configs', true), array('action' => 'index'));?></li>
	</ul>
</div>