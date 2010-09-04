<div class="ptypes form">
<?php echo $this->Form->create('Ptype');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Type', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pbrand_id',array('label' => 'Brand'));
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Ptype.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Ptype.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Types', true)), array('action' => 'index'));?></li>
	</ul>
</div>