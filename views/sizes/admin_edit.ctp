<div class="sizes form">
<?php echo $this->Form->create('Size');?>
	<fieldset>
 		<legend><?php __('Admin Edit Size'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Wallpaper');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Size.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Size.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sizes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Wallpapers', true), array('controller' => 'wallpapers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wallpaper', true), array('controller' => 'wallpapers', 'action' => 'add')); ?> </li>
	</ul>
</div>