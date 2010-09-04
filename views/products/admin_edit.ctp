<div class="products form">
<?php echo $this->Form->create('Product',array('type' => 'file'));?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Product', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ptype_id',array('label' => 'Type'));
		echo $this->Form->input('name');
		echo $this->Form->input('desc',array('class' => 'ckeditor'));
		echo $this->Form->input('featured');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Product.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Product.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Products', true)), array('action' => 'index'));?></li>
	</ul>
</div>