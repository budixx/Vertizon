<div class="ptypes form">
<?php echo $this->Form->create('Ptype');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Ptype', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pbrand_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Ptype.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Ptype.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ptypes', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pbrands', true)), array('controller' => 'pbrands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Pbrand', true)), array('controller' => 'pbrands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Products', true)), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Product', true)), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>