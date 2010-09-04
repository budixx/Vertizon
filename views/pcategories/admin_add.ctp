<div class="pcategories form">
<?php echo $this->Form->create('Pcategory',array('type' => 'file'));?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Category', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('file',array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Categories', true)), array('action' => 'index'));?></li>
	</ul>
</div>