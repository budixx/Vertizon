<div class="featureds form">
<?php echo $this->Form->create('Featured',array('type' => 'file'));?>
	<fieldset>
 		<legend><?php __('Admin Add Featured'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Featureds', true), array('action' => 'index'));?></li>
	</ul>
</div>