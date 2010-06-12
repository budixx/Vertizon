<div class="featureds form">
<?php echo $this->Form->create('Featured',array('type' => 'file'));?>
	<fieldset>
 		<legend><?php __('Admin Edit Featured'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('content',array('class' => 'ckeditor'));
		echo $this->Form->input('file',array('type' => 'file'));
		echo $this->Form->input('link');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Featured.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Featured.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Featureds', true), array('action' => 'index'));?></li>
	</ul>
</div>