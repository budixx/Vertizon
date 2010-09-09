<div class="reviews form">
<?php echo $this->Form->create('Review',array('type' => 'file'));?>
	<fieldset>
 		<legend><?php __('Admin Add Review'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('title');
		echo $this->Form->input('desc',array('class' => 'ckeditor'));
		echo $this->Form->input('date');
		echo $this->Form->input('file',array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Reviews', true), array('action' => 'index'));?></li>
	</ul>
</div>