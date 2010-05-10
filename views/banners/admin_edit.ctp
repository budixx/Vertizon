<div class="banners form">
<?php echo $this->Form->create('Banner');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Banner', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('image');
		echo $this->Form->input('link');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Banner.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Banner.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Banners', true)), array('action' => 'index'));?></li>
	</ul>
</div>