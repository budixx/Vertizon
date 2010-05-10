<div class="banners form">
<?php echo $this->Form->create('Banner');?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Banner', true)); ?></legend>
	<?php
		echo $this->Form->input('image');
		echo $this->Form->input('link');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Banners', true)), array('action' => 'index'));?></li>
	</ul>
</div>