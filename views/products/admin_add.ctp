<div class="products form">
<?php echo $this->Form->create('Product',array('type' => 'file'));?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Product', true)); ?></legend>
	<?php
		echo $this->Form->input('ptype_id');
		echo $this->Form->input('name');
		echo $this->Form->input('desc',array('class' => 'ckeditor'));
		echo $this->Form->input('file',array('type' => 'file'));
		echo $this->Form->input('featured');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Products', true)), array('action' => 'index'));?></li>
	</ul>
</div>