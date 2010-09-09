<div class="cities form">
<?php echo $this->Form->create('City');?>
	<fieldset>
 		<legend><?php __('Admin Add City'); ?></legend>
	<?php
		echo $this->Form->input('province_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cities', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Provinces', true), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province', true), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dealers', true), array('controller' => 'dealers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dealer', true), array('controller' => 'dealers', 'action' => 'add')); ?> </li>
	</ul>
</div>