<div class="cities form">
<?php echo $this->Form->create('City');?>
	<fieldset>
 		<legend><?php __('Admin Edit City'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('province_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('City.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('City.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cities', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Provinces', true), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province', true), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dealers', true), array('controller' => 'dealers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dealer', true), array('controller' => 'dealers', 'action' => 'add')); ?> </li>
	</ul>
</div>