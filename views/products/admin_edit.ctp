<div class="products form">
<?php echo $this->Form->create('Product');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Product', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ptype_id');
		echo $this->Form->input('name');
		echo $this->Form->input('desc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Product.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Product.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Products', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ptypes', true)), array('controller' => 'ptypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ptype', true)), array('controller' => 'ptypes', 'action' => 'add')); ?> </li>
	</ul>
</div>