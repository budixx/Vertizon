<div class="wallpapers form">
<?php echo $this->Form->create('Wallpaper');?>
	<fieldset>
 		<legend><?php __('Admin Edit Wallpaper'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Wallpaper.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Wallpaper.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Wallpapers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sizes', true), array('controller' => 'sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size', true), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
	</ul>
</div>