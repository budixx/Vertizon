<div class="pcategories form">
<?php echo $this->Form->create('Pcategory');?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Pcategory', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pcategories', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pbrands', true)), array('controller' => 'pbrands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Pbrand', true)), array('controller' => 'pbrands', 'action' => 'add')); ?> </li>
	</ul>
</div>