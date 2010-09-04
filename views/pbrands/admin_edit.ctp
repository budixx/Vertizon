<div class="pbrands form">
<?php echo $this->Form->create('Pbrand');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Brand', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pcategory_id',array('label' => 'Category'));
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Pbrand.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Pbrand.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Brands', true)), array('action' => 'index'));?></li>
	</ul>
</div>