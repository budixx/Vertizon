<div class="contents form">
<?php echo $this->Form->create('Content');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Content', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type_id');
		echo $this->Form->input('title');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Content.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Content.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Contents', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Types', true)), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Type', true)), array('controller' => 'types', 'action' => 'add')); ?> </li>
	</ul>
</div>