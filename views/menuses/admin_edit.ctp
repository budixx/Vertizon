<div class="menuses form">
<?php echo $this->Form->create('Menus');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Menu', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('name');
		echo $this->Form->input('content',array('class' => 'ckeditor'));
		echo $this->Form->input('link');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Menus.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Menus.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Menuses', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Menuses', true)), array('controller' => 'menuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Parent Menus', true)), array('controller' => 'menuses', 'action' => 'add')); ?> </li>
	</ul>
</div>