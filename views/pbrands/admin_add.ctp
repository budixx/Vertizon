<div class="pbrands form">
<?php echo $this->Form->create('Pbrand',array('type' => 'file'));?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Brand', true)); ?></legend>
	<?php
		echo $this->Form->input('pcategory_id',array('label' => 'Category'));
		echo $this->Form->input('name');
		echo $this->Form->input('file',array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Brands', true)), array('action' => 'index'));?></li>
	</ul>
</div>