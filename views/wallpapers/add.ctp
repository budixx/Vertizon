<div class="wallpapers form">
<?php echo $this->Form->create('Wallpaper');?>
	<fieldset>
 		<legend><?php __('Add Wallpaper'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('file');
		echo $this->Form->input('dirname');
		echo $this->Form->input('basename');
		echo $this->Form->input('checksum');
		echo $this->Form->input('Size');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Wallpapers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sizes', true), array('controller' => 'sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size', true), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
	</ul>
</div>