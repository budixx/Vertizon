<div class="contacts form">
<?php echo $this->Form->create('Contact');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Contact', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Contact.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Contact.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Contacts', true)), array('action' => 'index'));?></li>
	</ul>
</div>