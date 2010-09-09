<div class="reviews form">
<?php echo $this->Form->create('Review');?>
	<fieldset>
 		<legend><?php __('Add Review'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('title');
		echo $this->Form->input('desc');
		echo $this->Form->input('date');
		echo $this->Form->input('slug');
		echo $this->Form->input('file');
		echo $this->Form->input('dirname');
		echo $this->Form->input('basename');
		echo $this->Form->input('checksum');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Reviews', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>